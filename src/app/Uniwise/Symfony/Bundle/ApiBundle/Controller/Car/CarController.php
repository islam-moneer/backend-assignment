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
 * @Route("/cars")
 */
class CarController extends FOSRestController {

    /**
     * @Get("/")
     */
    public function getCars()
    {
        return $this->getDoctrine()->getRepository(Car::class)->findAll();
    }

    /**
     * @Get("/{model}/model")
     */
    public function getCarsByModel(Model $model)
    {
        return $this->getDoctrine()->getRepository(Car::class)->getCarsByModel($model);
    }

    /**
     * @Get("/{brand}/brand")
     */
    public function getCarsByBrand(Brand $brand)
    {
        return $this->getDoctrine()->getRepository(Car::class)->getCarsByBrand($brand);
    }
}