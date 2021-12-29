<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $fillable = ['name', 'short_description', 'description', 'status'];

    public function student(){
        return $this->hasMany(Student::class, 'class_id');
    }

    public function section(){
        return $this->hasmany(Section::class, 'class_id');
    }

    public function subject(){
        return $this->hasmany(Subject::class, 'class_id');
    }
}
