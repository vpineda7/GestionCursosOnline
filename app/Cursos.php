<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    //
     // override the id primary key
 
     protected $primaryKey = 'id';
 
     /**
      * The database table used by the model.
      *
      * @var string
      */
     protected $table = 'cursos';
  
     
  
     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
     protected $fillable = [];


    //  public static function find($id)
    //  {
    //       //return Cursos::find($id);
    //       $curso_id =  Cursos::id($id)->get(); // this is line 94
    //       return $curso_id;
    //  }
 
    //  public function all()
    //  {
    //       return Cursos::all();
    //  }
 
    public function profesors() {
        // return $this->belongsTo('Profesor', 'Profesors');
        return $this->belongsToMany('Profesor','id');
    }   
    
    public function listas()
    {
        return $this->hasMany('App\Listas');
    }

}
