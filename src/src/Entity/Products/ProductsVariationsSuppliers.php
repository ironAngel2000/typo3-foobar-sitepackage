<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsSuppliersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsSuppliersRepository::class)]
#[ORM\Table(name: "products_variations_suppliers")]
class ProductsVariationsSuppliers
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_suppliers_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	#[ORM\Column]
	private ?int $suppliers_id = null;

	#[ORM\Column]
	private ?int $main_supplier = null;

	#[ORM\Column(nullable: true)]
	private ?float $purchase_price = null;

	#[ORM\Column(nullable: true)]
	private ?float $purchase_price_individual = null;

	#[ORM\Column]
	private ?int $purchase_price_individual_active = null;

	#[ORM\Column(nullable: true)]
	private ?int $purchase_price_currencies_id = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $suppliers_item_num = null;

	 #[ORM\Column(length: 255)]
	private ?string $suppliers_item_name = null;

	#[ORM\Column]
	private ?int $suppliers_available = null;

	#[ORM\Column]
	private ?int $suppliers_locked = null;

	#[ORM\Column]
	private ?int $minimum_order_quantity = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsSuppliersId():  ?int
	{
		return $this->products_variations_suppliers_id;
	}

	public function setProductsVariationsSuppliersId(int $products_variations_suppliers_id) : self
	{
		$this->products_variations_suppliers_id = $products_variations_suppliers_id;
		return $this;
	}

	public function getProductsVariationsId():  ?int
	{
		return $this->products_variations_id;
	}

	public function setProductsVariationsId(int $products_variations_id) : self
	{
		$this->products_variations_id = $products_variations_id;
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

	public function getMainSupplier():  ?int
	{
		return $this->main_supplier;
	}

	public function setMainSupplier(int $main_supplier) : self
	{
		$this->main_supplier = $main_supplier;
		return $this;
	}

	public function getPurchasePrice():  ?float
	{
		return $this->purchase_price;
	}

	public function setPurchasePrice(float $purchase_price) : self
	{
		$this->purchase_price = $purchase_price;
		return $this;
	}

	public function getPurchasePriceIndividual():  ?float
	{
		return $this->purchase_price_individual;
	}

	public function setPurchasePriceIndividual(float $purchase_price_individual) : self
	{
		$this->purchase_price_individual = $purchase_price_individual;
		return $this;
	}

	public function getPurchasePriceIndividualActive():  ?int
	{
		return $this->purchase_price_individual_active;
	}

	public function setPurchasePriceIndividualActive(int $purchase_price_individual_active) : self
	{
		$this->purchase_price_individual_active = $purchase_price_individual_active;
		return $this;
	}

	public function getPurchasePriceCurrenciesId():  ?int
	{
		return $this->purchase_price_currencies_id;
	}

	public function setPurchasePriceCurrenciesId(int $purchase_price_currencies_id) : self
	{
		$this->purchase_price_currencies_id = $purchase_price_currencies_id;
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

	public function getSuppliersItemName():  ?string
	{
		return $this->suppliers_item_name;
	}

	public function setSuppliersItemName(string $suppliers_item_name) : self
	{
		$this->suppliers_item_name = $suppliers_item_name;
		return $this;
	}

	public function getSuppliersAvailable():  ?int
	{
		return $this->suppliers_available;
	}

	public function setSuppliersAvailable(int $suppliers_available) : self
	{
		$this->suppliers_available = $suppliers_available;
		return $this;
	}

	public function getSuppliersLocked():  ?int
	{
		return $this->suppliers_locked;
	}

	public function setSuppliersLocked(int $suppliers_locked) : self
	{
		$this->suppliers_locked = $suppliers_locked;
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