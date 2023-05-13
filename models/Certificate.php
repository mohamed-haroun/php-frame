<?php
declare(strict_types=1);
namespace models;
use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'certificate')]
class Certificate
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'certificate_number')]
    private string $certificateNumber;
    #[Column(name: 'certificate')]
    private string $certificate;
    #[Column(name: 'certificate_delivery', type: Types::DATETIME_MUTABLE)]
    private DateTime $certificateDelivery;
    #[Column(name: 'shipments_id')]
    private int $shipmentId;

    #[OneToOne(inversedBy: 'certificate')]
    private Shipments $shipments;

    public function getId(): int
    {
        return $this->id;
    }

    public function getCertificateNumber(): string
    {
        return $this->certificateNumber;
    }

    public function setCertificateNumber(string $certificateNumber): Certificate
    {
        $this->certificateNumber = $certificateNumber;
        return $this;
    }


    public function getCertificate(): string
    {
        return $this->certificate;
    }

    public function setCertificate(string $certificate): Certificate
    {
        $this->certificate = $certificate;
        return $this;
    }

    public function getCertificateDelivery(): DateTime
    {
        return $this->certificateDelivery;
    }

    public function setCertificateDelivery(DateTime $certificateDelivery): Certificate
    {
        $this->certificateDelivery = $certificateDelivery;
        return $this;
    }


    public function getShipmentId(): int
    {
        return $this->shipmentId;
    }

    public function setShipmentId(int $shipmentId): Certificate
    {
        $this->shipmentId = $shipmentId;
        return $this;
    }

    /**
     * @return Shipments
     */
    public function getShipments(): Shipments
    {
        return $this->shipments;
    }

    /**
     * @param Shipments $shipments
     * @return Certificate
     */
    public function setShipments(Shipments $shipments): Certificate
    {
        $this->shipments = $shipments;
        return $this;
    }



}