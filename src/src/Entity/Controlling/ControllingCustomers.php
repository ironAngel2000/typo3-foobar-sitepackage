<?php

namespace App\Entity\Controlling;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Controlling\ControllingCustomersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ControllingCustomersRepository::class)]
#[ORM\Table(name: "controlling_customers")]
class ControllingCustomers
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $controlling_customers_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_customers_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $transaction_date = null;

	#[ORM\Column(nullable: true)]
	private ?string $gender = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $first_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $last_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_of_birth = null;

	#[ORM\Column]
	private ?int $first_order = null;

	#[ORM\Column]
	private ?int $guest = null;

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
	private ?float $value_ordered_gross = null;

	#[ORM\Column]
	private ?float $value_cancelled_gross = null;

	#[ORM\Column]
	private ?float $value_shipped_gross = null;

	#[ORM\Column]
	private ?float $value_returned_gross = null;

	#[ORM\Column]
	private ?float $purchase_value = null;

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

	public function getControllingCustomersId():  ?int
	{
		return $this->controlling_customers_id;
	}

	public function setControllingCustomersId(int $controlling_customers_id) : self
	{
		$this->controlling_customers_id = $controlling_customers_id;
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

	public function getExternCustomersId():  ?string
	{
		return $this->extern_customers_id;
	}

	public function setExternCustomersId(string $extern_customers_id) : self
	{
		$this->extern_customers_id = $extern_customers_id;
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

	public function getGender():  ?string
	{
		return $this->gender;
	}

	public function setGender(string $gender) : self
	{
		$this->gender = $gender;
		return $this;
	}

	public function getFirstName():  ?string
	{
		return $this->first_name;
	}

	public function setFirstName(string $first_name) : self
	{
		$this->first_name = $first_name;
		return $this;
	}

	public function getLastName():  ?string
	{
		return $this->last_name;
	}

	public function setLastName(string $last_name) : self
	{
		$this->last_name = $last_name;
		return $this;
	}

	public function getDateOfBirth():  ?\DateTimeInterface
	{
		return $this->date_of_birth;
	}

	public function setDateOfBirth(\DateTimeInterface $date_of_birth) : self
	{
		$this->date_of_birth = $date_of_birth;
		return $this;
	}

	public function getFirstOrder():  ?int
	{
		return $this->first_order;
	}

	public function setFirstOrder(int $first_order) : self
	{
		$this->first_order = $first_order;
		return $this;
	}

	public function getGuest():  ?int
	{
		return $this->guest;
	}

	public function setGuest(int $guest) : self
	{
		$this->guest = $guest;
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

	public function getValueOrderedGross():  ?float
	{
		return $this->value_ordered_gross;
	}

	public function setValueOrderedGross(float $value_ordered_gross) : self
	{
		$this->value_ordered_gross = $value_ordered_gross;
		return $this;
	}

	public function getValueCancelledGross():  ?float
	{
		return $this->value_cancelled_gross;
	}

	public function setValueCancelledGross(float $value_cancelled_gross) : self
	{
		$this->value_cancelled_gross = $value_cancelled_gross;
		return $this;
	}

	public function getValueShippedGross():  ?float
	{
		return $this->value_shipped_gross;
	}

	public function setValueShippedGross(float $value_shipped_gross) : self
	{
		$this->value_shipped_gross = $value_shipped_gross;
		return $this;
	}

	public function getValueReturnedGross():  ?float
	{
		return $this->value_returned_gross;
	}

	public function setValueReturnedGross(float $value_returned_gross) : self
	{
		$this->value_returned_gross = $value_returned_gross;
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