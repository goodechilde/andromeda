<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->name,
            'slug' => $this->slug,
            'external_id' => $this->external_id,
            'barcode' => $this->barcode,
            'sku' => $this->sku,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->editor->name,
            'product_type' => new ProductTypeResource($this->productType),
        ];
    }
}
