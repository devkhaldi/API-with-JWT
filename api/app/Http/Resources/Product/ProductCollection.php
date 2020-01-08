<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\User\UserResource;
use App\User;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Routing\Route;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
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
            'link' => route('products.show', $this->id)
        ];
    }
}