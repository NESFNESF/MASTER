<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'idC',
        'description',
        'qcm1',
        'qcm2',
        'qcm3',
        'qcm4',
        'reponse'
    ];

    protected $table = "evaluations";

    public function Cours()
    {
        return $this->belongsTo(Cours::class);
    }

}
