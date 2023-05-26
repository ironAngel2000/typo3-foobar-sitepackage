<?php

namespace App\Entity\Mailings;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Mailings\MailingsSendStatusRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: MailingsSendStatusRepository::class)]
#[ORM\Table(name: "mailings_send_status")]
class MailingsSendStatus
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $mailings_send_status_id = null;

	 #[ORM\Column(length: 32)]
	private ?string $mailings_send_status_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getMailingsSendStatusId():  ?int
	{
		return $this->mailings_send_status_id;
	}

	public function setMailingsSendStatusId(int $mailings_send_status_id) : self
	{
		$this->mailings_send_status_id = $mailings_send_status_id;
		return $this;
	}

	public function getMailingsSendStatusCode():  ?string
	{
		return $this->mailings_send_status_code;
	}

	public function setMailingsSendStatusCode(string $mailings_send_status_code) : self
	{
		$this->mailings_send_status_code = $mailings_send_status_code;
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