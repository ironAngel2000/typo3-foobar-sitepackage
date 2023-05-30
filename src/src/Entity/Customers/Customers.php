<?php

namespace App\Entity\Customers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Customers\CustomersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CustomersRepository::class)]
#[ORM\Table(name: "customers")]
class Customers
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $customers_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_customers_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $gender = null;

	#[ORM\Column(length: 16, nullable: true)]
	private ?string $academic_title = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $first_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $last_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_of_birth = null;

	 #[ORM\Column(length: 128)]
	private ?string $email_address = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $phone_private = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $phone_office = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $phone_mobile = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $fax = null;

	#[ORM\Column]
	private ?int $guest = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getCustomersId():  ?int
	{
		return $this->customers_id;
	}

	public function setCustomersId(int $customers_id) : self
	{
		$this->customers_id = $customers_id;
		return $this;
	}

	public function getShopsId():  ?int
	{
		return $this->shops_id;
	}

	public function setShopsId(int $shops_id) : self
	{
		$this->shops_id = $shops_id;
		return $this;
	}

	public function getExternCustomersId():  ?string
	{
		return $this->extern_customers_id;
	}

	public function setExternCustomersId(string $extern_customers_id) : self
	{
		$this->extern_customers_id = $extern_customers_id;
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

	public function getDateOfBirth():  ?\DateTimeInterface
	{
		return $this->date_of_birth;
	}

	public function setDateOfBirth(\DateTimeInterface $date_of_birth) : self
	{
		$this->date_of_birth = $date_of_birth;
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

	public function getGuest():  ?int
	{
		return $this->guest;
	}

	public function setGuest(int $guest) : self
	{
		$this->guest = $guest;
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