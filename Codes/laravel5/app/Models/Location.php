<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Location
 * 
 * @property int $IdLocation
 * @property int $IdUtilisateur
 * @property int $IdLogement
 * 
 * @property Logement $logement
 * @property Utilisateur $utilisateur
 *
 * @package App\Models
 */
class Location extends Model
{
	protected $table = 'location';
	protected $primaryKey = 'IdLocation';
	public $timestamps = false;

	protected $casts = [
		'IdUtilisateur' => 'int',
		'IdLogement' => 'int'
	];

	protected $fillable = [
		'IdUtilisateur',
		'IdLogement'
	];

	public function logement()
	{
		return $this->belongsTo(Logement::class, 'IdLogement');
	}

	public function utilisateur()
	{
		return $this->belongsTo(Utilisateur::class, 'IdUtilisateur');
	}
}
