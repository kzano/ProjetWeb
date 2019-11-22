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
 * 
 * @property Collection|Location[] $locations
 * @property Collection|Préférence[] $préférences
 *
 * @package App\Models
 */
class Utilisateur extends Model
{
	protected $table = 'utilisateur';
	protected $primaryKey = 'IdUtilisateur';
	public $timestamps = false;

	protected $fillable = [
		'Login',
		'Mdp',
		'Prénom',
		'Nom',
		'Tel',
		'Mail',
		'DateNaissance'
	];

	public function locations()
	{
		return $this->hasMany(Location::class, 'IdUtilisateur');
	}

	public function préférences()
	{
		return $this->hasMany(Préférence::class, 'IdUtilisateur');
	}
}
