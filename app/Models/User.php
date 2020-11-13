<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{


    use HasFactory, Notifiable;

    public function attachments(){
        return $this->hasMany(Attachment::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function boards(){
        return $this->hasMany('App\Models\Board');
    }

    public function ownedBoards(){
        $this->hasMany('App\Models\Board');
    }





}
