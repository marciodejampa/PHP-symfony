<?php

namespace AppBundle\Controller;

use  Domain\Model\Inscricao;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class InscricaoController extends Controller
{
    /**
     * @Route("/inscricao/inscrever")
     * @param Request $request
     */
    public function inscreverAction(Request $request)
    {
         $serializerService = $this->get ('infra.serializer.service');

         try{
            $inscricao = $serializerService->converter ($request->getContent (), Inscricao::class);
                dump($inscricao); die;
         }catch (\Exception $exception){
             return new Response($exception->getMessage (), 400);
         }
    }
}
