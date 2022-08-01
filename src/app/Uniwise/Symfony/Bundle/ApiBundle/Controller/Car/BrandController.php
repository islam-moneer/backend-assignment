<?php

namespace Uniwise\Symfony\Bundle\ApiBundle\Controller\Car;

use Uniwise\Doctrine\Entity\Brand;
use Uniwise\Doctrine\Entity\Car;
use Uniwise\Doctrine\Entity\Model;
use Symfony\Component\Serializer\Serializer;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Uniwise\Symfony\Bundle\ApiBundle\ApiBundle;

/**
 * @Route("/brands")
 */
class BrandController extends FOSRestController {

    /**
     * @Get("/")
     */
    public function getBrands()
    {
        return $this->getDoctrine()->getRepository(Brand::class)->findAll();
    }
}