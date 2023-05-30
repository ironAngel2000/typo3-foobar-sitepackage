<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsVariationsScalePricesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsVariationsScalePricesRepository::class)]
#[ORM\Table(name: "shops_products_variations_scale_prices")]
class ShopsProductsVariationsScalePrices
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_variations_scale_prices_id = null;

	#[ORM\Column]
	private ?int $shops_products_variations_prices_id = null;

	#[ORM\Column]
	private ?int $quantity = null;

	#[ORM\Column(nullable: true)]
	private ?float $price = null;

	#[ORM\Column(nullable: true)]
	private ?float $percent = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsVariationsScalePricesId():  ?int
	{
		return $this->shops_products_variations_scale_prices_id;
	}

	public function setShopsProductsVariationsScalePricesId(int $shops_products_variations_scale_prices_id) : self
	{
		$this->shops_products_variations_scale_prices_id = $shops_products_variations_scale_prices_id;
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

	public function getQuantity():  ?int
	{
		return $this->quantity;
	}

	public function setQuantity(int $quantity) : self
	{
		$this->quantity = $quantity;
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

	public function getPercent():  ?float
	{
		return $this->percent;
	}

	public function setPercent(float $percent) : self
	{
		$this->percent = $percent;
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