<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsTimeControlledPricesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsTimeControlledPricesRepository::class)]
#[ORM\Table(name: "products_variations_time_controlled_prices")]
class ProductsVariationsTimeControlledPrices
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_time_controlled_prices_id = null;

	#[ORM\Column]
	private ?int $products_variations_prices_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $price = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $products_variations_time_controlled_prices_start = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $products_variations_time_controlled_prices_end = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsTimeControlledPricesId():  ?int
	{
		return $this->products_variations_time_controlled_prices_id;
	}

	public function setProductsVariationsTimeControlledPricesId(int $products_variations_time_controlled_prices_id) : self
	{
		$this->products_variations_time_controlled_prices_id = $products_variations_time_controlled_prices_id;
		return $this;
	}

	public function getProductsVariationsPricesId():  ?int
	{
		return $this->products_variations_prices_id;
	}

	public function setProductsVariationsPricesId(int $products_variations_prices_id) : self
	{
		$this->products_variations_prices_id = $products_variations_prices_id;
		return $this;
	}

	public function getPrice():  ?string
	{
		return $this->price;
	}

	public function setPrice(string $price) : self
	{
		$this->price = $price;
		return $this;
	}

	public function getProductsVariationsTimeControlledPricesStart():  ?\DateTimeInterface
	{
		return $this->products_variations_time_controlled_prices_start;
	}

	public function setProductsVariationsTimeControlledPricesStart(\DateTimeInterface $products_variations_time_controlled_prices_start) : self
	{
		$this->products_variations_time_controlled_prices_start = $products_variations_time_controlled_prices_start;
		return $this;
	}

	public function getProductsVariationsTimeControlledPricesEnd():  ?\DateTimeInterface
	{
		return $this->products_variations_time_controlled_prices_end;
	}

	public function setProductsVariationsTimeControlledPricesEnd(\DateTimeInterface $products_variations_time_controlled_prices_end) : self
	{
		$this->products_variations_time_controlled_prices_end = $products_variations_time_controlled_prices_end;
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