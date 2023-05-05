<?php
declare(strict_types=1);
namespace models;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;
use enums\ShipmentMode;

#[Entity]
#[Table('shipments')]
class Shipments
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'shipment_description')]
    private string $shipmentDescription;
    #[Column(name: 'shipper_id')]
    private int $shipperId;
    #[Column(name: 'consignee_id')]
    private int $consigneeId;
    #[Column(name: 'shipped_by')]
    private string $shippedBy;
    #[Column(name: 'tracking_number')]
    private string $trackingNumber;
    #[Column('lot_number')]
    private string $lotNumber;
    #[Column]
    private string $dhl;
    #[Column]
    private string $pol;
    #[Column]
    private string $pod;
    #[Column(name: 'shipment_office')]
    private string $shipmentOffice;
    #[Column(name: 'shipment_mode', enumType: ShipmentMode::class)]
    private ShipmentMode $shipmentMode;
    #[Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private \DateTime $createdAt;
    #[Column(name: 'created_by')]
    private int $createdBy;
    #[Column(name: 'shipping_line_id')]
    private int $shippingLineId;

    #[OneToOne(mappedBy: 'shipments',targetEntity: Policies::class, cascade: ['persist', 'remove'])]
    private Policies $policies;



    #[OneToMany(mappedBy: 'shipments', targetEntity: Documents::class, cascade: ['persist', 'remove'])]
    private Collection|null $documents;
    #[OneToMany(mappedBy: 'shipments', targetEntity: Items::class, cascade: ['persist', 'remove'])]
    private Collection|null $items;
    #[OneToMany(mappedBy: 'shipments', targetEntity: Notes::class, cascade: ['persist', 'remove'])]
    private Collection|null $notes;
    #[OneToMany(mappedBy: 'shipments', targetEntity: Postponements::class, cascade: ['persist', 'remove'])]
    private Collection|null $postponements;
    #[OneToMany(mappedBy: 'shipments', targetEntity: Statuses::class, cascade: ['persist', 'remove'])]
    private Collection|null $statues;


    public function __construct()
    {
        $this->documents = new ArrayCollection();
        $this->items = new ArrayCollection();
        $this->notes = new ArrayCollection();
        $this->postponements = new ArrayCollection();
        $this->statues = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getShipmentDescription(): string
    {
        return $this->shipmentDescription;
    }

    public function setShipmentDescription(string $shipmentDescription): Shipments
    {
        $this->shipmentDescription = $shipmentDescription;
        return $this;
    }

    public function getShipperId(): int
    {
        return $this->shipperId;
    }

    public function setShipperId(int $shipperId): Shipments
    {
        $this->shipperId = $shipperId;
        return $this;
    }

    public function getConsigneeId(): int
    {
        return $this->consigneeId;
    }

    public function setConsigneeId(int $consigneeId): Shipments
    {
        $this->consigneeId = $consigneeId;
        return $this;
    }

    public function getShippedBy(): string
    {
        return $this->shippedBy;
    }

    public function setShippedBy(string $shippedBy): Shipments
    {
        $this->shippedBy = $shippedBy;
        return $this;
    }

    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber(string $trackingNumber): Shipments
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    public function getLotNumber(): string
    {
        return $this->lotNumber;
    }

    public function setLotNumber(string $lotNumber): Shipments
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    public function getPol(): string
    {
        return $this->pol;
    }

    public function setPol(string $pol): Shipments
    {
        $this->pol = $pol;
        return $this;
    }

    public function getPod(): string
    {
        return $this->pod;
    }

    public function setPod(string $pod): Shipments
    {
        $this->pod = $pod;
        return $this;
    }

    public function getShipmentOffice(): string
    {
        return $this->shipmentOffice;
    }

    public function setShipmentOffice(string $shipmentOffice): Shipments
    {
        $this->shipmentOffice = $shipmentOffice;
        return $this;
    }

    public function getShipmentMode(): ShipmentMode
    {
        return $this->shipmentMode;
    }

    public function setShipmentMode(ShipmentMode $shipmentMode): Shipments
    {
        $this->shipmentMode = $shipmentMode;
        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): Shipments
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getCreatedBy(): int
    {
        return $this->createdBy;
    }

    public function setCreatedBy(int $createdBy): Shipments
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getShippingLineId(): int
    {
        return $this->shippingLineId;
    }

    public function setShippingLineId(int $shippingLineId): Shipments
    {
        $this->shippingLineId = $shippingLineId;
        return $this;
    }

    public function getDhl(): string
    {
        return $this->dhl;
    }

    public function setDhl(string $dhl): Shipments
    {
        $this->dhl = $dhl;
        return $this;
    }



    public function getDocuments(): ?Collection
    {
        return $this->documents;
    }

    public function setDocuments(?Collection $documents): Shipments
    {
        $this->documents = $documents;
        return $this;
    }

    public function getItems(): ?Collection
    {
        return $this->items;
    }

    public function setItems(?Collection $items): Shipments
    {
        $this->items = $items;
        return $this;
    }

    public function getNotes(): ?Collection
    {
        return $this->notes;
    }

    public function setNotes(?Collection $notes): Shipments
    {
        $this->notes = $notes;
        return $this;
    }

    public function getPolicies(): Policies
    {
        return $this->policies;
    }

    public function setPolicies(Policies $policies): Shipments
    {
        $this->policies = $policies;
        return $this;
    }

    public function getPostponements(): ?Collection
    {
        return $this->postponements;
    }

    public function setPostponements(?Collection $postponements): Shipments
    {
        $this->postponements = $postponements;
        return $this;
    }

    public function getStatues(): ?Collection
    {
        return $this->statues;
    }

    public function setStatues(?Collection $statues): Shipments
    {
        $this->statues = $statues;
        return $this;
    }


    public function addDocument(Documents $document): Shipments
    {
        $document->setShipments($this);
        $this->documents->add($document);
        return $this;
    }

    public function addItem(Items $item): Shipments
    {
        $item->setShipments($this);
        $this->items->add($item);
        return $this;
    }

    public function addNote(Notes $note): Shipments
    {
        $note->setShipments($this);
        $this->notes->add($note);
        return $this;
    }

    public function addPostponement(Postponements $postponement): Shipments
    {
        $postponement->setShipments($this);
        $this->notes->add($postponement);
        return $this;
    }

    public function addStatus(Statuses $status): Shipments
    {
        $status->setShipments($this);
        $this->statues->add($status);
        return $this;
    }
}