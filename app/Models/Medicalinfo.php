<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Medicalinfo
 * 
 * @property int $idmeficalinfo
 * @property array $info
 * @property int $client
 * @property int $specialist
 * @property string|null $status
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * 
 *
 * @package App\Models
 */
class Medicalinfo extends Model
{
	protected $table = 'medicalinfo';
	protected $primaryKey = 'idmeficalinfo';

	protected $casts = [
		'info' => 'json',
		'client' => 'int',
		'specialist' => 'int'
	];

	protected $fillable = [
		'info',
		'client',
		'specialist',
		'status'
	];

	public function client()
	{
		return $this->belongsTo(Client::class, 'client');
	}

	public function specialist()
	{
		return $this->belongsTo(Specialist::class, 'specialist');
	}
}
