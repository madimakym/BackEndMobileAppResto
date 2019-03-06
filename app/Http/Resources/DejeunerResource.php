<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DejeunerResource extends JsonResource
{
    public function toArray($request)
    {

        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'libelle'       => $this->libelle,
            'description'    => $this->description,
            'prix'     => $this->prix,
            // 'image' => $this->$path->image,
            'image'     => $this->image
        ];
    }
}
