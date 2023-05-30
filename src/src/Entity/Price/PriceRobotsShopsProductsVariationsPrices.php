<?php

namespace App\Entity\Price;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Price\PriceRobotsShopsProductsVariationsPricesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PriceRobotsShopsProductsVariationsPricesRepository::class)]
#[ORM\Table(name: "price_robots_shops_products_variations_prices")]
class PriceRobotsShopsProductsVariationsPrices
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $price_robots_shops_products_variations_prices_id = null;

	#[ORM\Column]
	private ?int $price_robots_id = null;

	#[ORM\Column]
	private ?int $shops_products_variations_id = null;

	#[ORM\Column]
	private ?int $price_robots_prices_locked = null;

	#[ORM\Column(nullable: true)]
	private ?float $price_robots_min_price = null;

	#[ORM\Column(nullable: true)]
	private ?float $price_robots_max_price = null;

	#[ORM\Column(nullable: true)]
	private ?float $price_robots_stand_alone_price = null;

	#[ORM\Column(nullable: true)]
	private ?float $shipping_costs = null;

	#[ORM\Column(nullable: true)]
	private ?float $price_robots_price_interval = null;

	#[ORM\Column(length: 10, nullable: true)]
	private ?string $price_robots_repricing_target_position = null;

	#[ORM\Column]
	private ?int $price_robots_optimization_active = null;

	#[ORM\Column(nullable: true)]
	private ?float $price_robots_fixed_price = null;

	#[ORM\Column]
	private ?int $price_robots_fixed_price_active = null;

	#[ORM\Column(nullable: true)]
	private ?string $price_robots_additional_object = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getPriceRobotsShopsProductsVariationsPricesId():  ?int
	{
		return $this->price_robots_shops_products_variations_prices_id;
	}

	public function setPriceRobotsShopsProductsVariationsPricesId(int $price_robots_shops_products_variations_prices_id) : self
	{
		$this->price_robots_shops_products_variations_prices_id = $price_robots_shops_products_variations_prices_id;
		return $this;
	}

	public function getPriceRobotsId():  ?int
	{
		return $this->price_robots_id;
	}

	public function setPriceRobotsId(int $price_robots_id) : self
	{
		$this->price_robots_id = $price_robots_id;
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

	public function getPriceRobotsPricesLocked():  ?int
	{
		return $this->price_robots_prices_locked;
	}

	public function setPriceRobotsPricesLocked(int $price_robots_prices_locked) : self
	{
		$this->price_robots_prices_locked = $price_robots_prices_locked;
		return $this;
	}

	public function getPriceRobotsMinPrice():  ?float
	{
		return $this->price_robots_min_price;
	}

	public function setPriceRobotsMinPrice(float $price_robots_min_price) : self
	{
		$this->price_robots_min_price = $price_robots_min_price;
		return $this;
	}

	public function getPriceRobotsMaxPrice():  ?float
	{
		return $this->price_robots_max_price;
	}

	public function setPriceRobotsMaxPrice(float $price_robots_max_price) : self
	{
		$this->price_robots_max_price = $price_robots_max_price;
		return $this;
	}

	public function getPriceRobotsStandAlonePrice():  ?float
	{
		return $this->price_robots_stand_alone_price;
	}

	public function setPriceRobotsStandAlonePrice(float $price_robots_stand_alone_price) : self
	{
		$this->price_robots_stand_alone_price = $price_robots_stand_alone_price;
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

	public function getPriceRobotsPriceInterval():  ?float
	{
		return $this->price_robots_price_interval;
	}

	public function setPriceRobotsPriceInterval(float $price_robots_price_interval) : self
	{
		$this->price_robots_price_interval = $price_robots_price_interval;
		return $this;
	}

	public function getPriceRobotsRepricingTargetPosition():  ?string
	{
		return $this->price_robots_repricing_target_position;
	}

	public function setPriceRobotsRepricingTargetPosition(string $price_robots_repricing_target_position) : self
	{
		$this->price_robots_repricing_target_position = $price_robots_repricing_target_position;
		return $this;
	}

	public function getPriceRobotsOptimizationActive():  ?int
	{
		return $this->price_robots_optimization_active;
	}

	public function setPriceRobotsOptimizationActive(int $price_robots_optimization_active) : self
	{
		$this->price_robots_optimization_active = $price_robots_optimization_active;
		return $this;
	}

	public function getPriceRobotsFixedPrice():  ?float
	{
		return $this->price_robots_fixed_price;
	}

	public function setPriceRobotsFixedPrice(float $price_robots_fixed_price) : self
	{
		$this->price_robots_fixed_price = $price_robots_fixed_price;
		return $this;
	}

	public function getPriceRobotsFixedPriceActive():  ?int
	{
		return $this->price_robots_fixed_price_active;
	}

	public function setPriceRobotsFixedPriceActive(int $price_robots_fixed_price_active) : self
	{
		$this->price_robots_fixed_price_active = $price_robots_fixed_price_active;
		return $this;
	}

	public function getPriceRobotsAdditionalObject():  ?string
	{
		return $this->price_robots_additional_object;
	}

	public function setPriceRobotsAdditionalObject(string $price_robots_additional_object) : self
	{
		$this->price_robots_additional_object = $price_robots_additional_object;
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