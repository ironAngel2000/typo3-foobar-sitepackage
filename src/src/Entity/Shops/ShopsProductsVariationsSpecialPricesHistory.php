<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsVariationsSpecialPricesHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsVariationsSpecialPricesHistoryRepository::class)]
#[ORM\Table(name: "shops_products_variations_special_prices_history")]
class ShopsProductsVariationsSpecialPricesHistory
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_variations_special_prices_history_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_products_variations_prices_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $special_price = null;

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

	public function getShopsProductsVariationsSpecialPricesHistoryId():  ?int
	{
		return $this->shops_products_variations_special_prices_history_id;
	}

	public function setShopsProductsVariationsSpecialPricesHistoryId(int $shops_products_variations_special_prices_history_id) : self
	{
		$this->shops_products_variations_special_prices_history_id = $shops_products_variations_special_prices_history_id;
		return $this;
	}

	public function getShopsProductsVariationsPricesId():  ?int
	{
		return $this->shops_products_variations_prices_id;
	}

	public function setShopsProductsVariationsPricesId(int $shops_products_variations_prices_id) : self
	{
		$this->shops_products_variations_prices_id = $shops_products_variations_prices_id;
		return $this;
	}

	public function getSpecialPrice():  ?string
	{
		return $this->special_price;
	}

	public function setSpecialPrice(string $special_price) : self
	{
		$this->special_price = $special_price;
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