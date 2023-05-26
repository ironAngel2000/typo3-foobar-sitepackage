<?php

namespace App\Entity\Controlling;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Controlling\ControllingOrdersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ControllingOrdersRepository::class)]
#[ORM\Table(name: "controlling_orders")]
class ControllingOrders
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $controlling_orders_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $orders_date = null;

	#[ORM\Column]
	private ?int $orders_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column]
	private ?int $payment_methods_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $shops_customers_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $age = null;

	#[ORM\Column(length: 16, nullable: true)]
	private ?string $postal_code = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $city = null;

	#[ORM\Column]
	private ?string $value_ordered = null;

	#[ORM\Column]
	private ?int $number_of_orders_lines = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getControllingOrdersId():  ?int
	{
		return $this->controlling_orders_id;
	}

	public function setControllingOrdersId(int $controlling_orders_id) : self
	{
		$this->controlling_orders_id = $controlling_orders_id;
		return $this;
	}

	public function getOrdersDate():  ?\DateTimeInterface
	{
		return $this->orders_date;
	}

	public function setOrdersDate(\DateTimeInterface $orders_date) : self
	{
		$this->orders_date = $orders_date;
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

	public function getPaymentMethodsId():  ?int
	{
		return $this->payment_methods_id;
	}

	public function setPaymentMethodsId(int $payment_methods_id) : self
	{
		$this->payment_methods_id = $payment_methods_id;
		return $this;
	}

	public function getShopsCustomersId():  ?string
	{
		return $this->shops_customers_id;
	}

	public function setShopsCustomersId(string $shops_customers_id) : self
	{
		$this->shops_customers_id = $shops_customers_id;
		return $this;
	}

	public function getAge():  ?string
	{
		return $this->age;
	}

	public function setAge(string $age) : self
	{
		$this->age = $age;
		return $this;
	}

	public function getPostalCode():  ?string
	{
		return $this->postal_code;
	}

	public function setPostalCode(string $postal_code) : self
	{
		$this->postal_code = $postal_code;
		return $this;
	}

	public function getCity():  ?string
	{
		return $this->city;
	}

	public function setCity(string $city) : self
	{
		$this->city = $city;
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

	public function getNumberOfOrdersLines():  ?int
	{
		return $this->number_of_orders_lines;
	}

	public function setNumberOfOrdersLines(int $number_of_orders_lines) : self
	{
		$this->number_of_orders_lines = $number_of_orders_lines;
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