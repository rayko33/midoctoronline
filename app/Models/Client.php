<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $idclient
 * @property string $name
 * @property string $lastname
 * @property string|null $secondlastname
 * @property string $email
 * @property string|null $celphonenumber
 * @property string $password
 * 
 * @property Collection|AppointmentsAssoc[] $appointments_assocs
 * @property Collection|Specialist[] $specialists
 * @property Collection|Medicalinfo[] $medicalinfos
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'clients';
	protected $primaryKey = 'idclient';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'lastname',
		'secondlastname',
		'email',
		'celphonenumber',
		'password'
	];

	public function appointments_assocs()
	{
		return $this->hasMany(AppointmentsAssoc::class, 'client');
	}

	public function specialists()
	{
		return $this->belongsToMany(Specialist::class, 'client_specialist_assoc', 'clients', 'specialists')
					->withPivot('idcliente_specialist_assoc');
	}

	public function medicalinfos()
	{
		return $this->hasMany(Medicalinfo::class, 'client');
	}
}
