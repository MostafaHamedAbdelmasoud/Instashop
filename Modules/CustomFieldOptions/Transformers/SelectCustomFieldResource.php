<?php

namespace Modules\CustomFieldOptions\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class SelectCustomFieldResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'text' => $this->name,
        ];
    }
}
