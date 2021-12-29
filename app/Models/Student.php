<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'id_card_num', 'date_of_birth', 'email', 'gender', 'primary_contact', 'secondary_contact', 'photo', 'nationality', 'permanent_address', 'temporary_address', 'guardian_name', 'guardian_contact', 'guardian_relation', 'class_id', 'section_id', 'faculty_id', 'status'];

    public function Classes(){
        return $this->belongsTo(Classes::class, 'class_id');
    }
    
    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }
}
