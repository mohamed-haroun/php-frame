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
#[Table(name: 'invoices')]
class Invoices
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'invoice_number')]
    private string $invoiceNumber;
    #[Column(name: 'invoice_date', type: Types::DATETIME_MUTABLE)]
    private \DateTime $invoiceDate;
    #[Column(name: 'items_id')]
    private int $itemsId;
    #[OneToOne(inversedBy: 'invoices')]
    private Items $items;


    public function getId(): int
    {
        return $this->id;
    }

    public function getInvoiceDate(): \DateTime
    {
        return $this->invoiceDate;
    }

    public function setInvoiceDate(\DateTime $invoiceDate): Invoices
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }

    public function setInvoiceNumber(string $invoiceNumber): Invoices
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    public function getItemsId(): int
    {
        return $this->itemsId;
    }

    public function setItemsId(int $itemsId): Invoices
    {
        $this->itemsId = $itemsId;
        return $this;
    }

    public function getItems(): Items
    {
        return $this->items;
    }

    public function setItems(Items $items): Invoices
    {
        $this->items = $items;
        return $this;
    }


}