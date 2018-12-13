<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 13 Dec 2018 09:43:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Player
 * 
 * @property int $Number
 * @property string $Team
 * @property string $Name
 * @property string $POS
 *
 * @package App\Models
 */
class Player extends Eloquent
{
	protected $table = 'Player';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Number' => 'int'
	];

	protected $fillable = [
		'Name',
		'POS'
	];
}
