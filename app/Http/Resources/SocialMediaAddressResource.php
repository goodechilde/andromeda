<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SocialMediaAddressResource extends JsonResource
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
            'handle' => $this->handle,
            'primary' => $this->primary,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->editor->name,
            'social_site' => $this->contactType->name,
            'social_site_id' => $this->contactType->id,
        ];
    }
}
