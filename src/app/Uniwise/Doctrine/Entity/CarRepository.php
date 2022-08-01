<?php
namespace Uniwise\Doctrine\Entity;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class CarRepository extends ServiceEntityRepository {

    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Car::class);
    }

    /**
     * @return array|Car[]
     */
    public function getAll() {
        return $this->findAll();
    }

    public function getCarsByModel($model)
    {
        return $this->createQueryBuilder('car')
            ->leftJoin('car.model', 'm', 'WITH', 'car.model = m.id')
            ->where('m.id = :model')
            ->setParameters(['model' => $model])
            ->getQuery()->getResult();
    }

    public function getCarsByBrand($brand)
    {
        return $this->createQueryBuilder('car')
            ->leftJoin('car.brand', 'b', 'WITH', 'car.brand = b.id')
            ->where('b.id = :brand')
            ->setParameters(['brand' => $brand])
            ->getQuery()->getResult();
    }
}