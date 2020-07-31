<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
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
            'note' => $this->note,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->editor->name,
            'note_type' => $this->noteType->name,
            'note_type_id' => $this->noteType->id,
        ];
    }
}
