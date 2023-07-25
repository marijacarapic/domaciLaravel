<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InstruktorResource extends JsonResource
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
            'Ime prezime instruktora -> ' => $this->resource->imePrezime,
            'Grad iz kog je instruktor -> ' => $this->resource->grad,
            'Godiste -> ' => $this->resource->godiste,
            'Specijalnost instruktora -> ' => $this->resource->specijalnost,
            'Kontakt telefon -> ' => $this->resource->kontaktTelefon
        ];
    }
}
