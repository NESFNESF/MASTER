<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $table = "cours";


    public function Eleves()
    {
        return $this->belongsToMany(Eleve::class,'CoursEleve');
    }
    public function Enseignants()
    {
        return $this->belongsTo(Enseignant::class);
    }
    public function Classes()
    {
        return $this->belongsTo(Classe::class);
    }
    public function Evaluations()
    {
        return $this->has20(Evaluation::class);
    }


}
