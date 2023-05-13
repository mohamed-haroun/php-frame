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
#[Table(name: 'documents')]
class Documents
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'document_name')]
    private string $documentName;
    #[Column(name: 'upload_date', type: Types::DATETIME_MUTABLE)]
    private \DateTime $uploadDate;
    #[Column(name: 'shipments_id')]
    private int $shipmentsId;
    #[ManyToOne(inversedBy: 'documents')]
    private Shipments $shipments;


    public function getId(): int
    {
        return $this->id;
    }

    public function getDocumentName(): string
    {
        return $this->documentName;
    }

    public function setDocumentName(string $documentName): Documents
    {
        $this->documentName = $documentName;
        return $this;
    }

    public function getUploadDate(): \DateTime
    {
        return $this->uploadDate;
    }

    public function setUploadDate(\DateTime $uploadDate): Documents
    {
        $this->uploadDate = $uploadDate;
        return $this;
    }

    public function getShipmentsId(): int
    {
        return $this->shipmentsId;
    }

    public function setShipmentsId(int $shipmentsId): Documents
    {
        $this->shipmentsId = $shipmentsId;
        return $this;
    }

    public function getShipments(): Shipments
    {
        return $this->shipments;
    }

    public function setShipments(Shipments $shipments): Documents
    {
        $this->shipments = $shipments;
        return $this;
    }


}