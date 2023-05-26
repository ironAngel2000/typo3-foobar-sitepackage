<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersCatalogsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersCatalogsRepository::class)]
#[ORM\Table(name: "suppliers_catalogs")]
class SuppliersCatalogs
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_catalogs_id = null;

	#[ORM\Column]
	private ?int $suppliers_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $products_variations_suppliers_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $suppliers_item_num = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $suppliers_identification_num = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $suppliers_price_groups_code = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $tax_code = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $brands_code = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $manufacturers_code = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $manufacturers_item_num = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $manufacturers_url = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $manufacturing_countries_code = null;

	#[ORM\Column(length: 4, nullable: true)]
	private ?string $model_year = null;

	#[ORM\Column(nullable: true)]
	private ?string $price_rrp = null;

	#[ORM\Column(nullable: true)]
	private ?string $price_gross = null;

	#[ORM\Column(nullable: true)]
	private ?string $suppliers_price = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $suppliers_price_currency_code = null;

	#[ORM\Column(nullable: true)]
	private ?string $reduction1 = null;

	#[ORM\Column(nullable: true)]
	private ?string $reduction2 = null;

	#[ORM\Column(nullable: true)]
	private ?string $reduction3 = null;

	#[ORM\Column(nullable: true)]
	private ?string $reduction4 = null;

	#[ORM\Column(nullable: true)]
	private ?string $ean = null;

	#[ORM\Column(nullable: true)]
	private ?string $commodity_code = null;

	#[ORM\Column(nullable: true)]
	private ?string $commodity_code_ch = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $product_url = null;

	#[ORM\Column(nullable: true)]
	private ?int $weight = null;

	#[ORM\Column(nullable: true)]
	private ?int $packaging_width = null;

	#[ORM\Column(nullable: true)]
	private ?int $packaging_height = null;

	#[ORM\Column(nullable: true)]
	private ?int $packaging_length = null;

	#[ORM\Column(nullable: true)]
	private ?int $packaging_weight = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $packaging_units_code = null;

	#[ORM\Column(nullable: true)]
	private ?int $packaging_unit_width = null;

	#[ORM\Column(nullable: true)]
	private ?int $packaging_unit_height = null;

	#[ORM\Column(nullable: true)]
	private ?int $packaging_unit_length = null;

	#[ORM\Column(nullable: true)]
	private ?int $packaging_unit_weight = null;

	#[ORM\Column(nullable: true)]
	private ?int $units_per_packaging_unit = null;

	#[ORM\Column(nullable: true)]
	private ?int $available_quantity = null;

	#[ORM\Column(nullable: true)]
	private ?string $suppliers_availability_status_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $availability_date = null;

	#[ORM\Column(nullable: true)]
	private ?string $product_deleted = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $product_deleted_date = null;

	#[ORM\Column]
	private ?string $force_price_calculation = null;

	#[ORM\Column]
	private ?string $hidden = null;

	#[ORM\Column]
	private ?string $image_exist = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $image_update_date_changed = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_product_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_product_update_changed = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_stock_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_stock_update_changed = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column]
	private ?int $last_updater = null;

	public function getSuppliersCatalogsId():  ?int
	{
		return $this->suppliers_catalogs_id;
	}

	public function setSuppliersCatalogsId(int $suppliers_catalogs_id) : self
	{
		$this->suppliers_catalogs_id = $suppliers_catalogs_id;
		return $this;
	}

	public function getSuppliersId():  ?int
	{
		return $this->suppliers_id;
	}

	public function setSuppliersId(int $suppliers_id) : self
	{
		$this->suppliers_id = $suppliers_id;
		return $this;
	}

	public function getProductsVariationsSuppliersId():  ?int
	{
		return $this->products_variations_suppliers_id;
	}

	public function setProductsVariationsSuppliersId(int $products_variations_suppliers_id) : self
	{
		$this->products_variations_suppliers_id = $products_variations_suppliers_id;
		return $this;
	}

	public function getSuppliersItemNum():  ?string
	{
		return $this->suppliers_item_num;
	}

	public function setSuppliersItemNum(string $suppliers_item_num) : self
	{
		$this->suppliers_item_num = $suppliers_item_num;
		return $this;
	}

	public function getSuppliersIdentificationNum():  ?string
	{
		return $this->suppliers_identification_num;
	}

	public function setSuppliersIdentificationNum(string $suppliers_identification_num) : self
	{
		$this->suppliers_identification_num = $suppliers_identification_num;
		return $this;
	}

	public function getSuppliersPriceGroupsCode():  ?string
	{
		return $this->suppliers_price_groups_code;
	}

	public function setSuppliersPriceGroupsCode(string $suppliers_price_groups_code) : self
	{
		$this->suppliers_price_groups_code = $suppliers_price_groups_code;
		return $this;
	}

	public function getTaxCode():  ?string
	{
		return $this->tax_code;
	}

	public function setTaxCode(string $tax_code) : self
	{
		$this->tax_code = $tax_code;
		return $this;
	}

	public function getBrandsCode():  ?string
	{
		return $this->brands_code;
	}

	public function setBrandsCode(string $brands_code) : self
	{
		$this->brands_code = $brands_code;
		return $this;
	}

	public function getManufacturersCode():  ?string
	{
		return $this->manufacturers_code;
	}

	public function setManufacturersCode(string $manufacturers_code) : self
	{
		$this->manufacturers_code = $manufacturers_code;
		return $this;
	}

	public function getManufacturersItemNum():  ?string
	{
		return $this->manufacturers_item_num;
	}

	public function setManufacturersItemNum(string $manufacturers_item_num) : self
	{
		$this->manufacturers_item_num = $manufacturers_item_num;
		return $this;
	}

	public function getManufacturersUrl():  ?string
	{
		return $this->manufacturers_url;
	}

	public function setManufacturersUrl(string $manufacturers_url) : self
	{
		$this->manufacturers_url = $manufacturers_url;
		return $this;
	}

	public function getManufacturingCountriesCode():  ?string
	{
		return $this->manufacturing_countries_code;
	}

	public function setManufacturingCountriesCode(string $manufacturing_countries_code) : self
	{
		$this->manufacturing_countries_code = $manufacturing_countries_code;
		return $this;
	}

	public function getModelYear():  ?string
	{
		return $this->model_year;
	}

	public function setModelYear(string $model_year) : self
	{
		$this->model_year = $model_year;
		return $this;
	}

	public function getPriceRrp():  ?string
	{
		return $this->price_rrp;
	}

	public function setPriceRrp(string $price_rrp) : self
	{
		$this->price_rrp = $price_rrp;
		return $this;
	}

	public function getPriceGross():  ?string
	{
		return $this->price_gross;
	}

	public function setPriceGross(string $price_gross) : self
	{
		$this->price_gross = $price_gross;
		return $this;
	}

	public function getSuppliersPrice():  ?string
	{
		return $this->suppliers_price;
	}

	public function setSuppliersPrice(string $suppliers_price) : self
	{
		$this->suppliers_price = $suppliers_price;
		return $this;
	}

	public function getSuppliersPriceCurrencyCode():  ?string
	{
		return $this->suppliers_price_currency_code;
	}

	public function setSuppliersPriceCurrencyCode(string $suppliers_price_currency_code) : self
	{
		$this->suppliers_price_currency_code = $suppliers_price_currency_code;
		return $this;
	}

	public function getReduction1():  ?string
	{
		return $this->reduction1;
	}

	public function setReduction1(string $reduction1) : self
	{
		$this->reduction1 = $reduction1;
		return $this;
	}

	public function getReduction2():  ?string
	{
		return $this->reduction2;
	}

	public function setReduction2(string $reduction2) : self
	{
		$this->reduction2 = $reduction2;
		return $this;
	}

	public function getReduction3():  ?string
	{
		return $this->reduction3;
	}

	public function setReduction3(string $reduction3) : self
	{
		$this->reduction3 = $reduction3;
		return $this;
	}

	public function getReduction4():  ?string
	{
		return $this->reduction4;
	}

	public function setReduction4(string $reduction4) : self
	{
		$this->reduction4 = $reduction4;
		return $this;
	}

	public function getEan():  ?string
	{
		return $this->ean;
	}

	public function setEan(string $ean) : self
	{
		$this->ean = $ean;
		return $this;
	}

	public function getCommodityCode():  ?string
	{
		return $this->commodity_code;
	}

	public function setCommodityCode(string $commodity_code) : self
	{
		$this->commodity_code = $commodity_code;
		return $this;
	}

	public function getCommodityCodeCh():  ?string
	{
		return $this->commodity_code_ch;
	}

	public function setCommodityCodeCh(string $commodity_code_ch) : self
	{
		$this->commodity_code_ch = $commodity_code_ch;
		return $this;
	}

	public function getProductUrl():  ?string
	{
		return $this->product_url;
	}

	public function setProductUrl(string $product_url) : self
	{
		$this->product_url = $product_url;
		return $this;
	}

	public function getWeight():  ?int
	{
		return $this->weight;
	}

	public function setWeight(int $weight) : self
	{
		$this->weight = $weight;
		return $this;
	}

	public function getPackagingWidth():  ?int
	{
		return $this->packaging_width;
	}

	public function setPackagingWidth(int $packaging_width) : self
	{
		$this->packaging_width = $packaging_width;
		return $this;
	}

	public function getPackagingHeight():  ?int
	{
		return $this->packaging_height;
	}

	public function setPackagingHeight(int $packaging_height) : self
	{
		$this->packaging_height = $packaging_height;
		return $this;
	}

	public function getPackagingLength():  ?int
	{
		return $this->packaging_length;
	}

	public function setPackagingLength(int $packaging_length) : self
	{
		$this->packaging_length = $packaging_length;
		return $this;
	}

	public function getPackagingWeight():  ?int
	{
		return $this->packaging_weight;
	}

	public function setPackagingWeight(int $packaging_weight) : self
	{
		$this->packaging_weight = $packaging_weight;
		return $this;
	}

	public function getPackagingUnitsCode():  ?string
	{
		return $this->packaging_units_code;
	}

	public function setPackagingUnitsCode(string $packaging_units_code) : self
	{
		$this->packaging_units_code = $packaging_units_code;
		return $this;
	}

	public function getPackagingUnitWidth():  ?int
	{
		return $this->packaging_unit_width;
	}

	public function setPackagingUnitWidth(int $packaging_unit_width) : self
	{
		$this->packaging_unit_width = $packaging_unit_width;
		return $this;
	}

	public function getPackagingUnitHeight():  ?int
	{
		return $this->packaging_unit_height;
	}

	public function setPackagingUnitHeight(int $packaging_unit_height) : self
	{
		$this->packaging_unit_height = $packaging_unit_height;
		return $this;
	}

	public function getPackagingUnitLength():  ?int
	{
		return $this->packaging_unit_length;
	}

	public function setPackagingUnitLength(int $packaging_unit_length) : self
	{
		$this->packaging_unit_length = $packaging_unit_length;
		return $this;
	}

	public function getPackagingUnitWeight():  ?int
	{
		return $this->packaging_unit_weight;
	}

	public function setPackagingUnitWeight(int $packaging_unit_weight) : self
	{
		$this->packaging_unit_weight = $packaging_unit_weight;
		return $this;
	}

	public function getUnitsPerPackagingUnit():  ?int
	{
		return $this->units_per_packaging_unit;
	}

	public function setUnitsPerPackagingUnit(int $units_per_packaging_unit) : self
	{
		$this->units_per_packaging_unit = $units_per_packaging_unit;
		return $this;
	}

	public function getAvailableQuantity():  ?int
	{
		return $this->available_quantity;
	}

	public function setAvailableQuantity(int $available_quantity) : self
	{
		$this->available_quantity = $available_quantity;
		return $this;
	}

	public function getSuppliersAvailabilityStatusId():  ?string
	{
		return $this->suppliers_availability_status_id;
	}

	public function setSuppliersAvailabilityStatusId(string $suppliers_availability_status_id) : self
	{
		$this->suppliers_availability_status_id = $suppliers_availability_status_id;
		return $this;
	}

	public function getAvailabilityDate():  ?\DateTimeInterface
	{
		return $this->availability_date;
	}

	public function setAvailabilityDate(\DateTimeInterface $availability_date) : self
	{
		$this->availability_date = $availability_date;
		return $this;
	}

	public function getProductDeleted():  ?string
	{
		return $this->product_deleted;
	}

	public function setProductDeleted(string $product_deleted) : self
	{
		$this->product_deleted = $product_deleted;
		return $this;
	}

	public function getProductDeletedDate():  ?\DateTimeInterface
	{
		return $this->product_deleted_date;
	}

	public function setProductDeletedDate(\DateTimeInterface $product_deleted_date) : self
	{
		$this->product_deleted_date = $product_deleted_date;
		return $this;
	}

	public function getForcePriceCalculation():  ?string
	{
		return $this->force_price_calculation;
	}

	public function setForcePriceCalculation(string $force_price_calculation) : self
	{
		$this->force_price_calculation = $force_price_calculation;
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

	public function getImageExist():  ?string
	{
		return $this->image_exist;
	}

	public function setImageExist(string $image_exist) : self
	{
		$this->image_exist = $image_exist;
		return $this;
	}

	public function getImageUpdateDateChanged():  ?\DateTimeInterface
	{
		return $this->image_update_date_changed;
	}

	public function setImageUpdateDateChanged(\DateTimeInterface $image_update_date_changed) : self
	{
		$this->image_update_date_changed = $image_update_date_changed;
		return $this;
	}

	public function getLastProductUpdate():  ?\DateTimeInterface
	{
		return $this->last_product_update;
	}

	public function setLastProductUpdate(\DateTimeInterface $last_product_update) : self
	{
		$this->last_product_update = $last_product_update;
		return $this;
	}

	public function getLastProductUpdateChanged():  ?\DateTimeInterface
	{
		return $this->last_product_update_changed;
	}

	public function setLastProductUpdateChanged(\DateTimeInterface $last_product_update_changed) : self
	{
		$this->last_product_update_changed = $last_product_update_changed;
		return $this;
	}

	public function getLastStockUpdate():  ?\DateTimeInterface
	{
		return $this->last_stock_update;
	}

	public function setLastStockUpdate(\DateTimeInterface $last_stock_update) : self
	{
		$this->last_stock_update = $last_stock_update;
		return $this;
	}

	public function getLastStockUpdateChanged():  ?\DateTimeInterface
	{
		return $this->last_stock_update_changed;
	}

	public function setLastStockUpdateChanged(\DateTimeInterface $last_stock_update_changed) : self
	{
		$this->last_stock_update_changed = $last_stock_update_changed;
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