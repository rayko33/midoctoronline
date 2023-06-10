<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AppointmentRecord
 * 
 * @property int $idappointmentrecord
 * @property string $description
 * @property string $observation
 * @property string $indication
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|AppointmentsAssoc[] $appointments_assocs
 *
 * @package App\Models
 */
class AppointmentRecord extends Model
{
	protected $table = 'appointment_records';
	protected $primaryKey = 'idappointmentrecord';

	protected $fillable = [
		'description',
		'observation',
		'indication'
	];

	public function appointments_assocs()
	{
		return $this->hasMany(AppointmentsAssoc::class, 'appointmentrecords');
	}
}
