<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
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
            'full_name' => $this->full_name,
            'display_name' => $this->display_name,
            'preferred_name' => $this->preferred_name,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'title' => $this->title,
            'suffix' => $this->suffix,
            'professional_title' => $this->professional_title,
            'preferred_language' => $this->preferred_language,
            'date_of_birth' => $this->date_of_birth,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->editor->name,
            'person_type' => new PersonTypeResource($this->personType),
            'notes' => NoteResource::collection($this->whenLoaded('notes')),
            'addresses' => AddressResource::collection($this->whenLoaded('addresses')),
            'phones' => PhoneResource::collection($this->whenLoaded('phones')),
            'emailaddresses' => EmailAddressResource::collection($this->whenLoaded('emailaddresses')),
            'socialmediaaddresses' => SocialMediaAddressResource::collection($this->whenLoaded('socialmediaaddresses')),
        ];
    }
}
