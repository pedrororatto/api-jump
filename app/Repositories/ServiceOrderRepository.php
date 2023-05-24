<?php

namespace App\Repositories;

use App\Http\Resources\ServiceOrderResource;
use App\Models\ServiceOrder;
use Illuminate\Support\Facades\Log;

class ServiceOrderRepository 
{
    public function getServiceOrders($request)
    {
        $perPage = 5;
        $page = $request->query('page', 1);
        $vehiclePlate = $request->query('vehiclePlate');

        $serviceOrders = ServiceOrder::with('user')
            ->when($vehiclePlate, function ($query) use ($vehiclePlate) {
                $query->where('vehiclePlate', 'LIKE', "%$vehiclePlate%");
            })
            ->paginate($perPage, ['*'], 'page', $page);
        
        return ServiceOrderResource::collection($serviceOrders);
    }

    public function storeServiceOrder($request)
    {
        try {
            $data = $request->validated();
            $order = ServiceOrder::create($data);

            return response()->json([
                'message' => 'Ordem de serviço criada com sucesso', 
                'data' => $order
            ], 201);
        } catch (\Exception $e) {
            Log::error('Erro ao criar ordem do serviço: ' . $e->getMessage());
            return response()->json([
                'message' => 'Erro ao criar ordem do serviço',
            ], 500);
        }
    }
}