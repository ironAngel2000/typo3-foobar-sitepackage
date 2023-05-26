<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsRepository::class)]
#[ORM\Table(name: "products")]
class Products
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_products_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shipping_methods_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $tax_categories_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $cost_centre_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $groups_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $brands_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $countries_id = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $item_number = null;

	#[ORM\Column]
	private ?string $products_status = null;

	#[ORM\Column]
	private ?string $is_deleted = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $permanently_delete_after = null;

	#[ORM\Column(nullable: true)]
	private ?string $hidden = null;

	#[ORM\Column(nullable: true)]
	private ?int $products_conditions_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $conditions_comment = null;

	#[ORM\Column]
	private ?int $sort = null;

	#[ORM\Column]
	private ?string $is_bundle = null;

	#[ORM\Column(nullable: true)]
	private ?string $products_model_year = null;

	#[ORM\Column(nullable: true)]
	private ?int $text_blocks_groups_id = null;

	#[ORM\Column]
	private ?string $use_text_blocks = null;

	#[ORM\Column(nullable: true)]
	private ?string $min_price = null;

	#[ORM\Column(nullable: true)]
	private ?string $max_price = null;

	#[ORM\Column(nullable: true)]
	private ?string $min_price_rrp = null;

	#[ORM\Column(nullable: true)]
	private ?string $max_price_rrp = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $products_last_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $products_variations_last_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $status_last_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $prices_last_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $scale_prices_last_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $stock_last_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $other_last_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsId():  ?int
	{
		return $this->products_id;
	}

	public function setProductsId(int $products_id) : self
	{
		$this->products_id = $products_id;
		return $this;
	}

	public function getExternProductsId():  ?string
	{
		return $this->extern_products_id;
	}

	public function setExternProductsId(string $extern_products_id) : self
	{
		$this->extern_products_id = $extern_products_id;
		return $this;
	}

	public function getShippingMethodsId():  ?int
	{
		return $this->shipping_methods_id;
	}

	public function setShippingMethodsId(int $shipping_methods_id) : self
	{
		$this->shipping_methods_id = $shipping_methods_id;
		return $this;
	}

	public function getTaxCategoriesId():  ?int
	{
		return $this->tax_categories_id;
	}

	public function setTaxCategoriesId(int $tax_categories_id) : self
	{
		$this->tax_categories_id = $tax_categories_id;
		return $this;
	}

	public function getCostCentreId():  ?int
	{
		return $this->cost_centre_id;
	}

	public function setCostCentreId(int $cost_centre_id) : self
	{
		$this->cost_centre_id = $cost_centre_id;
		return $this;
	}

	public function getGroupsId():  ?int
	{
		return $this->groups_id;
	}

	public function setGroupsId(int $groups_id) : self
	{
		$this->groups_id = $groups_id;
		return $this;
	}

	public function getBrandsId():  ?int
	{
		return $this->brands_id;
	}

	public function setBrandsId(int $brands_id) : self
	{
		$this->brands_id = $brands_id;
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

	public function getItemNumber():  ?string
	{
		return $this->item_number;
	}

	public function setItemNumber(string $item_number) : self
	{
		$this->item_number = $item_number;
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

	public function getIsDeleted():  ?string
	{
		return $this->is_deleted;
	}

	public function setIsDeleted(string $is_deleted) : self
	{
		$this->is_deleted = $is_deleted;
		return $this;
	}

	public function getPermanentlyDeleteAfter():  ?\DateTimeInterface
	{
		return $this->permanently_delete_after;
	}

	public function setPermanentlyDeleteAfter(\DateTimeInterface $permanently_delete_after) : self
	{
		$this->permanently_delete_after = $permanently_delete_after;
		return $this;
	}

	public function getHidden():  ?string
	{
		return $this->hidden;
	}

	public function setHidden(string $hidden) : self
	{
		$this->hidden = $hidden;
		return $this;
	}

	public function getProductsConditionsId():  ?int
	{
		return $this->products_conditions_id;
	}

	public function setProductsConditionsId(int $products_conditions_id) : self
	{
		$this->products_conditions_id = $products_conditions_id;
		return $this;
	}

	public function getConditionsComment():  ?string
	{
		return $this->conditions_comment;
	}

	public function setConditionsComment(string $conditions_comment) : self
	{
		$this->conditions_comment = $conditions_comment;
		return $this;
	}

	public function getSort():  ?int
	{
		return $this->sort;
	}

	public function setSort(int $sort) : self
	{
		$this->sort = $sort;
		return $this;
	}

	public function getIsBundle():  ?string
	{
		return $this->is_bundle;
	}

	public function setIsBundle(string $is_bundle) : self
	{
		$this->is_bundle = $is_bundle;
		return $this;
	}

	public function getProductsModelYear():  ?string
	{
		return $this->products_model_year;
	}

	public function setProductsModelYear(string $products_model_year) : self
	{
		$this->products_model_year = $products_model_year;
		return $this;
	}

	public function getTextBlocksGroupsId():  ?int
	{
		return $this->text_blocks_groups_id;
	}

	public function setTextBlocksGroupsId(int $text_blocks_groups_id) : self
	{
		$this->text_blocks_groups_id = $text_blocks_groups_id;
		return $this;
	}

	public function getUseTextBlocks():  ?string
	{
		return $this->use_text_blocks;
	}

	public function setUseTextBlocks(string $use_text_blocks) : self
	{
		$this->use_text_blocks = $use_text_blocks;
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

	public function getProductsLastUpdate():  ?\DateTimeInterface
	{
		return $this->products_last_update;
	}

	public function setProductsLastUpdate(\DateTimeInterface $products_last_update) : self
	{
		$this->products_last_update = $products_last_update;
		return $this;
	}

	public function getProductsVariationsLastUpdate():  ?\DateTimeInterface
	{
		return $this->products_variations_last_update;
	}

	public function setProductsVariationsLastUpdate(\DateTimeInterface $products_variations_last_update) : self
	{
		$this->products_variations_last_update = $products_variations_last_update;
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

	public function getScalePricesLastUpdate():  ?\DateTimeInterface
	{
		return $this->scale_prices_last_update;
	}

	public function setScalePricesLastUpdate(\DateTimeInterface $scale_prices_last_update) : self
	{
		$this->scale_prices_last_update = $scale_prices_last_update;
		return $this;
	}

	public function getStockLastUpdate():  ?\DateTimeInterface
	{
		return $this->stock_last_update;
	}

	public function setStockLastUpdate(\DateTimeInterface $stock_last_update) : self
	{
		$this->stock_last_update = $stock_last_update;
		return $this;
	}

	public function getOtherLastUpdate():  ?\DateTimeInterface
	{
		return $this->other_last_update;
	}

	public function setOtherLastUpdate(\DateTimeInterface $other_last_update) : self
	{
		$this->other_last_update = $other_last_update;
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