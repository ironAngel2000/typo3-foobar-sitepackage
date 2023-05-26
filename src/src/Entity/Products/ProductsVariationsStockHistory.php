<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsStockHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsStockHistoryRepository::class)]
#[ORM\Table(name: "products_variations_stock_history")]
class ProductsVariationsStockHistory
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_stock_history_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $products_variations_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $stock_locations_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $old_quantity = null;

	#[ORM\Column(nullable: true)]
	private ?string $new_quantity = null;

	#[ORM\Column(nullable: true)]
	private ?string $old_reserved_quantity = null;

	#[ORM\Column(nullable: true)]
	private ?string $new_reserved_quantity = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsStockHistoryId():  ?int
	{
		return $this->products_variations_stock_history_id;
	}

	public function setProductsVariationsStockHistoryId(int $products_variations_stock_history_id) : self
	{
		$this->products_variations_stock_history_id = $products_variations_stock_history_id;
		return $this;
	}

	public function getProductsVariationsId():  ?int
	{
		return $this->products_variations_id;
	}

	public function setProductsVariationsId(int $products_variations_id) : self
	{
		$this->products_variations_id = $products_variations_id;
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

	public function getOldQuantity():  ?string
	{
		return $this->old_quantity;
	}

	public function setOldQuantity(string $old_quantity) : self
	{
		$this->old_quantity = $old_quantity;
		return $this;
	}

	public function getNewQuantity():  ?string
	{
		return $this->new_quantity;
	}

	public function setNewQuantity(string $new_quantity) : self
	{
		$this->new_quantity = $new_quantity;
		return $this;
	}

	public function getOldReservedQuantity():  ?string
	{
		return $this->old_reserved_quantity;
	}

	public function setOldReservedQuantity(string $old_reserved_quantity) : self
	{
		$this->old_reserved_quantity = $old_reserved_quantity;
		return $this;
	}

	public function getNewReservedQuantity():  ?string
	{
		return $this->new_reserved_quantity;
	}

	public function setNewReservedQuantity(string $new_reserved_quantity) : self
	{
		$this->new_reserved_quantity = $new_reserved_quantity;
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