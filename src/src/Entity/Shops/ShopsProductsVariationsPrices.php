<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsVariationsPricesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsVariationsPricesRepository::class)]
#[ORM\Table(name: "shops_products_variations_prices")]
class ShopsProductsVariationsPrices
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_variations_prices_id = null;

	#[ORM\Column]
	private ?int $shops_products_variations_id = null;

	#[ORM\Column]
	private ?int $currencies_id = null;

	#[ORM\Column(nullable: true)]
	private ?float $price = null;

	#[ORM\Column]
	private ?float $repriced_price = null;

	#[ORM\Column]
	private ?int $repriced_price_status = null;

	#[ORM\Column(nullable: true)]
	private ?float $price_rrp = null;

	#[ORM\Column]
	private ?int $price_locked = null;

	#[ORM\Column]
	private ?int $price_rrp_locked = null;

	#[ORM\Column]
	private ?int $special_price_status = null;

	#[ORM\Column]
	private ?int $overwrite_products_special_prices = null;

	#[ORM\Column]
	private ?int $overwrite_products_scale_prices = null;

	#[ORM\Column(nullable: true)]
	private ?float $special_price = null;

	#[ORM\Column(nullable: true)]
	private ?int $special_price_stock_threshold = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $special_price_start = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $special_price_end = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsVariationsPricesId():  ?int
	{
		return $this->shops_products_variations_prices_id;
	}

	public function setShopsProductsVariationsPricesId(int $shops_products_variations_prices_id) : self
	{
		$this->shops_products_variations_prices_id = $shops_products_variations_prices_id;
		return $this;
	}

	public function getShopsProductsVariationsId():  ?int
	{
		return $this->shops_products_variations_id;
	}

	public function setShopsProductsVariationsId(int $shops_products_variations_id) : self
	{
		$this->shops_products_variations_id = $shops_products_variations_id;
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

	public function getRepricedPrice():  ?float
	{
		return $this->repriced_price;
	}

	public function setRepricedPrice(float $repriced_price) : self
	{
		$this->repriced_price = $repriced_price;
		return $this;
	}

	public function getRepricedPriceStatus():  ?int
	{
		return $this->repriced_price_status;
	}

	public function setRepricedPriceStatus(int $repriced_price_status) : self
	{
		$this->repriced_price_status = $repriced_price_status;
		return $this;
	}

	public function getPriceRrp():  ?float
	{
		return $this->price_rrp;
	}

	public function setPriceRrp(float $price_rrp) : self
	{
		$this->price_rrp = $price_rrp;
		return $this;
	}

	public function getPriceLocked():  ?int
	{
		return $this->price_locked;
	}

	public function setPriceLocked(int $price_locked) : self
	{
		$this->price_locked = $price_locked;
		return $this;
	}

	public function getPriceRrpLocked():  ?int
	{
		return $this->price_rrp_locked;
	}

	public function setPriceRrpLocked(int $price_rrp_locked) : self
	{
		$this->price_rrp_locked = $price_rrp_locked;
		return $this;
	}

	public function getSpecialPriceStatus():  ?int
	{
		return $this->special_price_status;
	}

	public function setSpecialPriceStatus(int $special_price_status) : self
	{
		$this->special_price_status = $special_price_status;
		return $this;
	}

	public function getOverwriteProductsSpecialPrices():  ?int
	{
		return $this->overwrite_products_special_prices;
	}

	public function setOverwriteProductsSpecialPrices(int $overwrite_products_special_prices) : self
	{
		$this->overwrite_products_special_prices = $overwrite_products_special_prices;
		return $this;
	}

	public function getOverwriteProductsScalePrices():  ?int
	{
		return $this->overwrite_products_scale_prices;
	}

	public function setOverwriteProductsScalePrices(int $overwrite_products_scale_prices) : self
	{
		$this->overwrite_products_scale_prices = $overwrite_products_scale_prices;
		return $this;
	}

	public function getSpecialPrice():  ?float
	{
		return $this->special_price;
	}

	public function setSpecialPrice(float $special_price) : self
	{
		$this->special_price = $special_price;
		return $this;
	}

	public function getSpecialPriceStockThreshold():  ?int
	{
		return $this->special_price_stock_threshold;
	}

	public function setSpecialPriceStockThreshold(int $special_price_stock_threshold) : self
	{
		$this->special_price_stock_threshold = $special_price_stock_threshold;
		return $this;
	}

	public function getSpecialPriceStart():  ?\DateTimeInterface
	{
		return $this->special_price_start;
	}

	public function setSpecialPriceStart(\DateTimeInterface $special_price_start) : self
	{
		$this->special_price_start = $special_price_start;
		return $this;
	}

	public function getSpecialPriceEnd():  ?\DateTimeInterface
	{
		return $this->special_price_end;
	}

	public function setSpecialPriceEnd(\DateTimeInterface $special_price_end) : self
	{
		$this->special_price_end = $special_price_end;
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