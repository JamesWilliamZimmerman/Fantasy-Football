<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 13 Dec 2018 09:43:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class League
 * 
 * @property int $LID
 * @property string $LeagueName
 * @property int $TID1
 * @property int $TID2
 * @property int $TID3
 * @property int $TID4
 * @property int $TID5
 * @property int $TID6
 * @property int $TID7
 * @property int $TID8
 *
 * @package App\Models
 */
class League extends Eloquent
{
	protected $table = 'League';
	protected $primaryKey = 'LID';
	public $timestamps = false;

	protected $casts = [
		'TID1' => 'int',
		'TID2' => 'int',
		'TID3' => 'int',
		'TID4' => 'int',
		'TID5' => 'int',
		'TID6' => 'int',
		'TID7' => 'int',
		'TID8' => 'int'
	];

	protected $fillable = [
		'LeagueName',
		'TID1',
		'TID2',
		'TID3',
		'TID4',
		'TID5',
		'TID6',
		'TID7',
		'TID8'
	];


}
