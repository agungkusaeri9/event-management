<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreviousEvent extends Model
{
    protected $table = 'previous_events';
    protected $guarded = ['id'];

    public function image()
    {
        return asset('storage/' . $this->image);
    }
}
