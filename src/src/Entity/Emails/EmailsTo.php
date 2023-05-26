<?php

namespace App\Entity\Emails;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Emails\EmailsToRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: EmailsToRepository::class)]
#[ORM\Table(name: "emails_to")]
class EmailsTo
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $emails_to_id = null;

	 #[ORM\Column(length: 32)]
	private ?string $emails_to_code = null;

	 #[ORM\Column(length: 255)]
	private ?string $emails_to_address = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $emails_to_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getEmailsToId():  ?int
	{
		return $this->emails_to_id;
	}

	public function setEmailsToId(int $emails_to_id) : self
	{
		$this->emails_to_id = $emails_to_id;
		return $this;
	}

	public function getEmailsToCode():  ?string
	{
		return $this->emails_to_code;
	}

	public function setEmailsToCode(string $emails_to_code) : self
	{
		$this->emails_to_code = $emails_to_code;
		return $this;
	}

	public function getEmailsToAddress():  ?string
	{
		return $this->emails_to_address;
	}

	public function setEmailsToAddress(string $emails_to_address) : self
	{
		$this->emails_to_address = $emails_to_address;
		return $this;
	}

	public function getEmailsToName():  ?string
	{
		return $this->emails_to_name;
	}

	public function setEmailsToName(string $emails_to_name) : self
	{
		$this->emails_to_name = $emails_to_name;
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