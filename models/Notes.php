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
#[Table(name: 'notes')]
class Notes
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column]
    private string $note;
    #[Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTime $createdAt;
    #[Column(name: 'shipments_id')]
    private int $shipmentsId;

    #[ManyToOne(inversedBy: 'notes')]
    private Shipments $shipments;



    public function getId(): int
    {
        return $this->id;
    }

    public function getNote(): string
    {
        return $this->note;
    }

    public function setNote(string $note): Notes
    {
        $this->note = $note;
        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): Notes
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getShipmentsId(): int
    {
        return $this->shipmentsId;
    }

    public function setShipmentsId(int $shipmentsId): Notes
    {
        $this->shipmentsId = $shipmentsId;
        return $this;
    }

    public function getShipments(): Shipments
    {
        return $this->shipments;
    }

    public function setShipments(Shipments $shipments): Notes
    {
        $this->shipments = $shipments;
        return $this;
    }


}