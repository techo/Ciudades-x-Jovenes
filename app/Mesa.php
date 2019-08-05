<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
	protected $fillable = ['nombre',
  							'mail',
  							'apellido',
  							'telefono',
  							'participantes',
  							'mujeres',
							'hombres',
  							'otrxs',
  							'propuesta_ciudad' ,
  							'propuesta_titulo',
  							'propuesta_problema',
  							'propuesta_solucion',
  							'compromiso_jovenes',
  							'compromiso_nosotros',
  							'compromiso_donde',
  							'compromiso_fecha' ,
  							'reflexion',
  							'foto_grupo',
  							'foto_mapa',
            				'foto_anexo'
  							];


}
