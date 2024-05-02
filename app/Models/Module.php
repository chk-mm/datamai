<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    
    protected $table = 'modules'; // Only necessary if Laravel's naming convention isn't followed

    public function mentors()
{
    return $this->belongsToMany(Mentor::class, 'mentor_module', 'module_id', 'mentor_id');
}

}
