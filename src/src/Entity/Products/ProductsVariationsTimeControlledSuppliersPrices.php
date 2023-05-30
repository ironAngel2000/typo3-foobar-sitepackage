<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsTimeControlledSuppliersPricesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsTimeControlledSuppliersPricesRepository::class)]
#[ORM\Table(name: "products_variations_time_controlled_suppliers_prices")]
class ProductsVariationsTimeControlledSuppliersPrices
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_time_controlled_suppliers_prices_id = null;

	#[ORM\Column]
	private ?int $products_variations_suppliers_id = null;

	#[ORM\Column(nullable: true)]
	private ?float $price = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $products_variations_time_controlled_suppliers_prices_start = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $products_variations_time_controlled_suppliers_prices_end = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsTimeControlledSuppliersPricesId():  ?int
	{
		return $this->products_variations_time_controlled_suppliers_prices_id;
	}

	public function setProductsVariationsTimeControlledSuppliersPricesId(int $products_variations_time_controlled_suppliers_prices_id) : self
	{
		$this->products_variations_time_controlled_suppliers_prices_id = $products_variations_time_controlled_suppliers_prices_id;
		return $this;
	}

	public function getProductsVariationsSuppliersId():  ?int
	{
		return $this->products_variations_suppliers_id;
	}

	public function setProductsVariationsSuppliersId(int $products_variations_suppliers_id) : self
	{
		$this->products_variations_suppliers_id = $products_variations_suppliers_id;
		return $this;
	}

	public function getPrice():  ?float
	{
		return $this->price;
	}

	public function setPrice(float $price) : self
	{
		$this->price = $price;
		return $this;
	}

	public function getProductsVariationsTimeControlledSuppliersPricesStart():  ?\DateTimeInterface
	{
		return $this->products_variations_time_controlled_suppliers_prices_start;
	}

	public function setProductsVariationsTimeControlledSuppliersPricesStart(\DateTimeInterface $products_variations_time_controlled_suppliers_prices_start) : self
	{
		$this->products_variations_time_controlled_suppliers_prices_start = $products_variations_time_controlled_suppliers_prices_start;
		return $this;
	}

	public function getProductsVariationsTimeControlledSuppliersPricesEnd():  ?\DateTimeInterface
	{
		return $this->products_variations_time_controlled_suppliers_prices_end;
	}

	public function setProductsVariationsTimeControlledSuppliersPricesEnd(\DateTimeInterface $products_variations_time_controlled_suppliers_prices_end) : self
	{
		$this->products_variations_time_controlled_suppliers_prices_end = $products_variations_time_controlled_suppliers_prices_end;
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