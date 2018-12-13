<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 13 Dec 2018 09:43:38 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Week
 * 
 * @property int $WeekNumber
 * @property int $PlayerNumber
 * @property string $PlayerTeam
 * @property float $OrigTotal
 * @property float $TeamOverallCarries
 * @property float $PlayerOverallCarries
 * @property float $PlayerFiveYardCarries
 * @property float $TeamFiveYardCarries
 * @property float $PlayerFiveYardTargets
 * @property float $TeamFiveYardTargets
 * @property float $PlayerOverallTargets
 * @property float $TeamOverallTargets
 * @property float $PlayerSnaps
 * @property float $TeamSnaps
 * @property float $PlayerReceptions
 * @property float $RedZoneThrows
 * @property float $ThrowsOverTwenty
 * @property float $ThrowsOverThirty
 * @property float $ThrowsOverForty
 *
 * @package App\Models
 */
class Week extends Eloquent
{
	protected $table = 'Week';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'WeekNumber' => 'int',
		'PlayerNumber' => 'int',
		'OrigTotal' => 'float',
		'TeamOverallCarries' => 'float',
		'PlayerOverallCarries' => 'float',
		'PlayerFiveYardCarries' => 'float',
		'TeamFiveYardCarries' => 'float',
		'PlayerFiveYardTargets' => 'float',
		'TeamFiveYardTargets' => 'float',
		'PlayerOverallTargets' => 'float',
		'TeamOverallTargets' => 'float',
		'PlayerSnaps' => 'float',
		'TeamSnaps' => 'float',
		'PlayerReceptions' => 'float',
		'RedZoneThrows' => 'float',
		'ThrowsOverTwenty' => 'float',
		'ThrowsOverThirty' => 'float',
		'ThrowsOverForty' => 'float'
	];

	protected $fillable = [
		'OrigTotal',
		'TeamOverallCarries',
		'PlayerOverallCarries',
		'PlayerFiveYardCarries',
		'TeamFiveYardCarries',
		'PlayerFiveYardTargets',
		'TeamFiveYardTargets',
		'PlayerOverallTargets',
		'TeamOverallTargets',
		'PlayerSnaps',
		'TeamSnaps',
		'PlayerReceptions',
		'RedZoneThrows',
		'ThrowsOverTwenty',
		'ThrowsOverThirty',
		'ThrowsOverForty'
	];
}
