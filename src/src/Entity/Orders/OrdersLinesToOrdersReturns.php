<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersLinesToOrdersReturnsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersLinesToOrdersReturnsRepository::class)]
#[ORM\Table(name: "orders_lines_to_orders_returns")]
class OrdersLinesToOrdersReturns
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_lines_to_orders_returns_id = null;

	#[ORM\Column]
	private ?int $orders_lines_id = null;

	#[ORM\Column]
	private ?int $orders_returns_id = null;

	#[ORM\Column(nullable: true)]
	private ?float $refund_amount = null;

	#[ORM\Column(nullable: true)]
	private ?float $shipping_costs_refund_amount = null;

	#[ORM\Column(nullable: true)]
	private ?int $quantity_returned = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersLinesToOrdersReturnsId():  ?int
	{
		return $this->orders_lines_to_orders_returns_id;
	}

	public function setOrdersLinesToOrdersReturnsId(int $orders_lines_to_orders_returns_id) : self
	{
		$this->orders_lines_to_orders_returns_id = $orders_lines_to_orders_returns_id;
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

	public function getOrdersReturnsId():  ?int
	{
		return $this->orders_returns_id;
	}

	public function setOrdersReturnsId(int $orders_returns_id) : self
	{
		$this->orders_returns_id = $orders_returns_id;
		return $this;
	}

	public function getRefundAmount():  ?float
	{
		return $this->refund_amount;
	}

	public function setRefundAmount(float $refund_amount) : self
	{
		$this->refund_amount = $refund_amount;
		return $this;
	}

	public function getShippingCostsRefundAmount():  ?float
	{
		return $this->shipping_costs_refund_amount;
	}

	public function setShippingCostsRefundAmount(float $shipping_costs_refund_amount) : self
	{
		$this->shipping_costs_refund_amount = $shipping_costs_refund_amount;
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