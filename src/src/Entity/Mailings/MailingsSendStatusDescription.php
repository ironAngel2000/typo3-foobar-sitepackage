<?php

namespace App\Entity\Mailings;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Mailings\MailingsSendStatusDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: MailingsSendStatusDescriptionRepository::class)]
#[ORM\Table(name: "mailings_send_status_description")]
class MailingsSendStatusDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $mailings_send_status_description_id = null;

	#[ORM\Column]
	private ?int $mailings_send_status_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $mailings_send_status_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $mailings_send_status_description = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getMailingsSendStatusDescriptionId():  ?int
	{
		return $this->mailings_send_status_description_id;
	}

	public function setMailingsSendStatusDescriptionId(int $mailings_send_status_description_id) : self
	{
		$this->mailings_send_status_description_id = $mailings_send_status_description_id;
		return $this;
	}

	public function getMailingsSendStatusId():  ?int
	{
		return $this->mailings_send_status_id;
	}

	public function setMailingsSendStatusId(int $mailings_send_status_id) : self
	{
		$this->mailings_send_status_id = $mailings_send_status_id;
		return $this;
	}

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
		return $this;
	}

	public function getMailingsSendStatusName():  ?string
	{
		return $this->mailings_send_status_name;
	}

	public function setMailingsSendStatusName(string $mailings_send_status_name) : self
	{
		$this->mailings_send_status_name = $mailings_send_status_name;
		return $this;
	}

	public function getMailingsSendStatusDescription():  ?string
	{
		return $this->mailings_send_status_description;
	}

	public function setMailingsSendStatusDescription(string $mailings_send_status_description) : self
	{
		$this->mailings_send_status_description = $mailings_send_status_description;
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