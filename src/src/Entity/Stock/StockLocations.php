<?php

namespace App\Entity\Stock;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Stock\StockLocationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: StockLocationsRepository::class)]
#[ORM\Table(name: "stock_locations")]
class StockLocations
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $stock_locations_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_stock_locations_id = null;

	 #[ORM\Column(length: 128)]
	private ?string $stock_locations_name = null;

	 #[ORM\Column(length: 128)]
	private ?string $stock_locations_address = null;

	 #[ORM\Column(length: 64)]
	private ?string $stock_locations_city = null;

	 #[ORM\Column(length: 32)]
	private ?string $stock_locations_zip = null;

	 #[ORM\Column(length: 64)]
	private ?string $stock_locations_country = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getStockLocationsId():  ?int
	{
		return $this->stock_locations_id;
	}

	public function setStockLocationsId(int $stock_locations_id) : self
	{
		$this->stock_locations_id = $stock_locations_id;
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

	public function getStockLocationsName():  ?string
	{
		return $this->stock_locations_name;
	}

	public function setStockLocationsName(string $stock_locations_name) : self
	{
		$this->stock_locations_name = $stock_locations_name;
		return $this;
	}

	public function getStockLocationsAddress():  ?string
	{
		return $this->stock_locations_address;
	}

	public function setStockLocationsAddress(string $stock_locations_address) : self
	{
		$this->stock_locations_address = $stock_locations_address;
		return $this;
	}

	public function getStockLocationsCity():  ?string
	{
		return $this->stock_locations_city;
	}

	public function setStockLocationsCity(string $stock_locations_city) : self
	{
		$this->stock_locations_city = $stock_locations_city;
		return $this;
	}

	public function getStockLocationsZip():  ?string
	{
		return $this->stock_locations_zip;
	}

	public function setStockLocationsZip(string $stock_locations_zip) : self
	{
		$this->stock_locations_zip = $stock_locations_zip;
		return $this;
	}

	public function getStockLocationsCountry():  ?string
	{
		return $this->stock_locations_country;
	}

	public function setStockLocationsCountry(string $stock_locations_country) : self
	{
		$this->stock_locations_country = $stock_locations_country;
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