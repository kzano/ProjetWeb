<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Préférence
 * 
 * @property int $IdPref
 * @property bool $Sport
 * @property bool $Musique
 * @property bool $Lecture
 * @property bool $Arts
 * @property bool $Fete
 * @property bool $JeuxVideo
 * @property int $IdUtilisateur
 * 
 * @property Utilisateur $utilisateur
 *
 * @package App\Models
 */
class Préférence extends Model
{
	protected $table = 'préférences';
	protected $primaryKey = 'IdPref';
	public $timestamps = false;

	protected $casts = [
		'Sport' => 'bool',
		'Musique' => 'bool',
		'Lecture' => 'bool',
		'Arts' => 'bool',
		'Fete' => 'bool',
		'JeuxVideo' => 'bool',
		'IdUtilisateur' => 'int'
	];

	protected $fillable = [
		'Sport',
		'Musique',
		'Lecture',
		'Arts',
		'Fete',
		'JeuxVideo',
		'IdUtilisateur'
	];

	public function utilisateur()
	{
		return $this->belongsTo(Utilisateur::class, 'IdUtilisateur');
	}
}
