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
use enums\ShipmentStatus;

#[Entity]
#[Table(name: 'statuses')]
class Statuses
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'shipment_status', enumType: ShipmentStatus::class)]
    private ShipmentStatus $shipmentStatus;
    #[Column(name: 'status_date', type: Types::DATETIME_MUTABLE)]
    private \DateTime $statusDate;
    #[Column(name: 'shipments_id')]
    private int $shipmentsId;

    #[ManyToOne(inversedBy: 'statuses')]
    private Shipments $shipments;




    public function getId(): int
    {
        return $this->id;
    }

    public function getShipmentStatus(): ShipmentStatus
    {
        return $this->shipmentStatus;
    }

    public function setShipmentStatus(ShipmentStatus $shipmentStatus): Statuses
    {
        $this->shipmentStatus = $shipmentStatus;
        return $this;
    }

    public function getStatusDate(): \DateTime
    {
        return $this->statusDate;
    }

    public function setStatusDate(\DateTime $statusDate): Statuses
    {
        $this->statusDate = $statusDate;
        return $this;
    }

    public function getShipmentsId(): int
    {
        return $this->shipmentsId;
    }

    public function setShipmentsId(int $shipmentsId): Statuses
    {
        $this->shipmentsId = $shipmentsId;
        return $this;
    }

    public function getShipments(): Shipments
    {
        return $this->shipments;
    }

    public function setShipments(Shipments $shipments): Statuses
    {
        $this->shipments = $shipments;
        return $this;
    }

}