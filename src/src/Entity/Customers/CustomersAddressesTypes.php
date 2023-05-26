<?php

namespace App\Entity\Customers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Customers\CustomersAddressesTypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CustomersAddressesTypesRepository::class)]
#[ORM\Table(name: "customers_addresses_types")]
class CustomersAddressesTypes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $customers_addresses_types_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $customers_addresses_types_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getCustomersAddressesTypesId():  ?int
	{
		return $this->customers_addresses_types_id;
	}

	public function setCustomersAddressesTypesId(int $customers_addresses_types_id) : self
	{
		$this->customers_addresses_types_id = $customers_addresses_types_id;
		return $this;
	}

	public function getCustomersAddressesTypesCode():  ?string
	{
		return $this->customers_addresses_types_code;
	}

	public function setCustomersAddressesTypesCode(string $customers_addresses_types_code) : self
	{
		$this->customers_addresses_types_code = $customers_addresses_types_code;
		return $this;
	}

	public function getDateInsert():  ?\DateTimeInterface
	{
		return $this->date_insert;
	}

	public function setDateInsert(\DateTimeInterface $date_insert) : self
	{
		$this->date_insert = $date_insert;
		return $this;
	}

	public function getLastUpdate():  ?\DateTimeInterface
	{
		return $this->last_update;
	}

	public function setLastUpdate(\DateTimeInterface $last_update) : self
	{
		$this->last_update = $last_update;
		return $this;
	}

	public function getLastUpdater():  ?int
	{
		return $this->last_updater;
	}

	public function setLastUpdater(int $last_updater) : self
	{
		$this->last_updater = $last_updater;
		return $this;
	}


}