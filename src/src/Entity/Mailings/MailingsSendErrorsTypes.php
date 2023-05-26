<?php

namespace App\Entity\Mailings;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Mailings\MailingsSendErrorsTypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: MailingsSendErrorsTypesRepository::class)]
#[ORM\Table(name: "mailings_send_errors_types")]
class MailingsSendErrorsTypes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $mailings_send_errors_types_id = null;

	 #[ORM\Column(length: 32)]
	private ?string $mailings_send_errors_types_codes = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getMailingsSendErrorsTypesId():  ?int
	{
		return $this->mailings_send_errors_types_id;
	}

	public function setMailingsSendErrorsTypesId(int $mailings_send_errors_types_id) : self
	{
		$this->mailings_send_errors_types_id = $mailings_send_errors_types_id;
		return $this;
	}

	public function getMailingsSendErrorsTypesCodes():  ?string
	{
		return $this->mailings_send_errors_types_codes;
	}

	public function setMailingsSendErrorsTypesCodes(string $mailings_send_errors_types_codes) : self
	{
		$this->mailings_send_errors_types_codes = $mailings_send_errors_types_codes;
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