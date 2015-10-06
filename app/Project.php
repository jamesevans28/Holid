<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

    
    
    /**
     * The owner (or user) of the project
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    //
}
