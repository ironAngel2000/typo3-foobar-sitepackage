<?php

namespace App\Entity\Controlling;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Controlling\ControllingOrdersLinesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ControllingOrdersLinesRepository::class)]
#[ORM\Table(name: "controlling_orders_lines")]
class ControllingOrdersLines
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $controlling_orders_lines_id = null;

	#[ORM\Column]
	private ?int $orders_lines_id = null;

	#[ORM\Column]
	private ?int $orders_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $brands_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $transaction_date = null;

	#[ORM\Column(nullable: true)]
	private ?int $groups_id = null;

	#[ORM\Column]
	private ?int $products_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $coupons_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $products_variations_ean = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $products_date_insert = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $products_item_number = null;

	#[ORM\Column]
	private ?int $quantity_ordered = null;

	#[ORM\Column]
	private ?int $quantity_cancelled = null;

	#[ORM\Column]
	private ?int $quantity_shipped = null;

	#[ORM\Column]
	private ?int $quantity_returned = null;

	#[ORM\Column]
	private ?int $sales_volume = null;

	#[ORM\Column]
	private ?string $value_ordered = null;

	#[ORM\Column]
	private ?string $value_cancelled = null;

	#[ORM\Column]
	private ?string $value_shipped = null;

	#[ORM\Column]
	private ?string $value_returned = null;

	#[ORM\Column]
	private ?string $value_ordered_gross = null;

	#[ORM\Column]
	private ?string $value_cancelled_gross = null;

	#[ORM\Column]
	private ?string $value_shipped_gross = null;

	#[ORM\Column]
	private ?string $value_returned_gross = null;

	#[ORM\Column]
	private ?string $purchase_value = null;

	#[ORM\Column]
	private ?string $gross_profit = null;

	#[ORM\Column]
	private ?string $turnover = null;

	#[ORM\Column]
	private ?string $turnover_gross = null;

	#[ORM\Column(nullable: true)]
	private ?string $products_variations_diffs_options_values_ids = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getControllingOrdersLinesId():  ?int
	{
		return $this->controlling_orders_lines_id;
	}

	public function setControllingOrdersLinesId(int $controlling_orders_lines_id) : self
	{
		$this->controlling_orders_lines_id = $controlling_orders_lines_id;
		return $this;
	}

	public function getOrdersLinesId():  ?int
	{
		return $this->orders_lines_id;
	}

	public function setOrdersLinesId(int $orders_lines_id) : self
	{
		$this->orders_lines_id = $orders_lines_id;
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

	public function getShopsId():  ?int
	{
		return $this->shops_id;
	}

	public function setShopsId(int $shops_id) : self
	{
		$this->shops_id = $shops_id;
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

	public function getTransactionDate():  ?\DateTimeInterface
	{
		return $this->transaction_date;
	}

	public function setTransactionDate(\DateTimeInterface $transaction_date) : self
	{
		$this->transaction_date = $transaction_date;
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

	public function getCouponsId():  ?int
	{
		return $this->coupons_id;
	}

	public function setCouponsId(int $coupons_id) : self
	{
		$this->coupons_id = $coupons_id;
		return $this;
	}

	public function getProductsVariationsEan():  ?string
	{
		return $this->products_variations_ean;
	}

	public function setProductsVariationsEan(string $products_variations_ean) : self
	{
		$this->products_variations_ean = $products_variations_ean;
		return $this;
	}

	public function getProductsDateInsert():  ?\DateTimeInterface
	{
		return $this->products_date_insert;
	}

	public function setProductsDateInsert(\DateTimeInterface $products_date_insert) : self
	{
		$this->products_date_insert = $products_date_insert;
		return $this;
	}

	public function getProductsItemNumber():  ?string
	{
		return $this->products_item_number;
	}

	public function setProductsItemNumber(string $products_item_number) : self
	{
		$this->products_item_number = $products_item_number;
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

	public function getSalesVolume():  ?int
	{
		return $this->sales_volume;
	}

	public function setSalesVolume(int $sales_volume) : self
	{
		$this->sales_volume = $sales_volume;
		return $this;
	}

	public function getValueOrdered():  ?string
	{
		return $this->value_ordered;
	}

	public function setValueOrdered(string $value_ordered) : self
	{
		$this->value_ordered = $value_ordered;
		return $this;
	}

	public function getValueCancelled():  ?string
	{
		return $this->value_cancelled;
	}

	public function setValueCancelled(string $value_cancelled) : self
	{
		$this->value_cancelled = $value_cancelled;
		return $this;
	}

	public function getValueShipped():  ?string
	{
		return $this->value_shipped;
	}

	public function setValueShipped(string $value_shipped) : self
	{
		$this->value_shipped = $value_shipped;
		return $this;
	}

	public function getValueReturned():  ?string
	{
		return $this->value_returned;
	}

	public function setValueReturned(string $value_returned) : self
	{
		$this->value_returned = $value_returned;
		return $this;
	}

	public function getValueOrderedGross():  ?string
	{
		return $this->value_ordered_gross;
	}

	public function setValueOrderedGross(string $value_ordered_gross) : self
	{
		$this->value_ordered_gross = $value_ordered_gross;
		return $this;
	}

	public function getValueCancelledGross():  ?string
	{
		return $this->value_cancelled_gross;
	}

	public function setValueCancelledGross(string $value_cancelled_gross) : self
	{
		$this->value_cancelled_gross = $value_cancelled_gross;
		return $this;
	}

	public function getValueShippedGross():  ?string
	{
		return $this->value_shipped_gross;
	}

	public function setValueShippedGross(string $value_shipped_gross) : self
	{
		$this->value_shipped_gross = $value_shipped_gross;
		return $this;
	}

	public function getValueReturnedGross():  ?string
	{
		return $this->value_returned_gross;
	}

	public function setValueReturnedGross(string $value_returned_gross) : self
	{
		$this->value_returned_gross = $value_returned_gross;
		return $this;
	}

	public function getPurchaseValue():  ?string
	{
		return $this->purchase_value;
	}

	public function setPurchaseValue(string $purchase_value) : self
	{
		$this->purchase_value = $purchase_value;
		return $this;
	}

	public function getGrossProfit():  ?string
	{
		return $this->gross_profit;
	}

	public function setGrossProfit(string $gross_profit) : self
	{
		$this->gross_profit = $gross_profit;
		return $this;
	}

	public function getTurnover():  ?string
	{
		return $this->turnover;
	}

	public function setTurnover(string $turnover) : self
	{
		$this->turnover = $turnover;
		return $this;
	}

	public function getTurnoverGross():  ?string
	{
		return $this->turnover_gross;
	}

	public function setTurnoverGross(string $turnover_gross) : self
	{
		$this->turnover_gross = $turnover_gross;
		return $this;
	}

	public function getProductsVariationsDiffsOptionsValuesIds():  ?string
	{
		return $this->products_variations_diffs_options_values_ids;
	}

	public function setProductsVariationsDiffsOptionsValuesIds(string $products_variations_diffs_options_values_ids) : self
	{
		$this->products_variations_diffs_options_values_ids = $products_variations_diffs_options_values_ids;
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