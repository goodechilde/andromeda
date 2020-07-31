<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmailAddressResource extends JsonResource
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
            'email_address' => $this->email_address,
            'primary' => $this->primary,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->editor->name,
            'email_address_type' => $this->contactType->name,
            'email_address_type_id' => $this->contactType->id,
        ];
    }
}
