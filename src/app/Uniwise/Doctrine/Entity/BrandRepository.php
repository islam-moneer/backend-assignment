<?php
namespace Uniwise\Doctrine\Entity;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class BrandRepository extends ServiceEntityRepository {

    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Brand::class);
    }

    /**
     * @return array|Brand[]
     */
    public function getAll() {
        return $this->findAll();
    }
}