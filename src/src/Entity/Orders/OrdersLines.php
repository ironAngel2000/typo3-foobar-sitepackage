<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersLinesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersLinesRepository::class)]
#[ORM\Table(name: "orders_lines")]
class OrdersLines
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_lines_id = null;

	#[ORM\Column(length: 128, nullable: true)]
	private ?string $shops_orders_lines_id = null;

	#[ORM\Column]
	private ?int $orders_id = null;

	#[ORM\Column]
	private ?int $orders_status_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $orders_status_changed = null;

	#[ORM\Column]
	private ?int $products_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $products_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_variations_name = null;

	#[ORM\Column]
	private ?int $quantity_ordered = null;

	#[ORM\Column]
	private ?string $price = null;

	#[ORM\Column(nullable: true)]
	private ?string $base_price = null;

	#[ORM\Column(nullable: true)]
	private ?string $base_price_backend = null;

	#[ORM\Column(nullable: true)]
	private ?string $order_price = null;

	#[ORM\Column(nullable: true)]
	private ?string $order_price_backend = null;

	#[ORM\Column(nullable: true)]
	private ?string $selling_price = null;

	#[ORM\Column(nullable: true)]
	private ?string $rebated_price = null;

	#[ORM\Column(nullable: true)]
	private ?string $rebated_price_backend = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $price_unit = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $base_unit = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $order_unit = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $selling_unit = null;

	#[ORM\Column(nullable: true)]
	private ?string $price_backend = null;

	#[ORM\Column]
	private ?string $price_commission = null;

	#[ORM\Column]
	private ?string $pledge = null;

	#[ORM\Column]
	private ?string $pledge_backend = null;

	#[ORM\Column(nullable: true)]
	private ?string $shipping_costs = null;

	#[ORM\Column(nullable: true)]
	private ?string $shipping_costs_backend = null;

	#[ORM\Column]
	private ?string $is_weighted = null;

	#[ORM\Column]
	private ?string $tax_rate = null;

	#[ORM\Column(nullable: true)]
	private ?int $suppliers_id = null;

	#[ORM\Column]
	private ?int $quantity_cancelled = null;

	#[ORM\Column]
	private ?int $quantity_shipped = null;

	#[ORM\Column]
	private ?int $quantity_returned = null;

	#[ORM\Column(nullable: true)]
	private ?int $merged_orders_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $replaced_orders_lines_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $is_bundle = null;

	#[ORM\Column(nullable: true)]
	private ?int $bundles_orders_lines_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersLinesId():  ?int
	{
		return $this->orders_lines_id;
	}

	public function setOrdersLinesId(int $orders_lines_id) : self
	{
		$this->orders_lines_id = $orders_lines_id;
		return $this;
	}

	public function getShopsOrdersLinesId():  ?string
	{
		return $this->shops_orders_lines_id;
	}

	public function setShopsOrdersLinesId(string $shops_orders_lines_id) : self
	{
		$this->shops_orders_lines_id = $shops_orders_lines_id;
		return $this;
	}

	public function getOrdersId():  ?int
	{
		return $this->orders_id;
	}

	public function setOrdersId(int $orders_id) : self
	{
		$this->orders_id = $orders_id;
		return $this;
	}

	public function getOrdersStatusId():  ?int
	{
		return $this->orders_status_id;
	}

	public function setOrdersStatusId(int $orders_status_id) : self
	{
		$this->orders_status_id = $orders_status_id;
		return $this;
	}

	public function getOrdersStatusChanged():  ?\DateTimeInterface
	{
		return $this->orders_status_changed;
	}

	public function setOrdersStatusChanged(\DateTimeInterface $orders_status_changed) : self
	{
		$this->orders_status_changed = $orders_status_changed;
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

	public function getProductsVariationsId():  ?int
	{
		return $this->products_variations_id;
	}

	public function setProductsVariationsId(int $products_variations_id) : self
	{
		$this->products_variations_id = $products_variations_id;
		return $this;
	}

	public function getProductsName():  ?string
	{
		return $this->products_name;
	}

	public function setProductsName(string $products_name) : self
	{
		$this->products_name = $products_name;
		return $this;
	}

	public function getProductsVariationsName():  ?string
	{
		return $this->products_variations_name;
	}

	public function setProductsVariationsName(string $products_variations_name) : self
	{
		$this->products_variations_name = $products_variations_name;
		return $this;
	}

	public function getQuantityOrdered():  ?int
	{
		return $this->quantity_ordered;
	}

	public function setQuantityOrdered(int $quantity_ordered) : self
	{
		$this->quantity_ordered = $quantity_ordered;
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

	public function getBasePrice():  ?string
	{
		return $this->base_price;
	}

	public function setBasePrice(string $base_price) : self
	{
		$this->base_price = $base_price;
		return $this;
	}

	public function getBasePriceBackend():  ?string
	{
		return $this->base_price_backend;
	}

	public function setBasePriceBackend(string $base_price_backend) : self
	{
		$this->base_price_backend = $base_price_backend;
		return $this;
	}

	public function getOrderPrice():  ?string
	{
		return $this->order_price;
	}

	public function setOrderPrice(string $order_price) : self
	{
		$this->order_price = $order_price;
		return $this;
	}

	public function getOrderPriceBackend():  ?string
	{
		return $this->order_price_backend;
	}

	public function setOrderPriceBackend(string $order_price_backend) : self
	{
		$this->order_price_backend = $order_price_backend;
		return $this;
	}

	public function getSellingPrice():  ?string
	{
		return $this->selling_price;
	}

	public function setSellingPrice(string $selling_price) : self
	{
		$this->selling_price = $selling_price;
		return $this;
	}

	public function getRebatedPrice():  ?string
	{
		return $this->rebated_price;
	}

	public function setRebatedPrice(string $rebated_price) : self
	{
		$this->rebated_price = $rebated_price;
		return $this;
	}

	public function getRebatedPriceBackend():  ?string
	{
		return $this->rebated_price_backend;
	}

	public function setRebatedPriceBackend(string $rebated_price_backend) : self
	{
		$this->rebated_price_backend = $rebated_price_backend;
		return $this;
	}

	public function getPriceUnit():  ?string
	{
		return $this->price_unit;
	}

	public function setPriceUnit(string $price_unit) : self
	{
		$this->price_unit = $price_unit;
		return $this;
	}

	public function getBaseUnit():  ?string
	{
		return $this->base_unit;
	}

	public function setBaseUnit(string $base_unit) : self
	{
		$this->base_unit = $base_unit;
		return $this;
	}

	public function getOrderUnit():  ?string
	{
		return $this->order_unit;
	}

	public function setOrderUnit(string $order_unit) : self
	{
		$this->order_unit = $order_unit;
		return $this;
	}

	public function getSellingUnit():  ?string
	{
		return $this->selling_unit;
	}

	public function setSellingUnit(string $selling_unit) : self
	{
		$this->selling_unit = $selling_unit;
		return $this;
	}

	public function getPriceBackend():  ?string
	{
		return $this->price_backend;
	}

	public function setPriceBackend(string $price_backend) : self
	{
		$this->price_backend = $price_backend;
		return $this;
	}

	public function getPriceCommission():  ?string
	{
		return $this->price_commission;
	}

	public function setPriceCommission(string $price_commission) : self
	{
		$this->price_commission = $price_commission;
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

	public function getPledgeBackend():  ?string
	{
		return $this->pledge_backend;
	}

	public function setPledgeBackend(string $pledge_backend) : self
	{
		$this->pledge_backend = $pledge_backend;
		return $this;
	}

	public function getShippingCosts():  ?string
	{
		return $this->shipping_costs;
	}

	public function setShippingCosts(string $shipping_costs) : self
	{
		$this->shipping_costs = $shipping_costs;
		return $this;
	}

	public function getShippingCostsBackend():  ?string
	{
		return $this->shipping_costs_backend;
	}

	public function setShippingCostsBackend(string $shipping_costs_backend) : self
	{
		$this->shipping_costs_backend = $shipping_costs_backend;
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

	public function getTaxRate():  ?string
	{
		return $this->tax_rate;
	}

	public function setTaxRate(string $tax_rate) : self
	{
		$this->tax_rate = $tax_rate;
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

	public function getQuantityCancelled():  ?int
	{
		return $this->quantity_cancelled;
	}

	public function setQuantityCancelled(int $quantity_cancelled) : self
	{
		$this->quantity_cancelled = $quantity_cancelled;
		return $this;
	}

	public function getQuantityShipped():  ?int
	{
		return $this->quantity_shipped;
	}

	public function setQuantityShipped(int $quantity_shipped) : self
	{
		$this->quantity_shipped = $quantity_shipped;
		return $this;
	}

	public function getQuantityReturned():  ?int
	{
		return $this->quantity_returned;
	}

	public function setQuantityReturned(int $quantity_returned) : self
	{
		$this->quantity_returned = $quantity_returned;
		return $this;
	}

	public function getMergedOrdersId():  ?int
	{
		return $this->merged_orders_id;
	}

	public function setMergedOrdersId(int $merged_orders_id) : self
	{
		$this->merged_orders_id = $merged_orders_id;
		return $this;
	}

	public function getReplacedOrdersLinesId():  ?int
	{
		return $this->replaced_orders_lines_id;
	}

	public function setReplacedOrdersLinesId(int $replaced_orders_lines_id) : self
	{
		$this->replaced_orders_lines_id = $replaced_orders_lines_id;
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

	public function getBundlesOrdersLinesId():  ?int
	{
		return $this->bundles_orders_lines_id;
	}

	public function setBundlesOrdersLinesId(int $bundles_orders_lines_id) : self
	{
		$this->bundles_orders_lines_id = $bundles_orders_lines_id;
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