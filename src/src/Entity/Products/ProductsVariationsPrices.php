<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsPricesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsPricesRepository::class)]
#[ORM\Table(name: "products_variations_prices")]
class ProductsVariationsPrices
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_prices_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	#[ORM\Column]
	private ?int $currencies_id = null;

	#[ORM\Column]
	private ?string $is_net = null;

	#[ORM\Column(nullable: true)]
	private ?string $price = null;

	#[ORM\Column(nullable: true)]
	private ?string $price_rrp = null;

	#[ORM\Column(nullable: true)]
	private ?string $price_quantity = null;

	#[ORM\Column(nullable: true)]
	private ?string $price_base_quantity = null;

	#[ORM\Column(nullable: true)]
	private ?string $content_quantity = null;

	#[ORM\Column(nullable: true)]
	private ?string $order_quantity = null;

	#[ORM\Column(nullable: true)]
	private ?string $price_rrp_quantity = null;

	#[ORM\Column(nullable: true)]
	private ?int $price_units_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $price_rrp_units_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $price_base_units_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $content_units_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $order_units_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $price_premium = null;

	#[ORM\Column]
	private ?string $special_price_status = null;

	#[ORM\Column(nullable: true)]
	private ?string $special_price = null;

	#[ORM\Column(nullable: true)]
	private ?int $special_price_stock_threshold = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $special_price_start = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $special_price_end = null;

	#[ORM\Column(nullable: true)]
	private ?int $order = null;

	#[ORM\Column(nullable: true)]
	private ?string $pledge = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsPricesId():  ?int
	{
		return $this->products_variations_prices_id;
	}

	public function setProductsVariationsPricesId(int $products_variations_prices_id) : self
	{
		$this->products_variations_prices_id = $products_variations_prices_id;
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

	public function getCurrenciesId():  ?int
	{
		return $this->currencies_id;
	}

	public function setCurrenciesId(int $currencies_id) : self
	{
		$this->currencies_id = $currencies_id;
		return $this;
	}

	public function getIsNet():  ?string
	{
		return $this->is_net;
	}

	public function setIsNet(string $is_net) : self
	{
		$this->is_net = $is_net;
		return $this;
	}

	public function getPrice():  ?string
	{
		return $this->price;
	}

	public function setPrice(string $price) : self
	{
		$this->price = $price;
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

	public function getPriceQuantity():  ?string
	{
		return $this->price_quantity;
	}

	public function setPriceQuantity(string $price_quantity) : self
	{
		$this->price_quantity = $price_quantity;
		return $this;
	}

	public function getPriceBaseQuantity():  ?string
	{
		return $this->price_base_quantity;
	}

	public function setPriceBaseQuantity(string $price_base_quantity) : self
	{
		$this->price_base_quantity = $price_base_quantity;
		return $this;
	}

	public function getContentQuantity():  ?string
	{
		return $this->content_quantity;
	}

	public function setContentQuantity(string $content_quantity) : self
	{
		$this->content_quantity = $content_quantity;
		return $this;
	}

	public function getOrderQuantity():  ?string
	{
		return $this->order_quantity;
	}

	public function setOrderQuantity(string $order_quantity) : self
	{
		$this->order_quantity = $order_quantity;
		return $this;
	}

	public function getPriceRrpQuantity():  ?string
	{
		return $this->price_rrp_quantity;
	}

	public function setPriceRrpQuantity(string $price_rrp_quantity) : self
	{
		$this->price_rrp_quantity = $price_rrp_quantity;
		return $this;
	}

	public function getPriceUnitsId():  ?int
	{
		return $this->price_units_id;
	}

	public function setPriceUnitsId(int $price_units_id) : self
	{
		$this->price_units_id = $price_units_id;
		return $this;
	}

	public function getPriceRrpUnitsId():  ?int
	{
		return $this->price_rrp_units_id;
	}

	public function setPriceRrpUnitsId(int $price_rrp_units_id) : self
	{
		$this->price_rrp_units_id = $price_rrp_units_id;
		return $this;
	}

	public function getPriceBaseUnitsId():  ?int
	{
		return $this->price_base_units_id;
	}

	public function setPriceBaseUnitsId(int $price_base_units_id) : self
	{
		$this->price_base_units_id = $price_base_units_id;
		return $this;
	}

	public function getContentUnitsId():  ?int
	{
		return $this->content_units_id;
	}

	public function setContentUnitsId(int $content_units_id) : self
	{
		$this->content_units_id = $content_units_id;
		return $this;
	}

	public function getOrderUnitsId():  ?int
	{
		return $this->order_units_id;
	}

	public function setOrderUnitsId(int $order_units_id) : self
	{
		$this->order_units_id = $order_units_id;
		return $this;
	}

	public function getPricePremium():  ?string
	{
		return $this->price_premium;
	}

	public function setPricePremium(string $price_premium) : self
	{
		$this->price_premium = $price_premium;
		return $this;
	}

	public function getSpecialPriceStatus():  ?string
	{
		return $this->special_price_status;
	}

	public function setSpecialPriceStatus(string $special_price_status) : self
	{
		$this->special_price_status = $special_price_status;
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

	public function getSpecialPriceStockThreshold():  ?int
	{
		return $this->special_price_stock_threshold;
	}

	public function setSpecialPriceStockThreshold(int $special_price_stock_threshold) : self
	{
		$this->special_price_stock_threshold = $special_price_stock_threshold;
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

	public function getOrder():  ?int
	{
		return $this->order;
	}

	public function setOrder(int $order) : self
	{
		$this->order = $order;
		return $this;
	}

	public function getPledge():  ?string
	{
		return $this->pledge;
	}

	public function setPledge(string $pledge) : self
	{
		$this->pledge = $pledge;
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