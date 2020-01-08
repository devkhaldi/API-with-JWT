<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\Resource;

class Users extends Resource
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
            'name' => $this->name,
            'email' => $this->email,
            'link' => route('users.show', $this->id)
        ];
    }
}