<?php

namespace App\Http\Resources\V1;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Id' => $this->id,
            'Title' => $this->title,
            'Description' => $this->description,
            'Created' => $this->when(Route::currentRouteName() == 'posts.store',
                Carbon::parse($this->created_at)->format('Y-m-d H:i:s')) ,
            'Updated' => $this->when(Route::currentRouteName()
                == 'posts.update',Carbon::parse($this->updated_at)->format('Y-m-d H:i:s'))

        ];
    }
}
