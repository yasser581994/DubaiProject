<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name','message' , 'email','status','phone','utm_source','utm_medium'];
    public function setNameAttribute($value)
    {
        $this->attributes['name']=trim(strip_tags($value)) ;
    }
    public function setSubjectAttribute($value)
    {
        $this->attributes['subject']=trim(strip_tags($value)) ;
    }
    public function setMessageAttribute($value)
    {
        $this->attributes['message']=trim(strip_tags($value)) ;
    }
    public function setEmailAttribute($value)
    {
        $this->attributes['email']=trim(strip_tags($value)) ;
    }
}
