<?php

namespace App\Http\Resources;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceOrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'vehiclePlate' => $this->vehiclePlate,
            'entryDateTime' => Carbon::make($this->entryDateTime)->format('Y-m-d H:i:s'),
            'exitDateTime' => $this->exitDateTime ? Carbon::make($this->exitDateTime)->format('Y-m-d H:i:s') : $this->exitDateTime,
            'priceType' => $this->priceType,
            'price' => $this->price,
            'userName' => UserResource::make($this->user)->name,
        ];
    }
}
