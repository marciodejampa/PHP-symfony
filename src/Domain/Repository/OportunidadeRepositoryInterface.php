<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario25
 * Date: 19/05/2018
 * Time: 14:20
 */

namespace Domain\Repository;

use Domain\Model\Oportunidade;


interface OportunidadeRepositoryInterface
{/**
 * @param Oportunidade $oportunidade
 * @return void
 */
public function salvar(Oportunidade $oportunidade);
}