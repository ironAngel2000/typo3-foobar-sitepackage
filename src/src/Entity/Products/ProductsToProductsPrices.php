<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsToProductsPricesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsToProductsPricesRepository::class)]
#[ORM\Table(name: "products_to_products_prices")]
class ProductsToProductsPrices
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_to_products_prices_id = null;

	#[ORM\Column]
	private ?int $products_to_products_id = null;

	#[ORM\Column]
	private ?int $currencies_id = null;

	#[ORM\Column(nullable: true)]
	private ?float $price = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsToProductsPricesId():  ?int
	{
		return $this->products_to_products_prices_id;
	}

	public function setProductsToProductsPricesId(int $products_to_products_prices_id) : self
	{
		$this->products_to_products_prices_id = $products_to_products_prices_id;
		return $this;
	}

	public function getProductsToProductsId():  ?int
	{
		return $this->products_to_products_id;
	}

	public function setProductsToProductsId(int $products_to_products_id) : self
	{
		$this->products_to_products_id = $products_to_products_id;
		return $this;
	}

	public function getCurrenciesId():  ?int
	{
		return $this->currencies_id;
	}

	public function setCurrenciesId(int $currencies_id) : self
	{
		$this->currencies_id = $currencies_id;
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