<?php

namespace App\Entity\Mailings;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Mailings\MailingsSendErrorsTypesDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: MailingsSendErrorsTypesDescriptionRepository::class)]
#[ORM\Table(name: "mailings_send_errors_types_description")]
class MailingsSendErrorsTypesDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $mailings_send_errors_types_description_id = null;

	#[ORM\Column]
	private ?int $mailings_send_errors_types_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $mailings_send_errors_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getMailingsSendErrorsTypesDescriptionId():  ?int
	{
		return $this->mailings_send_errors_types_description_id;
	}

	public function setMailingsSendErrorsTypesDescriptionId(int $mailings_send_errors_types_description_id) : self
	{
		$this->mailings_send_errors_types_description_id = $mailings_send_errors_types_description_id;
		return $this;
	}

	public function getMailingsSendErrorsTypesId():  ?int
	{
		return $this->mailings_send_errors_types_id;
	}

	public function setMailingsSendErrorsTypesId(int $mailings_send_errors_types_id) : self
	{
		$this->mailings_send_errors_types_id = $mailings_send_errors_types_id;
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

	public function getMailingsSendErrorsName():  ?string
	{
		return $this->mailings_send_errors_name;
	}

	public function setMailingsSendErrorsName(string $mailings_send_errors_name) : self
	{
		$this->mailings_send_errors_name = $mailings_send_errors_name;
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