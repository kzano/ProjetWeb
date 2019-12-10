<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Logement
 * 
 * @property int $IdLogement
 * @property string $Type
 * @property int $Superfice
 * @property int $NbPieces
 * @property string $Ville
 * @property int $CP
 * @property int $NbLocataire
 * @property int $Prix
 * @property string $Description
 * @property string $Ameublement
 * @property string $Image_1
 * @property string $Image_2
 * @property string $Image_3
 * 
 * @property Collection|Location[] $locations
 *
 * @package App\Models
 */
class Logement extends Model
{
	protected $table = 'logement';
	protected $primaryKey = 'IdLogement';
	public $timestamps = false;

	protected $casts = [
		'Superfice' => 'int',
		'NbPieces' => 'int',
		'CP' => 'int',
		'NbLocataire' => 'int',
		'Prix' => 'int'
	];

	protected $fillable = [
		'Type',
		'Superficie',
		'NbPieces',
		'Ville',
		'CP',
		'NbLocataire',
		'Prix',
		'Description',
		'Ameublement',
		'Image_1',
		'Image_2',
		'Image_3'
	];

	public function locations()
	{
		return $this->hasOne(Location::class, 'IdLogement');
	}
}
