<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PacientesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "nome" => $this->nome,
            "telefone"=> $this->telefone,
            "email" => $this->email,
            "cep" => $this->cep,
            "endereco" => $this->endereco
        ];
    }
}
