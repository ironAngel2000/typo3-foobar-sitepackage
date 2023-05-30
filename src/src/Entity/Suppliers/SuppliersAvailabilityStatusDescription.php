<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersAvailabilityStatusDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersAvailabilityStatusDescriptionRepository::class)]
#[ORM\Table(name: "suppliers_availability_status_description")]
class SuppliersAvailabilityStatusDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_availability_status_description_id = null;

	#[ORM\Column]
	private ?int $suppliers_availability_status_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	#[ORM\Column(length: 96, nullable: true)]
	private ?string $availability_status_description = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column]
	private ?int $last_updater = null;

	public function getSuppliersAvailabilityStatusDescriptionId():  ?int
	{
		return $this->suppliers_availability_status_description_id;
	}

	public function setSuppliersAvailabilityStatusDescriptionId(int $suppliers_availability_status_description_id) : self
	{
		$this->suppliers_availability_status_description_id = $suppliers_availability_status_description_id;
		return $this;
	}

	public function getSuppliersAvailabilityStatusId():  ?int
	{
		return $this->suppliers_availability_status_id;
	}

	public function setSuppliersAvailabilityStatusId(int $suppliers_availability_status_id) : self
	{
		$this->suppliers_availability_status_id = $suppliers_availability_status_id;
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

	public function getAvailabilityStatusDescription():  ?string
	{
		return $this->availability_status_description;
	}

	public function setAvailabilityStatusDescription(string $availability_status_description) : self
	{
		$this->availability_status_description = $availability_status_description;
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