<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nom', 'poids', 'telephone','categorie_id','user_id','description','nomc','emailc','image','image2'
    ];

    public function categorie()
	{
		return $this->belongsToMany('App\categorie');
	}
}
