<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Project extends Model
{
    use HasFactory;

    public function user(){
        // return $this->belongsToMany(User::class);
        // na edn proekt mozev da rabotiv povise klienti

        return $this->belongsTo(User::class);
    }
}
