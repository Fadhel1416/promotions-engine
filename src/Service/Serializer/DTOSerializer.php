<?php

namespace App\Service\Serializer;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

    class DTOSerializer implements SerializerInterface{

    private SerializerInterface $serializer;

    public function __construct()
    {
        //we specify the objectNormalizer and the jsonencodzer......
        //and we make our converter a snakecaseName converter......
        $this->serializer=new Serializer(
            [new ObjectNormalizer(null, new CamelCaseToSnakeCaseNameConverter())],
            [new JsonEncoder(),new XmlEncoder()]
        );
    }


    public function serialize($data, $format,  $context=[])
    {

        return $this->serializer->serialize($data,$format,$context);

    }


    public function deserialize($data, $type, $format,  $context=[])
    {

        return $this->serializer->deserialize($data,$type,$format,$context);

    }


}