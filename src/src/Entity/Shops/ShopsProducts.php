<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsRepository::class)]
#[ORM\Table(name: "shops_products")]
class ShopsProducts
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column]
	private ?int $products_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $identifier = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_shops_products_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_sku = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $uuid = null;

	#[ORM\Column]
	private ?string $products_status = null;

	#[ORM\Column]
	private ?string $online_status = null;

	#[ORM\Column]
	private ?string $filter_passed = null;

	#[ORM\Column(nullable: true)]
	private ?int $failed_shops_filters_id = null;

	#[ORM\Column]
	private ?string $manual_assignment = null;

	#[ORM\Column]
	private ?string $has_errors = null;

	#[ORM\Column]
	private ?string $has_categories_assignments = null;

	#[ORM\Column]
	private ?string $to_delete = null;

	#[ORM\Column(nullable: true)]
	private ?string $min_price = null;

	#[ORM\Column(nullable: true)]
	private ?string $max_price = null;

	#[ORM\Column(nullable: true)]
	private ?string $min_price_rrp = null;

	#[ORM\Column(nullable: true)]
	private ?string $max_price_rrp = null;

	#[ORM\Column]
	private ?string $has_price_locked = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $initial_shop_date = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $shops_products_last_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $shops_products_variations_last_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $status_last_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $prices_last_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsId():  ?int
	{
		return $this->shops_products_id;
	}

	public function setShopsProductsId(int $shops_products_id) : self
	{
		$this->shops_products_id = $shops_products_id;
		return $this;
	}

	public function getShopsId():  ?int
	{
		return $this->shops_id;
	}

	public function setShopsId(int $shops_id) : self
	{
		$this->shops_id = $shops_id;
		return $this;
	}

	public function getProductsId():  ?int
	{
		return $this->products_id;
	}

	public function setProductsId(int $products_id) : self
	{
		$this->products_id = $products_id;
		return $this;
	}

	public function getIdentifier():  ?string
	{
		return $this->identifier;
	}

	public function setIdentifier(string $identifier) : self
	{
		$this->identifier = $identifier;
		return $this;
	}

	public function getExternShopsProductsId():  ?string
	{
		return $this->extern_shops_products_id;
	}

	public function setExternShopsProductsId(string $extern_shops_products_id) : self
	{
		$this->extern_shops_products_id = $extern_shops_products_id;
		return $this;
	}

	public function getExternSku():  ?string
	{
		return $this->extern_sku;
	}

	public function setExternSku(string $extern_sku) : self
	{
		$this->extern_sku = $extern_sku;
		return $this;
	}

	public function getUuid():  ?string
	{
		return $this->uuid;
	}

	public function setUuid(string $uuid) : self
	{
		$this->uuid = $uuid;
		return $this;
	}

	public function getProductsStatus():  ?string
	{
		return $this->products_status;
	}

	public function setProductsStatus(string $products_status) : self
	{
		$this->products_status = $products_status;
		return $this;
	}

	public function getOnlineStatus():  ?string
	{
		return $this->online_status;
	}

	public function setOnlineStatus(string $online_status) : self
	{
		$this->online_status = $online_status;
		return $this;
	}

	public function getFilterPassed():  ?string
	{
		return $this->filter_passed;
	}

	public function setFilterPassed(string $filter_passed) : self
	{
		$this->filter_passed = $filter_passed;
		return $this;
	}

	public function getFailedShopsFiltersId():  ?int
	{
		return $this->failed_shops_filters_id;
	}

	public function setFailedShopsFiltersId(int $failed_shops_filters_id) : self
	{
		$this->failed_shops_filters_id = $failed_shops_filters_id;
		return $this;
	}

	public function getManualAssignment():  ?string
	{
		return $this->manual_assignment;
	}

	public function setManualAssignment(string $manual_assignment) : self
	{
		$this->manual_assignment = $manual_assignment;
		return $this;
	}

	public function getHasErrors():  ?string
	{
		return $this->has_errors;
	}

	public function setHasErrors(string $has_errors) : self
	{
		$this->has_errors = $has_errors;
		return $this;
	}

	public function getHasCategoriesAssignments():  ?string
	{
		return $this->has_categories_assignments;
	}

	public function setHasCategoriesAssignments(string $has_categories_assignments) : self
	{
		$this->has_categories_assignments = $has_categories_assignments;
		return $this;
	}

	public function getToDelete():  ?string
	{
		return $this->to_delete;
	}

	public function setToDelete(string $to_delete) : self
	{
		$this->to_delete = $to_delete;
		return $this;
	}

	public function getMinPrice():  ?string
	{
		return $this->min_price;
	}

	public function setMinPrice(string $min_price) : self
	{
		$this->min_price = $min_price;
		return $this;
	}

	public function getMaxPrice():  ?string
	{
		return $this->max_price;
	}

	public function setMaxPrice(string $max_price) : self
	{
		$this->max_price = $max_price;
		return $this;
	}

	public function getMinPriceRrp():  ?string
	{
		return $this->min_price_rrp;
	}

	public function setMinPriceRrp(string $min_price_rrp) : self
	{
		$this->min_price_rrp = $min_price_rrp;
		return $this;
	}

	public function getMaxPriceRrp():  ?string
	{
		return $this->max_price_rrp;
	}

	public function setMaxPriceRrp(string $max_price_rrp) : self
	{
		$this->max_price_rrp = $max_price_rrp;
		return $this;
	}

	public function getHasPriceLocked():  ?string
	{
		return $this->has_price_locked;
	}

	public function setHasPriceLocked(string $has_price_locked) : self
	{
		$this->has_price_locked = $has_price_locked;
		return $this;
	}

	public function getInitialShopDate():  ?\DateTimeInterface
	{
		return $this->initial_shop_date;
	}

	public function setInitialShopDate(\DateTimeInterface $initial_shop_date) : self
	{
		$this->initial_shop_date = $initial_shop_date;
		return $this;
	}

	public function getShopsProductsLastUpdate():  ?\DateTimeInterface
	{
		return $this->shops_products_last_update;
	}

	public function setShopsProductsLastUpdate(\DateTimeInterface $shops_products_last_update) : self
	{
		$this->shops_products_last_update = $shops_products_last_update;
		return $this;
	}

	public function getShopsProductsVariationsLastUpdate():  ?\DateTimeInterface
	{
		return $this->shops_products_variations_last_update;
	}

	public function setShopsProductsVariationsLastUpdate(\DateTimeInterface $shops_products_variations_last_update) : self
	{
		$this->shops_products_variations_last_update = $shops_products_variations_last_update;
		return $this;
	}

	public function getStatusLastUpdate():  ?\DateTimeInterface
	{
		return $this->status_last_update;
	}

	public function setStatusLastUpdate(\DateTimeInterface $status_last_update) : self
	{
		$this->status_last_update = $status_last_update;
		return $this;
	}

	public function getPricesLastUpdate():  ?\DateTimeInterface
	{
		return $this->prices_last_update;
	}

	public function setPricesLastUpdate(\DateTimeInterface $prices_last_update) : self
	{
		$this->prices_last_update = $prices_last_update;
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