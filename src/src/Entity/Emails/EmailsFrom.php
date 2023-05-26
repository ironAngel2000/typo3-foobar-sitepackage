<?php

namespace App\Entity\Emails;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Emails\EmailsFromRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: EmailsFromRepository::class)]
#[ORM\Table(name: "emails_from")]
class EmailsFrom
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $emails_from_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $emails_from_code = null;

	 #[ORM\Column(length: 32)]
	private ?string $emails_from_type = null;

	 #[ORM\Column(length: 255)]
	private ?string $emails_from_address = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $emails_from_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $smtp_host = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $smtp_username = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $smtp_password = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $smtp_auth = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getEmailsFromId():  ?int
	{
		return $this->emails_from_id;
	}

	public function setEmailsFromId(int $emails_from_id) : self
	{
		$this->emails_from_id = $emails_from_id;
		return $this;
	}

	public function getEmailsFromCode():  ?string
	{
		return $this->emails_from_code;
	}

	public function setEmailsFromCode(string $emails_from_code) : self
	{
		$this->emails_from_code = $emails_from_code;
		return $this;
	}

	public function getEmailsFromType():  ?string
	{
		return $this->emails_from_type;
	}

	public function setEmailsFromType(string $emails_from_type) : self
	{
		$this->emails_from_type = $emails_from_type;
		return $this;
	}

	public function getEmailsFromAddress():  ?string
	{
		return $this->emails_from_address;
	}

	public function setEmailsFromAddress(string $emails_from_address) : self
	{
		$this->emails_from_address = $emails_from_address;
		return $this;
	}

	public function getEmailsFromName():  ?string
	{
		return $this->emails_from_name;
	}

	public function setEmailsFromName(string $emails_from_name) : self
	{
		$this->emails_from_name = $emails_from_name;
		return $this;
	}

	public function getSmtpHost():  ?string
	{
		return $this->smtp_host;
	}

	public function setSmtpHost(string $smtp_host) : self
	{
		$this->smtp_host = $smtp_host;
		return $this;
	}

	public function getSmtpUsername():  ?string
	{
		return $this->smtp_username;
	}

	public function setSmtpUsername(string $smtp_username) : self
	{
		$this->smtp_username = $smtp_username;
		return $this;
	}

	public function getSmtpPassword():  ?string
	{
		return $this->smtp_password;
	}

	public function setSmtpPassword(string $smtp_password) : self
	{
		$this->smtp_password = $smtp_password;
		return $this;
	}

	public function getSmtpAuth():  ?string
	{
		return $this->smtp_auth;
	}

	public function setSmtpAuth(string $smtp_auth) : self
	{
		$this->smtp_auth = $smtp_auth;
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