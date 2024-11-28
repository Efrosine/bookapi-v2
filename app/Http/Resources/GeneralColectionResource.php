<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GeneralColectionResource extends ResourceCollection
{
    public $message;
    public $code;

    public function __construct($resource, $message, $code = 200)
    {
        parent::__construct($resource);
        $this->message = $message;
        $this->code = $code;

    }

    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'count' => $this->collection->count(),
            'message' => $this->message,
            'data' => $this->collection,
        ];
    }

    /**
     * Customize the outgoing response for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response  $response
     * @return void
     */
    public function withResponse($request, $response)
    {
        $response->setStatusCode($this->code);
    }
}
