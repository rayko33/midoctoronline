<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AppointmentsAssoc
 * 
 * @property int $Idappointment_assoc
 * @property int $appointment
 * @property int $client
 * @property int|null $appointmentrecords
 * @property Carbon $assoc_created_at
 * 
 * @property AppointmentRecord|null $appointment_record
 *
 * @package App\Models
 */
class AppointmentsAssoc extends Model
{
	protected $table = 'appointments_assoc';
	protected $primaryKey = 'Idappointment_assoc';
	public $timestamps = false;

	protected $casts = [
		'appointment' => 'int',
		'client' => 'int',
		'appointmentrecords' => 'int',
		'assoc_created_at' => 'datetime'
	];

	protected $fillable = [
		'appointment',
		'client',
		'appointmentrecords',
		'assoc_created_at'
	];

	public function appointment_record()
	{
		return $this->belongsTo(AppointmentRecord::class, 'appointmentrecords');
	}

	public function appointment()
	{
		return $this->belongsTo(Appointment::class, 'appointment');
	}

	public function client()
	{
		return $this->belongsTo(Client::class, 'client');
	}
}
