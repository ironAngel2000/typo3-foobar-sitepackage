<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersPartiesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersPartiesRepository::class)]
#[ORM\Table(name: "orders_parties")]
class OrdersParties
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_parties_id = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $shops_orders_parties_id = null;

	#[ORM\Column(length: 16, nullable: true)]
	private ?string $title = null;

	#[ORM\Column(length: 16, nullable: true)]
	private ?string $academic_title = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $first_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $last_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $company = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $department = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $street_address = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $house_number = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $address_addition = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $packstation = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $suburb = null;

	#[ORM\Column(length: 16, nullable: true)]
	private ?string $postal_code = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $city = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $state = null;

	#[ORM\Column(nullable: true)]
	private ?int $states_id = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $country = null;

	#[ORM\Column(nullable: true)]
	private ?int $countries_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $vat_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $date_of_birth = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $phone_private = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $phone_office = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $phone_mobile = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $fax = null;

	#[ORM\Column(length: 128, nullable: true)]
	private ?string $email_address = null;

	#[ORM\Column]
	private ?string $guest = null;

	#[ORM\Column(nullable: true)]
	private ?string $iv = null;

	#[ORM\Column(nullable: true)]
	private ?string $data = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersPartiesId():  ?int
	{
		return $this->orders_parties_id;
	}

	public function setOrdersPartiesId(int $orders_parties_id) : self
	{
		$this->orders_parties_id = $orders_parties_id;
		return $this;
	}

	public function getShopsOrdersPartiesId():  ?string
	{
		return $this->shops_orders_parties_id;
	}

	public function setShopsOrdersPartiesId(string $shops_orders_parties_id) : self
	{
		$this->shops_orders_parties_id = $shops_orders_parties_id;
		return $this;
	}

	public function getTitle():  ?string
	{
		return $this->title;
	}

	public function setTitle(string $title) : self
	{
		$this->title = $title;
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

	public function getDepartment():  ?string
	{
		return $this->department;
	}

	public function setDepartment(string $department) : self
	{
		$this->department = $department;
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

	public function getStatesId():  ?int
	{
		return $this->states_id;
	}

	public function setStatesId(int $states_id) : self
	{
		$this->states_id = $states_id;
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

	public function getCountriesId():  ?int
	{
		return $this->countries_id;
	}

	public function setCountriesId(int $countries_id) : self
	{
		$this->countries_id = $countries_id;
		return $this;
	}

	public function getVatId():  ?string
	{
		return $this->vat_id;
	}

	public function setVatId(string $vat_id) : self
	{
		$this->vat_id = $vat_id;
		return $this;
	}

	public function getDateOfBirth():  ?string
	{
		return $this->date_of_birth;
	}

	public function setDateOfBirth(string $date_of_birth) : self
	{
		$this->date_of_birth = $date_of_birth;
		return $this;
	}

	public function getPhonePrivate():  ?string
	{
		return $this->phone_private;
	}

	public function setPhonePrivate(string $phone_private) : self
	{
		$this->phone_private = $phone_private;
		return $this;
	}

	public function getPhoneOffice():  ?string
	{
		return $this->phone_office;
	}

	public function setPhoneOffice(string $phone_office) : self
	{
		$this->phone_office = $phone_office;
		return $this;
	}

	public function getPhoneMobile():  ?string
	{
		return $this->phone_mobile;
	}

	public function setPhoneMobile(string $phone_mobile) : self
	{
		$this->phone_mobile = $phone_mobile;
		return $this;
	}

	public function getFax():  ?string
	{
		return $this->fax;
	}

	public function setFax(string $fax) : self
	{
		$this->fax = $fax;
		return $this;
	}

	public function getEmailAddress():  ?string
	{
		return $this->email_address;
	}

	public function setEmailAddress(string $email_address) : self
	{
		$this->email_address = $email_address;
		return $this;
	}

	public function getGuest():  ?string
	{
		return $this->guest;
	}

	public function setGuest(string $guest) : self
	{
		$this->guest = $guest;
		return $this;
	}

	public function getIv():  ?string
	{
		return $this->iv;
	}

	public function setIv(string $iv) : self
	{
		$this->iv = $iv;
		return $this;
	}

	public function getData():  ?string
	{
		return $this->data;
	}

	public function setData(string $data) : self
	{
		$this->data = $data;
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