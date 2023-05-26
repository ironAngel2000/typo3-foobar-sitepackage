<?php

namespace App\Entity\Faxes;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Faxes\FaxesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: FaxesRepository::class)]
#[ORM\Table(name: "faxes")]
class Faxes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $faxes_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $webservice_id = null;

	#[ORM\Column(length: 60, nullable: true)]
	private ?string $recipient = null;

	#[ORM\Column(nullable: true)]
	private ?int $pages = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $status = null;

	#[ORM\Column(length: 60, nullable: true)]
	private ?string $modul_name = null;

	#[ORM\Column(nullable: true)]
	private ?int $modul_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $webservice_accepted = null;

	#[ORM\Column(nullable: true)]
	private ?int $fax_delivered = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getFaxesId():  ?int
	{
		return $this->faxes_id;
	}

	public function setFaxesId(int $faxes_id) : self
	{
		$this->faxes_id = $faxes_id;
		return $this;
	}

	public function getWebserviceId():  ?string
	{
		return $this->webservice_id;
	}

	public function setWebserviceId(string $webservice_id) : self
	{
		$this->webservice_id = $webservice_id;
		return $this;
	}

	public function getRecipient():  ?string
	{
		return $this->recipient;
	}

	public function setRecipient(string $recipient) : self
	{
		$this->recipient = $recipient;
		return $this;
	}

	public function getPages():  ?int
	{
		return $this->pages;
	}

	public function setPages(int $pages) : self
	{
		$this->pages = $pages;
		return $this;
	}

	public function getStatus():  ?string
	{
		return $this->status;
	}

	public function setStatus(string $status) : self
	{
		$this->status = $status;
		return $this;
	}

	public function getModulName():  ?string
	{
		return $this->modul_name;
	}

	public function setModulName(string $modul_name) : self
	{
		$this->modul_name = $modul_name;
		return $this;
	}

	public function getModulId():  ?int
	{
		return $this->modul_id;
	}

	public function setModulId(int $modul_id) : self
	{
		$this->modul_id = $modul_id;
		return $this;
	}

	public function getWebserviceAccepted():  ?int
	{
		return $this->webservice_accepted;
	}

	public function setWebserviceAccepted(int $webservice_accepted) : self
	{
		$this->webservice_accepted = $webservice_accepted;
		return $this;
	}

	public function getFaxDelivered():  ?int
	{
		return $this->fax_delivered;
	}

	public function setFaxDelivered(int $fax_delivered) : self
	{
		$this->fax_delivered = $fax_delivered;
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