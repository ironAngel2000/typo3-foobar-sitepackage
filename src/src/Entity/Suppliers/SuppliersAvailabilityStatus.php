<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersAvailabilityStatusRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersAvailabilityStatusRepository::class)]
#[ORM\Table(name: "suppliers_availability_status")]
class SuppliersAvailabilityStatus
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?string $suppliers_availability_status_id = null;

	#[ORM\Column]
	private ?int $suppliers_id = null;

	 #[ORM\Column(length: 32)]
	private ?string $suppliers_availability_status_code = null;

	#[ORM\Column]
	private ?string $available = null;

	 #[ORM\Column(length: 96)]
	private ?string $icon_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getSuppliersAvailabilityStatusId():  ?string
	{
		return $this->suppliers_availability_status_id;
	}

	public function setSuppliersAvailabilityStatusId(string $suppliers_availability_status_id) : self
	{
		$this->suppliers_availability_status_id = $suppliers_availability_status_id;
		return $this;
	}

	public function getSuppliersId():  ?int
	{
		return $this->suppliers_id;
	}

	public function setSuppliersId(int $suppliers_id) : self
	{
		$this->suppliers_id = $suppliers_id;
		return $this;
	}

	public function getSuppliersAvailabilityStatusCode():  ?string
	{
		return $this->suppliers_availability_status_code;
	}

	public function setSuppliersAvailabilityStatusCode(string $suppliers_availability_status_code) : self
	{
		$this->suppliers_availability_status_code = $suppliers_availability_status_code;
		return $this;
	}

	public function getAvailable():  ?string
	{
		return $this->available;
	}

	public function setAvailable(string $available) : self
	{
		$this->available = $available;
		return $this;
	}

	public function getIconName():  ?string
	{
		return $this->icon_name;
	}

	public function setIconName(string $icon_name) : self
	{
		$this->icon_name = $icon_name;
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