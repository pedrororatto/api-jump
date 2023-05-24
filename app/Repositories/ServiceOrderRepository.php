<?php

namespace App\Repositories;

use App\Http\Resources\ServiceOrderResource;
use App\Models\ServiceOrder;
use Illuminate\Http\Request;

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
        $data = $request->validated();
        
        $order = ServiceOrder::create($data);

        return response()->json([
            'message' => 'Ordem de serviço criada com sucesso', 
            'data' => $order
        ], 201);
    }
}