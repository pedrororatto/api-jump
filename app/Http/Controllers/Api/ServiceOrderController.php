<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceOrdersRequest;
use App\Models\ServiceOrder;
use App\Repositories\ServiceOrderRepository;
use Illuminate\Http\Request;

class ServiceOrderController extends Controller
{
    public function __construct(private ServiceOrderRepository $repository)
    {
    }

    public function index(Request $request)
    {
        return $this->repository->getServiceOrders($request);
    }

    public function store(StoreServiceOrdersRequest $request)
    {
        return $this->repository->storeServiceOrder($request);
    }
}
