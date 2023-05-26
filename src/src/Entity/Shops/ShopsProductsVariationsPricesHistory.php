<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsVariationsPricesHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsVariationsPricesHistoryRepository::class)]
#[ORM\Table(name: "shops_products_variations_prices_history")]
class ShopsProductsVariationsPricesHistory
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_variations_prices_history_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_products_variations_prices_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $old_price = null;

	#[ORM\Column(nullable: true)]
	private ?string $new_price = null;

	#[ORM\Column(nullable: true)]
	private ?string $old_repriced_price = null;

	#[ORM\Column(nullable: true)]
	private ?string $new_repriced_price = null;

	#[ORM\Column(nullable: true)]
	private ?string $old_repriced_price_status = null;

	#[ORM\Column(nullable: true)]
	private ?string $new_repriced_price_status = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsVariationsPricesHistoryId():  ?int
	{
		return $this->shops_products_variations_prices_history_id;
	}

	public function setShopsProductsVariationsPricesHistoryId(int $shops_products_variations_prices_history_id) : self
	{
		$this->shops_products_variations_prices_history_id = $shops_products_variations_prices_history_id;
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

	public function getOldRepricedPrice():  ?string
	{
		return $this->old_repriced_price;
	}

	public function setOldRepricedPrice(string $old_repriced_price) : self
	{
		$this->old_repriced_price = $old_repriced_price;
		return $this;
	}

	public function getNewRepricedPrice():  ?string
	{
		return $this->new_repriced_price;
	}

	public function setNewRepricedPrice(string $new_repriced_price) : self
	{
		$this->new_repriced_price = $new_repriced_price;
		return $this;
	}

	public function getOldRepricedPriceStatus():  ?string
	{
		return $this->old_repriced_price_status;
	}

	public function setOldRepricedPriceStatus(string $old_repriced_price_status) : self
	{
		$this->old_repriced_price_status = $old_repriced_price_status;
		return $this;
	}

	public function getNewRepricedPriceStatus():  ?string
	{
		return $this->new_repriced_price_status;
	}

	public function setNewRepricedPriceStatus(string $new_repriced_price_status) : self
	{
		$this->new_repriced_price_status = $new_repriced_price_status;
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