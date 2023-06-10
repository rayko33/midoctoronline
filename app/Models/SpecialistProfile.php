<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpecialistProfile
 * 
 * @property int $idprofile
 * @property string|null $bio
 * @property int|null $yearsexperience
 * @property string|null $profile_picture
 * 
 * @property Collection|Specialist[] $specialists
 *
 * @package App\Models
 */
class SpecialistProfile extends Model
{
	protected $table = 'specialist_profiles';
	protected $primaryKey = 'idprofile';
	public $timestamps = false;

	protected $casts = [
		'yearsexperience' => 'int'
	];

	protected $fillable = [
		'bio',
		'yearsexperience',
		'profile_picture'
	];

	public function specialists()
	{
		return $this->hasMany(Specialist::class, 'profile');
	}
}
