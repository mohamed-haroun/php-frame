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
#[Table('company')]
class Company
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'company_name')]
    private string $companyName;
    #[Column]
    private string $address;
    #[Column(name: 'tele_fax')]
    private string $teleFax;
    #[Column(name: 'registration_number')]
    private string $registrationNumber;
    #[Column(name: 'vat_number')]
    private string $vatNumber;


    #[OneToMany(mappedBy: 'company', targetEntity: Contacts::class, cascade: ['persist', 'remove'])]
    private Collection $contacts;

    public function __construct()
    {
        $this->contacts = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return Company
     */
    public function setCompanyName(string $companyName): Company
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return Company
     */
    public function setAddress(string $address): Company
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getTeleFax(): string
    {
        return $this->teleFax;
    }

    /**
     * @param string $teleFax
     * @return Company
     */
    public function setTeleFax(string $teleFax): Company
    {
        $this->teleFax = $teleFax;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationNumber(): string
    {
        return $this->registrationNumber;
    }

    /**
     * @param string $registrationNumber
     * @return Company
     */
    public function setRegistrationNumber(string $registrationNumber): Company
    {
        $this->registrationNumber = $registrationNumber;
        return $this;
    }


    public function getVatNumber(): string
    {
        return $this->vatNumber;
    }

    /**
     * @param string $vatNumber
     * @return Company
     */
    public function setVatNumber(string $vatNumber): Company
    {
        $this->vatNumber = $vatNumber;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getContacts(): Collection
    {
        return $this->contacts;
    }


    public function addContact(Contacts $contact): Company
    {
        $contact->setCompany($this);
        $this->contacts->add($contact);
        return $this;
    }
}