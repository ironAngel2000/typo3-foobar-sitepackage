<?php

namespace App\Entity\Customers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Customers\CustomersToAddressesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CustomersToAddressesRepository::class)]
#[ORM\Table(name: "customers_to_addresses")]
class CustomersToAddresses
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $customers_to_addresses_id = null;

	#[ORM\Column]
	private ?int $customers_id = null;

	#[ORM\Column]
	private ?int $customers_addresses_id = null;

	#[ORM\Column]
	private ?int $customers_addresses_types_id = null;

	#[ORM\Column]
	private ?int $main_address = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getCustomersToAddressesId():  ?int
	{
		return $this->customers_to_addresses_id;
	}

	public function setCustomersToAddressesId(int $customers_to_addresses_id) : self
	{
		$this->customers_to_addresses_id = $customers_to_addresses_id;
		return $this;
	}

	public function getCustomersId():  ?int
	{
		return $this->customers_id;
	}

	public function setCustomersId(int $customers_id) : self
	{
		$this->customers_id = $customers_id;
		return $this;
	}

	public function getCustomersAddressesId():  ?int
	{
		return $this->customers_addresses_id;
	}

	public function setCustomersAddressesId(int $customers_addresses_id) : self
	{
		$this->customers_addresses_id = $customers_addresses_id;
		return $this;
	}

	public function getCustomersAddressesTypesId():  ?int
	{
		return $this->customers_addresses_types_id;
	}

	public function setCustomersAddressesTypesId(int $customers_addresses_types_id) : self
	{
		$this->customers_addresses_types_id = $customers_addresses_types_id;
		return $this;
	}

	public function getMainAddress():  ?int
	{
		return $this->main_address;
	}

	public function setMainAddress(int $main_address) : self
	{
		$this->main_address = $main_address;
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