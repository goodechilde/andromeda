<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'line1' => $this->line1,
            'line2' => $this->line2,
            'line3' => $this->line3,
            'line4' => $this->line4,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country,
            'municipality' => $this->municipality,
            'zip' => $this->zip,
            'primary' => $this->primary,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->editor->name,
            'address_type' => $this->contactType->name,
            'address_type_id' => $this->contactType->id,
            'country_detail' => $this->country_detail,
        ];
    }
}
