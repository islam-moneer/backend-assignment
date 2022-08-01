<?php
namespace Uniwise\Doctrine\Entity;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class ModelRepository extends ServiceEntityRepository {

    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Model::class);
    }

    /**
     * @return array|Model[]
     */
    public function getAll() {
        return $this->findAll();
    }
}