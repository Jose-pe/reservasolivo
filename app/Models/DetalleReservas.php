<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleReservas extends Model
{
       protected $fillable = [

            'id_mesa',
            'id_reserva',            
            'reservation_date',
            'reservation_time',
            'state_atention',
            'state_mesa'
       ];

      public function mesas(){
      return $this->hasMany(Mesa::class, 'id_mesa','id');
     }  

     public function reservas(){
      return $this->hasMany(Reserva::class, 'id_reserva','id');
     }  
}
