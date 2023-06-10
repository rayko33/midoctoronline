<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Specialty
 * 
 * @property int $idspecialty
 * @property string $specialty
 * 
 * @property Collection|SpecialtiesAssoc[] $specialties_assocs
 *
 * @package App\Models
 */
class Specialty extends Model
{
	protected $table = 'specialties';
	protected $primaryKey = 'idspecialty';
	public $timestamps = false;

	protected $fillable = [
		'specialty'
	];

	public function specialties_assocs()
	{
		return $this->hasMany(SpecialtiesAssoc::class, 'specialty');
	}
}
