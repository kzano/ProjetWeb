<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Utilisateur
 * 
 * @property int $IdUtilisateur
 * @property string $Login
 * @property string $Mdp
 * @property string $Prénom
 * @property string $Nom
 * @property string $Tel
 * @property string $Mail
 * @property string $DateNaissance
 * @property string $TypeProfil
 * @property bool $Sport
 * @property bool $Musique
 * @property bool $Lecture
 * @property bool $Arts
 * @property bool $Fete
 * @property bool $JeuxVideo
 * 
 * @property Collection|Location[] $locations
 *
 * @package App\Models
 */
class Utilisateur extends Model
{
	protected $table = 'utilisateur';
	protected $primaryKey = 'IdUtilisateur';
	public $timestamps = false;

	protected $casts = [
		'Sport' => 'bool',
		'Musique' => 'bool',
		'Lecture' => 'bool',
		'Arts' => 'bool',
		'Fete' => 'bool',
		'JeuxVideo' => 'bool'
	];

	protected $fillable = [
		'Login',
		'Mdp',
		'Prénom',
		'Nom',
		'Tel',
		'Mail',
		'DateNaissance',
		'TypeProfil',
		'Sport',
		'Musique',
		'Lecture',
		'Arts',
		'Fete',
		'JeuxVideo'
	];

	public function locations()
	{
		return $this->hasMany(Location::class, 'IdUtilisateur');
	}
}
