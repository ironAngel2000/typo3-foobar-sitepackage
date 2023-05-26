<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsRepository::class)]
#[ORM\Table(name: "products_variations")]
class ProductsVariations
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $extern_products_variations_id = null;

	#[ORM\Column]
	private ?int $products_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $ean = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $isbn = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $item_number = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $manufacturers_item_num = null;

	#[ORM\Column]
	private ?string $available = null;

	#[ORM\Column]
	private ?string $products_variations_status = null;

	#[ORM\Column]
	private ?string $is_deleted = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $permanently_delete_after = null;

	#[ORM\Column(nullable: true)]
	private ?int $package_width = null;

	#[ORM\Column(nullable: true)]
	private ?int $package_height = null;

	#[ORM\Column(nullable: true)]
	private ?int $package_length = null;

	#[ORM\Column(nullable: true)]
	private ?int $package_weight = null;

	#[ORM\Column(nullable: true)]
	private ?int $width = null;

	#[ORM\Column(nullable: true)]
	private ?int $height = null;

	#[ORM\Column(nullable: true)]
	private ?int $length = null;

	#[ORM\Column(nullable: true)]
	private ?int $weight = null;

	#[ORM\Column]
	private ?string $default_quantity = null;

	#[ORM\Column]
	private ?int $minimum_order_quantity = null;

	#[ORM\Column(nullable: true)]
	private ?int $maximum_order_quantity = null;

	#[ORM\Column]
	private ?string $is_weighted = null;

	#[ORM\Column]
	private ?int $products_classification_id = null;

	#[ORM\Column]
	private ?string $third_party_stock = null;

	#[ORM\Column(nullable: true)]
	private ?int $delivery_times_id = null;

	#[ORM\Column(length: 11, nullable: true)]
	private ?string $customs_tariff_number = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $customs_tariff_text = null;

	#[ORM\Column]
	private ?string $is_bundle = null;

	#[ORM\Column]
	private ?string $is_base_price_required = null;

	#[ORM\Column(nullable: true)]
	private ?int $cloned_from_products_variations_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsId():  ?int
	{
		return $this->products_variations_id;
	}

	public function setProductsVariationsId(int $products_variations_id) : self
	{
		$this->products_variations_id = $products_variations_id;
		return $this;
	}

	public function getExternProductsVariationsId():  ?string
	{
		return $this->extern_products_variations_id;
	}

	public function setExternProductsVariationsId(string $extern_products_variations_id) : self
	{
		$this->extern_products_variations_id = $extern_products_variations_id;
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

	public function getEan():  ?string
	{
		return $this->ean;
	}

	public function setEan(string $ean) : self
	{
		$this->ean = $ean;
		return $this;
	}

	public function getIsbn():  ?string
	{
		return $this->isbn;
	}

	public function setIsbn(string $isbn) : self
	{
		$this->isbn = $isbn;
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

	public function getManufacturersItemNum():  ?string
	{
		return $this->manufacturers_item_num;
	}

	public function setManufacturersItemNum(string $manufacturers_item_num) : self
	{
		$this->manufacturers_item_num = $manufacturers_item_num;
		return $this;
	}

	public function getAvailable():  ?string
	{
		return $this->available;
	}

	public function setAvailable(string $available) : self
	{
		$this->available = $available;
		return $this;
	}

	public function getProductsVariationsStatus():  ?string
	{
		return $this->products_variations_status;
	}

	public function setProductsVariationsStatus(string $products_variations_status) : self
	{
		$this->products_variations_status = $products_variations_status;
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

	public function getPackageWidth():  ?int
	{
		return $this->package_width;
	}

	public function setPackageWidth(int $package_width) : self
	{
		$this->package_width = $package_width;
		return $this;
	}

	public function getPackageHeight():  ?int
	{
		return $this->package_height;
	}

	public function setPackageHeight(int $package_height) : self
	{
		$this->package_height = $package_height;
		return $this;
	}

	public function getPackageLength():  ?int
	{
		return $this->package_length;
	}

	public function setPackageLength(int $package_length) : self
	{
		$this->package_length = $package_length;
		return $this;
	}

	public function getPackageWeight():  ?int
	{
		return $this->package_weight;
	}

	public function setPackageWeight(int $package_weight) : self
	{
		$this->package_weight = $package_weight;
		return $this;
	}

	public function getWidth():  ?int
	{
		return $this->width;
	}

	public function setWidth(int $width) : self
	{
		$this->width = $width;
		return $this;
	}

	public function getHeight():  ?int
	{
		return $this->height;
	}

	public function setHeight(int $height) : self
	{
		$this->height = $height;
		return $this;
	}

	public function getLength():  ?int
	{
		return $this->length;
	}

	public function setLength(int $length) : self
	{
		$this->length = $length;
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

	public function getDefaultQuantity():  ?string
	{
		return $this->default_quantity;
	}

	public function setDefaultQuantity(string $default_quantity) : self
	{
		$this->default_quantity = $default_quantity;
		return $this;
	}

	public function getMinimumOrderQuantity():  ?int
	{
		return $this->minimum_order_quantity;
	}

	public function setMinimumOrderQuantity(int $minimum_order_quantity) : self
	{
		$this->minimum_order_quantity = $minimum_order_quantity;
		return $this;
	}

	public function getMaximumOrderQuantity():  ?int
	{
		return $this->maximum_order_quantity;
	}

	public function setMaximumOrderQuantity(int $maximum_order_quantity) : self
	{
		$this->maximum_order_quantity = $maximum_order_quantity;
		return $this;
	}

	public function getIsWeighted():  ?string
	{
		return $this->is_weighted;
	}

	public function setIsWeighted(string $is_weighted) : self
	{
		$this->is_weighted = $is_weighted;
		return $this;
	}

	public function getProductsClassificationId():  ?int
	{
		return $this->products_classification_id;
	}

	public function setProductsClassificationId(int $products_classification_id) : self
	{
		$this->products_classification_id = $products_classification_id;
		return $this;
	}

	public function getThirdPartyStock():  ?string
	{
		return $this->third_party_stock;
	}

	public function setThirdPartyStock(string $third_party_stock) : self
	{
		$this->third_party_stock = $third_party_stock;
		return $this;
	}

	public function getDeliveryTimesId():  ?int
	{
		return $this->delivery_times_id;
	}

	public function setDeliveryTimesId(int $delivery_times_id) : self
	{
		$this->delivery_times_id = $delivery_times_id;
		return $this;
	}

	public function getCustomsTariffNumber():  ?string
	{
		return $this->customs_tariff_number;
	}

	public function setCustomsTariffNumber(string $customs_tariff_number) : self
	{
		$this->customs_tariff_number = $customs_tariff_number;
		return $this;
	}

	public function getCustomsTariffText():  ?string
	{
		return $this->customs_tariff_text;
	}

	public function setCustomsTariffText(string $customs_tariff_text) : self
	{
		$this->customs_tariff_text = $customs_tariff_text;
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

	public function getIsBasePriceRequired():  ?string
	{
		return $this->is_base_price_required;
	}

	public function setIsBasePriceRequired(string $is_base_price_required) : self
	{
		$this->is_base_price_required = $is_base_price_required;
		return $this;
	}

	public function getClonedFromProductsVariationsId():  ?int
	{
		return $this->cloned_from_products_variations_id;
	}

	public function setClonedFromProductsVariationsId(int $cloned_from_products_variations_id) : self
	{
		$this->cloned_from_products_variations_id = $cloned_from_products_variations_id;
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