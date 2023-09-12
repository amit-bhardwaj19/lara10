<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'description'];

    public function setNameAttribute($value) 
    {
        $this->attributes['name'] = strtolower($value);
    }

    public function getFullNameAttribute($value) 
    {
        return "{$this->attributes['name']} {$this->attributes['email']}";
    }
}
