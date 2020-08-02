<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductOptionResource extends JsonResource
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
            'key' => $this->key,
            'field_type' => $this->field_type,
            'options' => $this->options,
            'validation' => $this->validation,
            'external_id' => $this->external_id,
            'slug' => $this->slug,
        ];
    }
}
