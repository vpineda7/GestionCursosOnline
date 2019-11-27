<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listas extends Model
{
    //
    // public function profesors() {
    //     return $this->belongsToMany('Cursos','id');
    // }    
    // public function users_estudiantes() {
    //     return $this->belongsToMany('Estudiantes','id');
    // }    

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function curso()
    {
        return $this->belongsTo('App\Cursos');
    }


}
