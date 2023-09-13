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
        \Log::info("method name ". __METHOD__);
        \Log::info("function name ". __FUNCTION__);
        $this->attributes['name'] = strtolower($value);
    }

    public function getFullNameAttribute($value) 
    {
        return "{$this->attributes['name']} {$this->attributes['email']}";
    }
}
