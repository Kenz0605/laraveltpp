<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function board(){
        return $this->belongsTo('App\Models\Board');
    }

    public function attachments(){
        return $this->hasMany('App\Models\Attachment');
    }

    public function comments(){
        return $this->hasMany('App\Models\comment');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    public function boardUser(){
        return $this->belongsToMany(BoardUser::class);
    }




    use HasFactory;
}
