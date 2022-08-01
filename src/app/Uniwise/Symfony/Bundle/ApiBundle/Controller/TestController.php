<?php
namespace Uniwise\Symfony\Bundle\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Uniwise\Doctrine\Entity\Brand;
use Uniwise\Doctrine\Entity\Car;
use Uniwise\Doctrine\Entity\Model;
use Uniwise\Symfony\Service\TestService;

/**
 * @Route("/")
 */
class TestController extends FOSRestController {

    /**
     * @var TestService
     */
    private $testService;

    public function __construct(TestService $testService) {
        $this->testService = $testService;
    }

    /**
     * @param Request $request
     * @Get("/")
     *
     * @return \FOS\RestBundle\View\View
     */
    public function getList(Request $request) {

        $manager = $this->getDoctrine()->getManager();
        $brands = ['BMW', 'Mercedes', 'Toyota'];
        $models = [
            'BMW' => ['x1', 'x2', 'x3'],
            'Mercedes' => ['gt 43', 'gt 53', 'gt 63'],
            'Toyota' => ['corola', 'yaris', 'camry'],
        ];

        for ($i = 0; $i < 3; $i++) {
            $brand = new Brand();
            $brand->setName($brands[$i]);
            $manager->persist($brand);

            for ($j = 0; $j < 3; $j++) {
                $model = new Model();
                $model->setName($models[$brands[$i]][$j]);
                $model->setBrand($brand);
                $manager->persist($model);
                $car = new Car();
                $car->setName('car' . $i);
                $car->setBrand($brand);
                $car->setModel($model);
                $manager->persist($car);
            }

        }
        $manager->flush();
        return $this->view($this->testService->helloWorld());
    }
}