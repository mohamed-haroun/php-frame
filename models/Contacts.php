<?php
declare(strict_types=1);
namespace models;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'contacts')]
class Contacts
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column]
    private string $contact;
    #[Column(name: 'contact_type')]
    private string $contactType;
    #[Column(name: 'company_id')]
    private int $companyId;
    #[ManyToOne(targetEntity: Company::class, inversedBy: 'contacts')]
    private Company $company;

    public function __construct()
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getContact(): string
    {
        return $this->contact;
    }

    /**
     * @param string $contact
     * @return Contacts
     */
    public function setContact(string $contact): Contacts
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactType(): string
    {
        return $this->contactType;
    }

    /**
     * @param string $contactType
     * @return Contacts
     */
    public function setContactType(string $contactType): Contacts
    {
        $this->contactType = $contactType;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId(): int
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return Contacts
     */
    public function setCompanyId(int $companyId): Contacts
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->company;
    }

    /**
     * @param Company $company
     * @return Contacts
     */
    public function setCompany(Company $company): Contacts
    {
        $this->company = $company;
        return $this;
    }

}