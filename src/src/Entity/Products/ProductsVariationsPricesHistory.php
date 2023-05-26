<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsPricesHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsPricesHistoryRepository::class)]
#[ORM\Table(name: "products_variations_prices_history")]
class ProductsVariationsPricesHistory
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_prices_history_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $currencies_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $old_price = null;

	#[ORM\Column(nullable: true)]
	private ?string $new_price = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsPricesHistoryId():  ?int
	{
		return $this->products_variations_prices_history_id;
	}

	public function setProductsVariationsPricesHistoryId(int $products_variations_prices_history_id) : self
	{
		$this->products_variations_prices_history_id = $products_variations_prices_history_id;
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

	public function getCurrenciesId():  ?int
	{
		return $this->currencies_id;
	}

	public function setCurrenciesId(int $currencies_id) : self
	{
		$this->currencies_id = $currencies_id;
		return $this;
	}

	public function getOldPrice():  ?string
	{
		return $this->old_price;
	}

	public function setOldPrice(string $old_price) : self
	{
		$this->old_price = $old_price;
		return $this;
	}

	public function getNewPrice():  ?string
	{
		return $this->new_price;
	}

	public function setNewPrice(string $new_price) : self
	{
		$this->new_price = $new_price;
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