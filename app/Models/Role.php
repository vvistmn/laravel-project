<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models;


class Role extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(Models\User::class)->withTimestamps();
    }
}
