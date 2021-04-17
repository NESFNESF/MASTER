<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $table = "classes";

    public function Eleves()
    {
        return $this->hasMany(Eleve::class);
    }
    public function Enseignants()
    {
        return $this->belongsToMany(User::class,'ClasseEnseignant');
    }
    public function Cours()
    {
        return $this->hasMany(Cours::class);
    }
    public function Commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

}
