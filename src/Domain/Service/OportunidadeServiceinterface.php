<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario25
 * Date: 19/05/2018
 * Time: 14:11
 */

namespace Domain\Service;

use Domain\Model\Oportunidade;


interface OportunidadeServiceinterface
{/**
 * @param Oportunidade $oportunidade
 * @return void
 */
public function salvar(Oportunidade $oportunidade);

/**
 * @return array
 */
public function listarTudo();


}