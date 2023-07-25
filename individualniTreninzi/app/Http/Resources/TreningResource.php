<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TreningResource extends JsonResource
{
     /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID -> ' => $this->resource->id,
            'Naziv treninga -> ' => $this->resource->naziv,
            'Trajanje treninga u minutima -> ' => $this->resource->trajanje,
            'Nivo tezine trenings -> ' => $this->resource->nivoTezine,
            'Polaznik -> ' => new PolaznikResource($this->resource->polaznik),
            'Instruktor -> ' => new InstruktorResource($this->resource->instruktor)
        ];
    }
}
