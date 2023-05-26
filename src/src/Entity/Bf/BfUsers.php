<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfUsersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfUsersRepository::class)]
#[ORM\Table(name: "bf_users")]
class BfUsers
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_users_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $user_name = null;

	 #[ORM\Column(length: 255)]
	private ?string $password = null;

	#[ORM\Column(nullable: true)]
	private ?string $api_key = null;

	#[ORM\Column]
	private ?string $active = null;

	#[ORM\Column]
	private ?string $enable_login = null;

	#[ORM\Column]
	private ?string $enable_get_login = null;

	#[ORM\Column]
	private ?int $failed_logins = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $first_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $last_name = null;

	#[ORM\Column(nullable: true)]
	private ?string $gender = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $email = null;

	#[ORM\Column(nullable: true)]
	private ?string $initials = null;

	#[ORM\Column]
	private ?string $is_employee = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $unit = null;

	#[ORM\Column]
	private ?string $language = null;

	#[ORM\Column(nullable: true)]
	private ?string $start_date = null;

	#[ORM\Column(nullable: true)]
	private ?string $end_date = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfUsersId():  ?int
	{
		return $this->bf_users_id;
	}

	public function setBfUsersId(int $bf_users_id) : self
	{
		$this->bf_users_id = $bf_users_id;
		return $this;
	}

	public function getUserName():  ?string
	{
		return $this->user_name;
	}

	public function setUserName(string $user_name) : self
	{
		$this->user_name = $user_name;
		return $this;
	}

	public function getPassword():  ?string
	{
		return $this->password;
	}

	public function setPassword(string $password) : self
	{
		$this->password = $password;
		return $this;
	}

	public function getApiKey():  ?string
	{
		return $this->api_key;
	}

	public function setApiKey(string $api_key) : self
	{
		$this->api_key = $api_key;
		return $this;
	}

	public function getActive():  ?string
	{
		return $this->active;
	}

	public function setActive(string $active) : self
	{
		$this->active = $active;
		return $this;
	}

	public function getEnableLogin():  ?string
	{
		return $this->enable_login;
	}

	public function setEnableLogin(string $enable_login) : self
	{
		$this->enable_login = $enable_login;
		return $this;
	}

	public function getEnableGetLogin():  ?string
	{
		return $this->enable_get_login;
	}

	public function setEnableGetLogin(string $enable_get_login) : self
	{
		$this->enable_get_login = $enable_get_login;
		return $this;
	}

	public function getFailedLogins():  ?int
	{
		return $this->failed_logins;
	}

	public function setFailedLogins(int $failed_logins) : self
	{
		$this->failed_logins = $failed_logins;
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

	public function getGender():  ?string
	{
		return $this->gender;
	}

	public function setGender(string $gender) : self
	{
		$this->gender = $gender;
		return $this;
	}

	public function getEmail():  ?string
	{
		return $this->email;
	}

	public function setEmail(string $email) : self
	{
		$this->email = $email;
		return $this;
	}

	public function getInitials():  ?string
	{
		return $this->initials;
	}

	public function setInitials(string $initials) : self
	{
		$this->initials = $initials;
		return $this;
	}

	public function getIsEmployee():  ?string
	{
		return $this->is_employee;
	}

	public function setIsEmployee(string $is_employee) : self
	{
		$this->is_employee = $is_employee;
		return $this;
	}

	public function getUnit():  ?string
	{
		return $this->unit;
	}

	public function setUnit(string $unit) : self
	{
		$this->unit = $unit;
		return $this;
	}

	public function getLanguage():  ?string
	{
		return $this->language;
	}

	public function setLanguage(string $language) : self
	{
		$this->language = $language;
		return $this;
	}

	public function getStartDate():  ?string
	{
		return $this->start_date;
	}

	public function setStartDate(string $start_date) : self
	{
		$this->start_date = $start_date;
		return $this;
	}

	public function getEndDate():  ?string
	{
		return $this->end_date;
	}

	public function setEndDate(string $end_date) : self
	{
		$this->end_date = $end_date;
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