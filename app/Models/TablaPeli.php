<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Jun 2018 19:25:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TablaPeli
 * 
 * @property int $id
 * @property string $Titulo
 * @property string $Disco
 * @property string $Director
 * @property string $Sinopsis
 * @property string $Genero
 * @property string $Portada
 * @property float $Puntaje
 * @property int $Año
 * @property string $Comentarios
 *
 * @package App\Models
 */
class TablaPeli extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'Puntaje' => 'float',
		'Año' => 'int'
	];

	protected $fillable = [
		'Titulo',
		'Disco',
		'Director',
		'Sinopsis',
		'Genero',
		'Portada',
		'Puntaje',
		'Año',
		'Comentarios'
	];
}
