<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IspitResource extends JsonResource
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
            'id' => $this->resource->id,
            'predmet_id' => $this->resource->predmet,
            'student_id' => $this->resource->student,
            'Rezultat' => $this->resource->Rezultat,
        ];
    }
}