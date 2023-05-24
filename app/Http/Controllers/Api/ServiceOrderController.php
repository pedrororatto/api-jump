<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceOrdersRequest;
use App\Http\Resources\ServiceOrderResource;
use App\Models\ServiceOrder;
use Illuminate\Http\Request;

class ServiceOrderController extends Controller
{
    public function index(Request $request)
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

    public function store(StoreServiceOrdersRequest $request)
    {
        $data = $request->validated();
        
        $order = ServiceOrder::create($data);

        return response()->json([
            'message' => 'Ordem de serviço criada com sucesso', 
            'data' => $order
        ], 201);
    }
}
