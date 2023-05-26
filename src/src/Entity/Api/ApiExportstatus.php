<?php

namespace App\Entity\Api;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Api\ApiExportstatusRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ApiExportstatusRepository::class)]
#[ORM\Table(name: "api_exportstatus")]
class ApiExportstatus
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $api_exportstatus_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $type = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_export = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $active_last_export = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $prices_last_export = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $stock_last_export = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $other_last_export = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getApiExportstatusId():  ?int
	{
		return $this->api_exportstatus_id;
	}

	public function setApiExportstatusId(int $api_exportstatus_id) : self
	{
		$this->api_exportstatus_id = $api_exportstatus_id;
		return $this;
	}

	public function getShopsId():  ?int
	{
		return $this->shops_id;
	}

	public function setShopsId(int $shops_id) : self
	{
		$this->shops_id = $shops_id;
		return $this;
	}

	public function getType():  ?string
	{
		return $this->type;
	}

	public function setType(string $type) : self
	{
		$this->type = $type;
		return $this;
	}

	public function getLastExport():  ?\DateTimeInterface
	{
		return $this->last_export;
	}

	public function setLastExport(\DateTimeInterface $last_export) : self
	{
		$this->last_export = $last_export;
		return $this;
	}

	public function getActiveLastExport():  ?\DateTimeInterface
	{
		return $this->active_last_export;
	}

	public function setActiveLastExport(\DateTimeInterface $active_last_export) : self
	{
		$this->active_last_export = $active_last_export;
		return $this;
	}

	public function getPricesLastExport():  ?\DateTimeInterface
	{
		return $this->prices_last_export;
	}

	public function setPricesLastExport(\DateTimeInterface $prices_last_export) : self
	{
		$this->prices_last_export = $prices_last_export;
		return $this;
	}

	public function getStockLastExport():  ?\DateTimeInterface
	{
		return $this->stock_last_export;
	}

	public function setStockLastExport(\DateTimeInterface $stock_last_export) : self
	{
		$this->stock_last_export = $stock_last_export;
		return $this;
	}

	public function getOtherLastExport():  ?\DateTimeInterface
	{
		return $this->other_last_export;
	}

	public function setOtherLastExport(\DateTimeInterface $other_last_export) : self
	{
		$this->other_last_export = $other_last_export;
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