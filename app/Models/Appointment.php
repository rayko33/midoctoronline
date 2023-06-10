<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Appointment
 * 
 * @property int $idappointments
 * @property string $title
 * @property Carbon|null $start
 * @property Carbon|null $end
 * @property string|null $state
 * @property int|null $max_memebers
 * @property Carbon $creat_at
 * @property Carbon|null $updated_at
 * @property int $specialist
 * 
 * @property Collection|AppointmentsAssoc[] $appointments_assocs
 *
 * @package App\Models
 */
class Appointment extends Model
{
	
	protected $table = 'appointments';
	protected $primaryKey = 'idappointments';
	public $timestamps = false;

	protected $casts = [
		'start' => 'datetime',
		'end' => 'datetime',
		'max_memebers' => 'int',
		'creat_at' => 'datetime',
		'specialist' => 'int'
	];

	protected $fillable = [
		'title',
		'start',
		'end',
		'state',
		'max_memebers',
		'creat_at',
		'specialist'
	];
	static $rules=[
		'title'=>'require',
		'start'=>'require',
		'end'=>'require',
		'max_members'=>'require'
	];
	public function specialist()
	{
		return $this->belongsTo(Specialist::class, 'specialist');
	}

	public function appointments_assocs()
	{
		return $this->hasMany(AppointmentsAssoc::class, 'appointment');
	}
}
