<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{

    use HasFactory;
    protected $fillable = ['name', 'surname', 'module_id', 'photo_url'];
    // Define the relationship with the Module model
    public function modules()
{
    return $this->belongsToMany(Module::class, 'mentor_module', 'mentor_id', 'module_id');
}
}
