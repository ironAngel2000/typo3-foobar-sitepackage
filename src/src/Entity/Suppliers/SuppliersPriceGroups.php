<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersPriceGroupsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersPriceGroupsRepository::class)]
#[ORM\Table(name: "suppliers_price_groups")]
class SuppliersPriceGroups
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_price_groups_id = null;

	#[ORM\Column]
	private ?int $suppliers_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $suppliers_price_groups_code = null;

	#[ORM\Column(nullable: true)]
	private ?float $purchase_price = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getSuppliersPriceGroupsId():  ?int
	{
		return $this->suppliers_price_groups_id;
	}

	public function setSuppliersPriceGroupsId(int $suppliers_price_groups_id) : self
	{
		$this->suppliers_price_groups_id = $suppliers_price_groups_id;
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

	public function getSuppliersPriceGroupsCode():  ?string
	{
		return $this->suppliers_price_groups_code;
	}

	public function setSuppliersPriceGroupsCode(string $suppliers_price_groups_code) : self
	{
		$this->suppliers_price_groups_code = $suppliers_price_groups_code;
		return $this;
	}

	public function getPurchasePrice():  ?float
	{
		return $this->purchase_price;
	}

	public function setPurchasePrice(float $purchase_price) : self
	{
		$this->purchase_price = $purchase_price;
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