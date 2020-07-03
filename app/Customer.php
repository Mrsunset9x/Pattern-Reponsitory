<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded =[];
    public function format()
    {
        return [
            'Customer_id' => $this->id,
            'name'        => $this->name,
            'last_updated' => $this->updated_at->diffForHumans(),
        ];
    }
    public function user()
    {
        return $this->belongsTo(User::Class);
    }
}
