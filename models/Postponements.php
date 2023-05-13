<?php
declare(strict_types=1);
namespace models;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'postponements')]
class Postponements
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'delay_date', type: Types::DATETIME_MUTABLE)]
    private \DateTime $delayDate;
    #[Column]
    private string $reason;
    #[Column(name: 'shipments_id')]
    private int $shipmentsId;

    #[ManyToOne(inversedBy: 'postponements')]
    private Shipments $shipments;

    public function getId(): int
    {
        return $this->id;
    }

    public function getDelayDate(): \DateTime
    {
        return $this->delayDate;
    }

    public function setDelayDate(\DateTime $delayDate): Postponements
    {
        $this->delayDate = $delayDate;
        return $this;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function setReason(string $reason): Postponements
    {
        $this->reason = $reason;
        return $this;
    }

    public function getShipmentId(): int
    {
        return $this->shipmentsId;
    }

    public function setShipmentId(int $shipmentId): Postponements
    {
        $this->shipmentsId = $shipmentId;
        return $this;
    }

    public function getShipments(): Shipments
    {
        return $this->shipments;
    }

    public function setShipments(Shipments $shipments): Postponements
    {
        $this->shipments = $shipments;
        return $this;
    }


}