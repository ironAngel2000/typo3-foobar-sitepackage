<?php

namespace App\Entity\Controlling;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Controlling\ControllingProductsVariationsDiffsOptionsValuesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ControllingProductsVariationsDiffsOptionsValuesRepository::class)]
#[ORM\Table(name: "controlling_products_variations_diffs_options_values")]
class ControllingProductsVariationsDiffsOptionsValues
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $controlling_products_variations_diffs_options_values_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $transaction_date = null;

	#[ORM\Column]
	private ?int $products_variations_diffs_options_values_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

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
	private ?float $value_ordered = null;

	#[ORM\Column]
	private ?float $value_cancelled = null;

	#[ORM\Column]
	private ?float $value_shipped = null;

	#[ORM\Column]
	private ?float $value_returned = null;

	#[ORM\Column]
	private ?float $purchase_value = null;

	#[ORM\Column]
	private ?float $gross_profit = null;

	#[ORM\Column]
	private ?float $turnover = null;

	#[ORM\Column]
	private ?float $turnover_gross = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getControllingProductsVariationsDiffsOptionsValuesId():  ?int
	{
		return $this->controlling_products_variations_diffs_options_values_id;
	}

	public function setControllingProductsVariationsDiffsOptionsValuesId(int $controlling_products_variations_diffs_options_values_id) : self
	{
		$this->controlling_products_variations_diffs_options_values_id = $controlling_products_variations_diffs_options_values_id;
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

	public function getProductsVariationsDiffsOptionsValuesId():  ?int
	{
		return $this->products_variations_diffs_options_values_id;
	}

	public function setProductsVariationsDiffsOptionsValuesId(int $products_variations_diffs_options_values_id) : self
	{
		$this->products_variations_diffs_options_values_id = $products_variations_diffs_options_values_id;
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

	public function getValueOrdered():  ?float
	{
		return $this->value_ordered;
	}

	public function setValueOrdered(float $value_ordered) : self
	{
		$this->value_ordered = $value_ordered;
		return $this;
	}

	public function getValueCancelled():  ?float
	{
		return $this->value_cancelled;
	}

	public function setValueCancelled(float $value_cancelled) : self
	{
		$this->value_cancelled = $value_cancelled;
		return $this;
	}

	public function getValueShipped():  ?float
	{
		return $this->value_shipped;
	}

	public function setValueShipped(float $value_shipped) : self
	{
		$this->value_shipped = $value_shipped;
		return $this;
	}

	public function getValueReturned():  ?float
	{
		return $this->value_returned;
	}

	public function setValueReturned(float $value_returned) : self
	{
		$this->value_returned = $value_returned;
		return $this;
	}

	public function getPurchaseValue():  ?float
	{
		return $this->purchase_value;
	}

	public function setPurchaseValue(float $purchase_value) : self
	{
		$this->purchase_value = $purchase_value;
		return $this;
	}

	public function getGrossProfit():  ?float
	{
		return $this->gross_profit;
	}

	public function setGrossProfit(float $gross_profit) : self
	{
		$this->gross_profit = $gross_profit;
		return $this;
	}

	public function getTurnover():  ?float
	{
		return $this->turnover;
	}

	public function setTurnover(float $turnover) : self
	{
		$this->turnover = $turnover;
		return $this;
	}

	public function getTurnoverGross():  ?float
	{
		return $this->turnover_gross;
	}

	public function setTurnoverGross(float $turnover_gross) : self
	{
		$this->turnover_gross = $turnover_gross;
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