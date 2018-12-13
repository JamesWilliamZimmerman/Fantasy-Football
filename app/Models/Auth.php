<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 13 Dec 2018 09:43:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Auth
 * 
 * @property string $UUID
 * @property string $PASS
 *
 * @package App\Models
 */
class Auth extends Eloquent
{
	protected $table = 'Auth';
	protected $primaryKey = 'UUID';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'PASS'
	];
}
