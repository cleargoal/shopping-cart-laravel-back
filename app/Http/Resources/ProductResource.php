<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        if ($this->quantity === 0) {
            $invent = 'OUTOFSTOCK';
        } elseif ($this->quantity > 0 && $this->quantity < 6) {
            $invent = 'LOWSTOCK';
        } else {
            $invent = "INSTOCK";
        }
        $imagePath = asset(Storage::url('images/product')) . '/';
        return [
            'id' => $this->id,
            'name' => $this->title,
            'code' => $this->code,
            'slug' => $this->slug,
            "description" => $this->description,
            "image" => $imagePath . $this->image,
            'price' => $this->price,
            'category' => $this->category->title,
            'category_id' => $this->category->id,
            "quantity" => $this->quantity,
            "inventoryStatus" => $invent,
            "rating" => $this->rating,
        ];
    }
}
