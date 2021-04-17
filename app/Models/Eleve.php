<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $table = "eleves";

    public function Cours()
    {
        return $this->belongsToMany(Cours::class,'CoursEleve');
    }
    public function Classes()
    {
        return $this->belongsTo(Classe::class);
    }


}
