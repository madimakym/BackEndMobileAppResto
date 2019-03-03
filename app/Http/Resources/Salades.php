<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Salades extends JsonResource
{
   
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'libelle'       => $this->libelle,
            'description'    => $this->description,
            'prix'     => $this->prix,
            'image'     => (int) $this->image
        ];
    }
}
