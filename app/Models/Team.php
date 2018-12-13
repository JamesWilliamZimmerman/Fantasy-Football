<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 13 Dec 2018 09:43:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Team
 * 
 * @property int $TID
 * @property string $UUID
 * @property int $QBNum
 * @property string $QBT
 * @property int $RB1Num
 * @property string $RB1T
 * @property int $RB2Num
 * @property string $RB2T
 * @property int $WR1Num
 * @property string $WR1T
 * @property int $WR2Num
 * @property string $WR2T
 * @property int $TENum
 * @property string $TET
 * @property int $DSTNum
 * @property string $DSTT
 * @property int $KNum
 * @property string $KT
 * @property int $FLEXNum
 * @property string $FLEXT
 * @property int $B1Num
 * @property string $B1T
 * @property int $B2Num
 * @property string $B2T
 * @property int $B3Num
 * @property string $B3T
 * @property int $B4Num
 * @property string $B4T
 * @property int $B5Num
 * @property string $B5T
 * @property int $B6Num
 * @property string $B6T
 * @property int $B7Num
 * @property string $B7T
 *
 * @package App\Models
 */
class Team extends Eloquent
{
	protected $table = 'Team';
	public $timestamps = false;

	protected $casts = [
		'QBNum' => 'int',
		'RB1Num' => 'int',
		'RB2Num' => 'int',
		'WR1Num' => 'int',
		'WR2Num' => 'int',
		'TENum' => 'int',
		'DSTNum' => 'int',
		'KNum' => 'int',
		'FLEXNum' => 'int',
		'B1Num' => 'int',
		'B2Num' => 'int',
		'B3Num' => 'int',
		'B4Num' => 'int',
		'B5Num' => 'int',
		'B6Num' => 'int',
		'B7Num' => 'int'
	];

	protected $fillable = [
		'QBNum',
		'QBT',
		'RB1Num',
		'RB1T',
		'RB2Num',
		'RB2T',
		'WR1Num',
		'WR1T',
		'WR2Num',
		'WR2T',
		'TENum',
		'TET',
		'DSTNum',
		'DSTT',
		'KNum',
		'KT',
		'FLEXNum',
		'FLEXT',
		'B1Num',
		'B1T',
		'B2Num',
		'B2T',
		'B3Num',
		'B3T',
		'B4Num',
		'B4T',
		'B5Num',
		'B5T',
		'B6Num',
		'B6T',
		'B7Num',
		'B7T'
	];
}
