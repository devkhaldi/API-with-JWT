<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\User\UserResource;
use App\User;
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
            'title' => $this->title,
            'image' => $this->image,
            'price' => $this->price,
            'stock' => $this->stock,
            'description' => $this->description,
            'user' => new UserResource(User::find($this->user_id))
        ];
    }
}