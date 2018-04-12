<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cdc extends Model
{
    protected $fillable = ['nom','prenom','datenais','profession','debutdirection','contact1','contact2','localisation','email','statut','chorale', 'nationalite','datedebudirection'];


}
