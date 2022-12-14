<?php
namespace Uniwise\Doctrine\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Entity(repositoryClass="CarRepository")
 * @ORM\Table(name="car")
 */
class Car {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     * @var string
     */
    private $name;

    /**
     * @ManyToOne(targetEntity="Brand")
     * @var Brand
     */
    private $brand;

    /**
     * @ManyToOne(targetEntity="Model")
     * @var Model
     */
    private $model;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Car
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set brand.
     *
     * @param \Uniwise\Doctrine\Entity\Brand|null $brand
     *
     * @return Car
     */
    public function setBrand(\Uniwise\Doctrine\Entity\Brand $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand.
     *
     * @return \Uniwise\Doctrine\Entity\Brand|null
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set model.
     *
     * @param \Uniwise\Doctrine\Entity\Model|null $model
     *
     * @return Car
     */
    public function setModel(\Uniwise\Doctrine\Entity\Model $model = null)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model.
     *
     * @return \Uniwise\Doctrine\Entity\Model|null
     */
    public function getModel()
    {
        return $this->model;
    }
}
