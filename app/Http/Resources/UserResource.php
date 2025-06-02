<?php
namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'name'         => $this->name,
            'username'     => $this->username,
            'email'        => $this->email,
            'phone_number' => $this->phone_number,
            'image'        => $this->image,
            'is_active'    => $this->is_active,
        ];
    }
}
