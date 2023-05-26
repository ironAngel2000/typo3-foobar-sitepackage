<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersCatalogsAdditionalsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersCatalogsAdditionalsRepository::class)]
#[ORM\Table(name: "suppliers_catalogs_additionals")]
class SuppliersCatalogsAdditionals
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_catalogs_additionals_id = null;

	#[ORM\Column]
	private ?int $suppliers_catalogs_id = null;

	#[ORM\Column]
	private ?int $suppliers_catalogs_additionals_types_id = null;

	#[ORM\Column]
	private ?string $additionals_status = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column]
	private ?int $last_updater = null;

	public function getSuppliersCatalogsAdditionalsId():  ?int
	{
		return $this->suppliers_catalogs_additionals_id;
	}

	public function setSuppliersCatalogsAdditionalsId(int $suppliers_catalogs_additionals_id) : self
	{
		$this->suppliers_catalogs_additionals_id = $suppliers_catalogs_additionals_id;
		return $this;
	}

	public function getSuppliersCatalogsId():  ?int
	{
		return $this->suppliers_catalogs_id;
	}

	public function setSuppliersCatalogsId(int $suppliers_catalogs_id) : self
	{
		$this->suppliers_catalogs_id = $suppliers_catalogs_id;
		return $this;
	}

	public function getSuppliersCatalogsAdditionalsTypesId():  ?int
	{
		return $this->suppliers_catalogs_additionals_types_id;
	}

	public function setSuppliersCatalogsAdditionalsTypesId(int $suppliers_catalogs_additionals_types_id) : self
	{
		$this->suppliers_catalogs_additionals_types_id = $suppliers_catalogs_additionals_types_id;
		return $this;
	}

	public function getAdditionalsStatus():  ?string
	{
		return $this->additionals_status;
	}

	public function setAdditionalsStatus(string $additionals_status) : self
	{
		$this->additionals_status = $additionals_status;
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