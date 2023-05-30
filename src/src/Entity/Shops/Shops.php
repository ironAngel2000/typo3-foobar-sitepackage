<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsRepository::class)]
#[ORM\Table(name: "shops")]
class Shops
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_id = null;

	 #[ORM\Column(length: 32)]
	private ?string $shops_name = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_groups_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $sort_order = null;

	#[ORM\Column]
	private ?int $countries_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_price_schemes_id = null;

	#[ORM\Column]
	private ?float $absolute_surcharge = null;

	#[ORM\Column]
	private ?float $surcharge = null;

	#[ORM\Column(nullable: true)]
	private ?float $absolute_surcharge_threshold = null;

	#[ORM\Column(nullable: true)]
	private ?float $exchange_rate = null;

	#[ORM\Column]
	private ?int $shops_prices_outdated = null;

	#[ORM\Column]
	private ?int $shops_filters_outdated = null;

	#[ORM\Column]
	private ?int $shops_status = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_states_id = null;

	#[ORM\Column]
	private ?int $shops_visible = null;

	#[ORM\Column]
	private ?int $ignore_products_special_prices = null;

	#[ORM\Column]
	private ?int $ignore_products_scale_prices = null;

	#[ORM\Column]
	private ?int $shops_types_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $master_shops_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsId():  ?int
	{
		return $this->shops_id;
	}

	public function setShopsId(int $shops_id) : self
	{
		$this->shops_id = $shops_id;
		return $this;
	}

	public function getShopsName():  ?string
	{
		return $this->shops_name;
	}

	public function setShopsName(string $shops_name) : self
	{
		$this->shops_name = $shops_name;
		return $this;
	}

	public function getShopsGroupsId():  ?int
	{
		return $this->shops_groups_id;
	}

	public function setShopsGroupsId(int $shops_groups_id) : self
	{
		$this->shops_groups_id = $shops_groups_id;
		return $this;
	}

	public function getSortOrder():  ?int
	{
		return $this->sort_order;
	}

	public function setSortOrder(int $sort_order) : self
	{
		$this->sort_order = $sort_order;
		return $this;
	}

	public function getCountriesId():  ?int
	{
		return $this->countries_id;
	}

	public function setCountriesId(int $countries_id) : self
	{
		$this->countries_id = $countries_id;
		return $this;
	}

	public function getShopsPriceSchemesId():  ?int
	{
		return $this->shops_price_schemes_id;
	}

	public function setShopsPriceSchemesId(int $shops_price_schemes_id) : self
	{
		$this->shops_price_schemes_id = $shops_price_schemes_id;
		return $this;
	}

	public function getAbsoluteSurcharge():  ?float
	{
		return $this->absolute_surcharge;
	}

	public function setAbsoluteSurcharge(float $absolute_surcharge) : self
	{
		$this->absolute_surcharge = $absolute_surcharge;
		return $this;
	}

	public function getSurcharge():  ?float
	{
		return $this->surcharge;
	}

	public function setSurcharge(float $surcharge) : self
	{
		$this->surcharge = $surcharge;
		return $this;
	}

	public function getAbsoluteSurchargeThreshold():  ?float
	{
		return $this->absolute_surcharge_threshold;
	}

	public function setAbsoluteSurchargeThreshold(float $absolute_surcharge_threshold) : self
	{
		$this->absolute_surcharge_threshold = $absolute_surcharge_threshold;
		return $this;
	}

	public function getExchangeRate():  ?float
	{
		return $this->exchange_rate;
	}

	public function setExchangeRate(float $exchange_rate) : self
	{
		$this->exchange_rate = $exchange_rate;
		return $this;
	}

	public function getShopsPricesOutdated():  ?int
	{
		return $this->shops_prices_outdated;
	}

	public function setShopsPricesOutdated(int $shops_prices_outdated) : self
	{
		$this->shops_prices_outdated = $shops_prices_outdated;
		return $this;
	}

	public function getShopsFiltersOutdated():  ?int
	{
		return $this->shops_filters_outdated;
	}

	public function setShopsFiltersOutdated(int $shops_filters_outdated) : self
	{
		$this->shops_filters_outdated = $shops_filters_outdated;
		return $this;
	}

	public function getShopsStatus():  ?int
	{
		return $this->shops_status;
	}

	public function setShopsStatus(int $shops_status) : self
	{
		$this->shops_status = $shops_status;
		return $this;
	}

	public function getShopsStatesId():  ?int
	{
		return $this->shops_states_id;
	}

	public function setShopsStatesId(int $shops_states_id) : self
	{
		$this->shops_states_id = $shops_states_id;
		return $this;
	}

	public function getShopsVisible():  ?int
	{
		return $this->shops_visible;
	}

	public function setShopsVisible(int $shops_visible) : self
	{
		$this->shops_visible = $shops_visible;
		return $this;
	}

	public function getIgnoreProductsSpecialPrices():  ?int
	{
		return $this->ignore_products_special_prices;
	}

	public function setIgnoreProductsSpecialPrices(int $ignore_products_special_prices) : self
	{
		$this->ignore_products_special_prices = $ignore_products_special_prices;
		return $this;
	}

	public function getIgnoreProductsScalePrices():  ?int
	{
		return $this->ignore_products_scale_prices;
	}

	public function setIgnoreProductsScalePrices(int $ignore_products_scale_prices) : self
	{
		$this->ignore_products_scale_prices = $ignore_products_scale_prices;
		return $this;
	}

	public function getShopsTypesId():  ?int
	{
		return $this->shops_types_id;
	}

	public function setShopsTypesId(int $shops_types_id) : self
	{
		$this->shops_types_id = $shops_types_id;
		return $this;
	}

	public function getMasterShopsId():  ?int
	{
		return $this->master_shops_id;
	}

	public function setMasterShopsId(int $master_shops_id) : self
	{
		$this->master_shops_id = $master_shops_id;
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