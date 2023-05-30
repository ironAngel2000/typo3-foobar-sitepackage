<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsStockRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsStockRepository::class)]
#[ORM\Table(name: "products_variations_stock")]
class ProductsVariationsStock
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_stock_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	#[ORM\Column]
	private ?int $stock_locations_id = null;

	#[ORM\Column]
	private ?int $quantity = null;

	#[ORM\Column]
	private ?int $reserved_quantity = null;

	#[ORM\Column]
	private ?int $minimum_stock_quantity = null;

	#[ORM\Column]
	private ?int $never_out_of_stock = null;

	#[ORM\Column(nullable: true)]
	private ?int $delivery_times_id = null;

	#[ORM\Column(nullable: true)]
	private ?float $shipping_costs = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsStockId():  ?int
	{
		return $this->products_variations_stock_id;
	}

	public function setProductsVariationsStockId(int $products_variations_stock_id) : self
	{
		$this->products_variations_stock_id = $products_variations_stock_id;
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

	public function getQuantity():  ?int
	{
		return $this->quantity;
	}

	public function setQuantity(int $quantity) : self
	{
		$this->quantity = $quantity;
		return $this;
	}

	public function getReservedQuantity():  ?int
	{
		return $this->reserved_quantity;
	}

	public function setReservedQuantity(int $reserved_quantity) : self
	{
		$this->reserved_quantity = $reserved_quantity;
		return $this;
	}

	public function getMinimumStockQuantity():  ?int
	{
		return $this->minimum_stock_quantity;
	}

	public function setMinimumStockQuantity(int $minimum_stock_quantity) : self
	{
		$this->minimum_stock_quantity = $minimum_stock_quantity;
		return $this;
	}

	public function getNeverOutOfStock():  ?int
	{
		return $this->never_out_of_stock;
	}

	public function setNeverOutOfStock(int $never_out_of_stock) : self
	{
		$this->never_out_of_stock = $never_out_of_stock;
		return $this;
	}

	public function getDeliveryTimesId():  ?int
	{
		return $this->delivery_times_id;
	}

	public function setDeliveryTimesId(int $delivery_times_id) : self
	{
		$this->delivery_times_id = $delivery_times_id;
		return $this;
	}

	public function getShippingCosts():  ?float
	{
		return $this->shipping_costs;
	}

	public function setShippingCosts(float $shipping_costs) : self
	{
		$this->shipping_costs = $shipping_costs;
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