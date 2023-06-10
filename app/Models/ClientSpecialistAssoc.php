<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientSpecialistAssoc
 * 
 * @property int $idcliente_specialist_assoc
 * @property int $clients
 * @property int $specialists
 * @property Carbon $created_at
 * 
 * @property Client $client
 * @property Specialist $specialist
 *
 * @package App\Models
 */
class ClientSpecialistAssoc extends Model
{
	protected $table = 'client_specialist_assoc';
	protected $primaryKey = 'idcliente_specialist_assoc';
	public $timestamps = false;

	protected $casts = [
		'clients' => 'int',
		'specialists' => 'int'
	];

	protected $fillable = [
		'clients',
		'specialists'
	];

	public function client()
	{
		return $this->belongsTo(Client::class, 'clients');
	}

	public function specialist()
	{
		return $this->belongsTo(Specialist::class, 'specialists');
	}
}
