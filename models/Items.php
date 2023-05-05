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
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'items')]
class Items
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'item_description')]
    private string $itemDescription;
    #[Column(name: 'quantity', type: Types::DECIMAL, precision: 10, scale: 2)]
    private float $quantity;
    #[Column(name: 'price_per_ton', type: Types::DECIMAL, precision: 10, scale: 2)]
    private float $pricePerTon;
    #[Column(name: 'production_date', type: Types::DATETIME_MUTABLE)]
    private \DateTime $productionDate;
    #[Column(name: 'pallets_number')]
    private int $palletsNumber;
    #[Column(name: 'shipments_id')]
    private int $shipmentsId;
    #[ManyToOne(cascade: ['persist', 'remove'], inversedBy: 'items')]
    private Shipments $shipments;

    #[OneToOne(mappedBy: 'items',targetEntity: Invoices::class, cascade: ['persist', 'remove'])]
    private Invoices $invoices;

    #[OneToMany(mappedBy: 'items', targetEntity: Packages::class, cascade: ['persist', 'remove'])]
    private Collection $packages;


    public function __construct()
    {
        $this->packages = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getItemDescription(): string
    {
        return $this->itemDescription;
    }

    public function setItemDescription(string $itemDescription): Items
    {
        $this->itemDescription = $itemDescription;
        return $this;
    }

    public function getQuantity(): float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): Items
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getPricePerTon(): float
    {
        return $this->pricePerTon;
    }

    public function setPricePerTon(float $pricePerTon): Items
    {
        $this->pricePerTon = $pricePerTon;
        return $this;
    }

    public function getProductionDate(): \DateTime
    {
        return $this->productionDate;
    }

    public function setProductionDate(\DateTime $productionDate): Items
    {
        $this->productionDate = $productionDate;
        return $this;
    }

    public function getPalletsNumber(): int
    {
        return $this->palletsNumber;
    }

    public function setPalletsNumber(int $palletsNumber): Items
    {
        $this->palletsNumber = $palletsNumber;
        return $this;
    }

    public function getShipmentsId(): int
    {
        return $this->shipmentsId;
    }

    public function setShipmentsId(int $shipmentsId): Items
    {
        $this->shipmentsId = $shipmentsId;
        return $this;
    }

    public function getShipments(): Shipments
    {
        return $this->shipments;
    }

    public function setShipments(Shipments $shipments): Items
    {
        $this->shipments = $shipments;
        return $this;
    }

    public function getPackages(): Collection
    {
        return $this->packages;
    }

    public function getInvoices(): Invoices
    {
        return $this->invoices;
    }

    public function setInvoices(Invoices $invoices): Items
    {
        $this->invoices = $invoices;
        return $this;
    }


    public function setPackages(Collection $packages): Items
    {
        $this->packages = $packages;
        return $this;
    }

    public function addPackage(Packages $package): Items
    {
        $package->setItems($this);
        $this->packages->add($package);
        return $this;
    }

}