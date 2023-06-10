<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable;


/**
 * Class Specialist
 * 
 * @property int $idspecialists
 * @property string $name
 * @property string $lastname
 * @property string|null $secondlastname
 * @property string $email
 * @property string $password
 * @property int $profile
 * 

 *
 * @package App\Models
 */
class AuthSpecialist extends Authenticable
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

	
}
