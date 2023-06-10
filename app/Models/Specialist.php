<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Specialist
 * 
 * @property int $idspecialists
 * @property string $name
 * @property string $lastname
 * @property string|null $secondlastname
 * @property string $email
 * @property string $password
 * @property int|null $profile
 * 
 * @property SpecialistProfile|null $specialist_profile
 * @property Collection|Appointment[] $appointments
 * @property Collection|Client[] $clients
 * @property Collection|Medicalinfo[] $medicalinfos
 * @property Collection|SpecialtiesAssoc[] $specialties_assocs
 *
 * @package App\Models
 */
class Specialist extends Authenticatable
{
	protected $table = 'specialists';
	protected $primaryKey = 'idspecialists';
	public $timestamps = false;

	protected $casts = [
		'profile' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'lastname',
		'secondlastname',
		'email',
		'password',
		'profile'
	];

	public function specialist_profile()
	{
		return $this->belongsTo(SpecialistProfile::class, 'profile');
	}

	public function appointments()
	{
		return $this->hasMany(Appointment::class, 'specialist');
	}

	public function clients()
	{
		return $this->belongsToMany(Client::class, 'client_specialist_assoc', 'specialists', 'clients')
					->withPivot('idcliente_specialist_assoc');
	}

	public function medicalinfos()
	{
		return $this->hasMany(Medicalinfo::class, 'specialist');
	}

	public function specialties_assocs()
	{
		return $this->hasMany(SpecialtiesAssoc::class, 'specialists');
	}
}
