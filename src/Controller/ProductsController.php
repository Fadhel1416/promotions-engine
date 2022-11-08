<?php

namespace App\Controller;

use App\DTO\EntryPromotionDto;
use App\Filter\PromotionsFilterInterface;
use App\Service\Serializer\DTOSerializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\Serializer\SerializerInterface;

class ProductsController extends AbstractController
{
     /**
     * @Route("/products/{id}/lowest-price", name="lowest-price",methods="POST")
     */
    public function lowestPrice(Request $request,int $id,DTOSerializer $serializer,PromotionsFilterInterface $filter):Response
    {
        if($request->headers->has('force_fail'))
        {
            return new JsonResponse(['error'=>'promotions engine failaure message']
            ,$request->headers->get('force_fail'));
        }
           $lowestEntry=$serializer->deserialize($request->getContent(),EntryPromotionDto::class,'json');
        //    $lowestEntry->setPrice(500);
        //    $lowestEntry->setDiscountedPrice(100);
        //    $lowestEntry->setPromotionId(3);
        //    $lowestEntry->setPromotionName('black friday half price sale');
        $modifiedEnquiry=$filter->apply($lowestEntry);

          $responseContent=$serializer->serialize($modifiedEnquiry,'json');


          return new Response($responseContent,200,['content-type'=>'json']);
          
    }

    /**
     * @Route("/products/{id}/promotions", name="promotions",methods="GET")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ProductsController.php',
        ]);
    }
}
