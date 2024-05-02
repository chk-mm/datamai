<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    // Define the relationship with the Module model
    public function modules()
{
    return $this->belongsToMany(Module::class, 'mentor_module', 'mentor_id', 'module_id');
}
}
