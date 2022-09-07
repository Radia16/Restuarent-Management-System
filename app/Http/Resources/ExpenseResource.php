<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExpenseResource extends JsonResource
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
            'id'           => $this->id,
            'outlet_id'     => $this->outlet_id,
            'employee'      => $this->employee,
            'expenseitem'   => $this->expenseitem,
            'total_amount' => $this->total_amount,
            'image'        => asset($this->image),
            'note'         => $this->note,
            'added_by'     => $this->added_by,
        ];
    }
}
