<?php
declare(strict_types=1);
namespace models;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'policies')]
class Policies
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'policy_number')]
    private string $policyNumber;
    #[Column]
    private string $policy;
    #[Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTime $createdAt;
    #[Column(name: 'shipments_id')]
    private string $shipmentsId;

    #[OneToOne(inversedBy: 'policies')]
    private Shipments $shipments;


    public function getId(): int
    {
        return $this->id;
    }

    public function getPolicyNumber(): string
    {
        return $this->policyNumber;
    }

    public function setPolicyNumber(string $policyNumber): Policies
    {
        $this->policyNumber = $policyNumber;
        return $this;
    }

    public function getPolicy(): string
    {
        return $this->policy;
    }

    public function setPolicy(string $policy): Policies
    {
        $this->policy = $policy;
        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): Policies
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getShipmentsId(): string
    {
        return $this->shipmentsId;
    }

    public function setShipmentsId(string $shipmentsId): Policies
    {
        $this->shipmentsId = $shipmentsId;
        return $this;
    }

    public function getShipments(): Shipments
    {
        return $this->shipments;
    }

    public function setShipments(Shipments $shipments): Policies
    {
        $this->shipments = $shipments;
        return $this;
    }




}