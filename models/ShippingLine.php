<?php
declare(strict_types=1);
namespace models;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'shippingLine')]
class ShippingLine
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'line_name')]
    private string $lineName;
    #[Column(name: 'tracking_path')]
    private string $trackingPath;


    public function __construct()
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLineName(): string
    {
        return $this->lineName;
    }

    public function setLineName(string $lineName): ShippingLine
    {
        $this->lineName = $lineName;
        return $this;
    }

    public function getTrackingPath(): string
    {
        return $this->trackingPath;
    }

    public function setTrackingPath(string $trackingPath): ShippingLine
    {
        $this->trackingPath = $trackingPath;
        return $this;
    }

}