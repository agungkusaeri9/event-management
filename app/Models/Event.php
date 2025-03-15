<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $guarded = ['id'];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function image()
    {
        return asset('storage/' . $this->image);
    }

    public function status()
    {
        if ($this->status == 0) {
            return '<span class="badge badge-danger">Closed</span>';
        } else if ($this->status == 1) {
            return '<span class="badge badge-info">Open Registration</span>';
        } else {
            return '<span class="badge badge-success">Finished</span>';

        }
    }
}
