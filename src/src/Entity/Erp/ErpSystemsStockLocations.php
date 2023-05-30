<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsStockLocationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsStockLocationsRepository::class)]
#[ORM\Table(name: "erp_systems_stock_locations")]
class ErpSystemsStockLocations
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_stock_locations_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column]
	private ?int $stock_locations_id = null;

	#[ORM\Column]
	private ?int $main_stock_location = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $extern_stock_locations_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsStockLocationsId():  ?int
	{
		return $this->erp_systems_stock_locations_id;
	}

	public function setErpSystemsStockLocationsId(int $erp_systems_stock_locations_id) : self
	{
		$this->erp_systems_stock_locations_id = $erp_systems_stock_locations_id;
		return $this;
	}

	public function getErpSystemsId():  ?int
	{
		return $this->erp_systems_id;
	}

	public function setErpSystemsId(int $erp_systems_id) : self
	{
		$this->erp_systems_id = $erp_systems_id;
		return $this;
	}

	public function getStockLocationsId():  ?int
	{
		return $this->stock_locations_id;
	}

	public function setStockLocationsId(int $stock_locations_id) : self
	{
		$this->stock_locations_id = $stock_locations_id;
		return $this;
	}

	public function getMainStockLocation():  ?int
	{
		return $this->main_stock_location;
	}

	public function setMainStockLocation(int $main_stock_location) : self
	{
		$this->main_stock_location = $main_stock_location;
		return $this;
	}

	public function getExternStockLocationsId():  ?string
	{
		return $this->extern_stock_locations_id;
	}

	public function setExternStockLocationsId(string $extern_stock_locations_id) : self
	{
		$this->extern_stock_locations_id = $extern_stock_locations_id;
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