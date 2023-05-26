<?php

namespace App\Entity\Customers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Customers\CustomersAddressesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CustomersAddressesRepository::class)]
#[ORM\Table(name: "customers_addresses")]
class CustomersAddresses
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $customers_addresses_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_orders_parties_id = null;

	#[ORM\Column]
	private ?string $gender = null;

	#[ORM\Column(length: 16, nullable: true)]
	private ?string $academic_title = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $first_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $last_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $company = null;

	 #[ORM\Column(length: 255)]
	private ?string $street_address = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $house_number = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $address_addition = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $packstation = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $suburb = null;

	 #[ORM\Column(length: 16)]
	private ?string $postal_code = null;

	 #[ORM\Column(length: 32)]
	private ?string $city = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $state = null;

	 #[ORM\Column(length: 32)]
	private ?string $country = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getCustomersAddressesId():  ?int
	{
		return $this->customers_addresses_id;
	}

	public function setCustomersAddressesId(int $customers_addresses_id) : self
	{
		$this->customers_addresses_id = $customers_addresses_id;
		return $this;
	}

	public function getShopsOrdersPartiesId():  ?int
	{
		return $this->shops_orders_parties_id;
	}

	public function setShopsOrdersPartiesId(int $shops_orders_parties_id) : self
	{
		$this->shops_orders_parties_id = $shops_orders_parties_id;
		return $this;
	}

	public function getGender():  ?string
	{
		return $this->gender;
	}

	public function setGender(string $gender) : self
	{
		$this->gender = $gender;
		return $this;
	}

	public function getAcademicTitle():  ?string
	{
		return $this->academic_title;
	}

	public function setAcademicTitle(string $academic_title) : self
	{
		$this->academic_title = $academic_title;
		return $this;
	}

	public function getFirstName():  ?string
	{
		return $this->first_name;
	}

	public function setFirstName(string $first_name) : self
	{
		$this->first_name = $first_name;
		return $this;
	}

	public function getLastName():  ?string
	{
		return $this->last_name;
	}

	public function setLastName(string $last_name) : self
	{
		$this->last_name = $last_name;
		return $this;
	}

	public function getCompany():  ?string
	{
		return $this->company;
	}

	public function setCompany(string $company) : self
	{
		$this->company = $company;
		return $this;
	}

	public function getStreetAddress():  ?string
	{
		return $this->street_address;
	}

	public function setStreetAddress(string $street_address) : self
	{
		$this->street_address = $street_address;
		return $this;
	}

	public function getHouseNumber():  ?string
	{
		return $this->house_number;
	}

	public function setHouseNumber(string $house_number) : self
	{
		$this->house_number = $house_number;
		return $this;
	}

	public function getAddressAddition():  ?string
	{
		return $this->address_addition;
	}

	public function setAddressAddition(string $address_addition) : self
	{
		$this->address_addition = $address_addition;
		return $this;
	}

	public function getPackstation():  ?string
	{
		return $this->packstation;
	}

	public function setPackstation(string $packstation) : self
	{
		$this->packstation = $packstation;
		return $this;
	}

	public function getSuburb():  ?string
	{
		return $this->suburb;
	}

	public function setSuburb(string $suburb) : self
	{
		$this->suburb = $suburb;
		return $this;
	}

	public function getPostalCode():  ?string
	{
		return $this->postal_code;
	}

	public function setPostalCode(string $postal_code) : self
	{
		$this->postal_code = $postal_code;
		return $this;
	}

	public function getCity():  ?string
	{
		return $this->city;
	}

	public function setCity(string $city) : self
	{
		$this->city = $city;
		return $this;
	}

	public function getState():  ?string
	{
		return $this->state;
	}

	public function setState(string $state) : self
	{
		$this->state = $state;
		return $this;
	}

	public function getCountry():  ?string
	{
		return $this->country;
	}

	public function setCountry(string $country) : self
	{
		$this->country = $country;
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