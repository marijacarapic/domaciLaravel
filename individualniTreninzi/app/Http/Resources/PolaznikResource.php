<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PolaznikResource extends JsonResource
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
            'Ime prezime polaznika -> ' => $this->resource->imePrezime,
            'Grad iz kog je polaznik -> ' => $this->resource->grad,
            'Godiste -> ' => $this->resource->godiste
        ];
    }
}
