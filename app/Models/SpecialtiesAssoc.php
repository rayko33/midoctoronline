<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpecialtiesAssoc
 * 
 * @property int $idspecialties_assoc
 * @property int $specialists
 * @property int $specialty
 * 
 * @property Specialist $specialist
 *
 * @package App\Models
 */
class SpecialtiesAssoc extends Model
{
	protected $table = 'specialties_assoc';
	protected $primaryKey = 'idspecialties_assoc';
	public $timestamps = false;

	protected $casts = [
		'specialists' => 'int',
		'specialty' => 'int'
	];

	protected $fillable = [
		'specialists',
		'specialty'
	];

	public function specialist()
	{
		return $this->belongsTo(Specialist::class, 'specialists');
	}

	public function specialty()
	{
		return $this->belongsTo(Specialty::class, 'specialty');
	}
}
