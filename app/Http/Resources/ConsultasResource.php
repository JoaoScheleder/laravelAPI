<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConsultasResource extends JsonResource
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
            'id' => $this->id,
            'medico' => new MedicosResource($this->medico),
            'paciente' => new PacienteResource($this->paciente),
            'data_hora_consulta' => $this->data_hora_consulta,
            'data_agendamento' => $this->created_at
        ];
    }
}
