<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Propaganistas\LaravelPhone\PhoneNumber;

class PhoneResource extends JsonResource
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
            'locale' => $this->locale,
            'primary' => $this->primary,
            'phone_number' => $this->phone_number,
            'phone_number_formatted' => $this->phone_number_formatted,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->editor->name,
            'phone_type' => $this->contactType->name,
            'phone_type_id' => $this->contactType->id,
        ];
    }
}
