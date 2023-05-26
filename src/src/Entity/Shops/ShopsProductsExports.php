<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsExportsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsExportsRepository::class)]
#[ORM\Table(name: "shops_products_exports")]
class ShopsProductsExports
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_exports_id = null;

	#[ORM\Column]
	private ?int $shops_products_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_export = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $export_hash = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsExportsId():  ?int
	{
		return $this->shops_products_exports_id;
	}

	public function setShopsProductsExportsId(int $shops_products_exports_id) : self
	{
		$this->shops_products_exports_id = $shops_products_exports_id;
		return $this;
	}

	public function getShopsProductsId():  ?int
	{
		return $this->shops_products_id;
	}

	public function setShopsProductsId(int $shops_products_id) : self
	{
		$this->shops_products_id = $shops_products_id;
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

	public function getExportHash():  ?string
	{
		return $this->export_hash;
	}

	public function setExportHash(string $export_hash) : self
	{
		$this->export_hash = $export_hash;
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