<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;

class Apprentice extends Model
{
    use HasFactory;

    protected $fillable = [
       'identification',
            'name',
            'lastname',
            'program',
            'ficha',
            'telephone',
            'email',
            'inicio_contrato',
            'fin_contrato',
            'nit_empresa',
            'razon_social' ,
            'address',
            'telephone_empresa',
            'name_trainer',
            'email_trainer',
    ];
    public function followup()
    {
        return $this->hasMany(Followup::class);
    }
    public function notifications(){
        return $this->belongsTo(Notification::class);
    }
}
