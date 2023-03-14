<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;
    protected $fillable = ['nbre_heure_abs', 'id_eleve'];
    protected $primaryKey = 'id_absence';

}
