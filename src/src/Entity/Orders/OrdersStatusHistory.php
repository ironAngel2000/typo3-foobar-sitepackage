<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersStatusHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersStatusHistoryRepository::class)]
#[ORM\Table(name: "orders_status_history")]
class OrdersStatusHistory
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_status_history_id = null;

	#[ORM\Column]
	private ?int $orders_id = null;

	#[ORM\Column]
	private ?int $orders_status_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $orders_payments_status_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $orders_hold_status_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersStatusHistoryId():  ?int
	{
		return $this->orders_status_history_id;
	}

	public function setOrdersStatusHistoryId(int $orders_status_history_id) : self
	{
		$this->orders_status_history_id = $orders_status_history_id;
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

	public function getOrdersPaymentsStatusId():  ?int
	{
		return $this->orders_payments_status_id;
	}

	public function setOrdersPaymentsStatusId(int $orders_payments_status_id) : self
	{
		$this->orders_payments_status_id = $orders_payments_status_id;
		return $this;
	}

	public function getOrdersHoldStatusId():  ?int
	{
		return $this->orders_hold_status_id;
	}

	public function setOrdersHoldStatusId(int $orders_hold_status_id) : self
	{
		$this->orders_hold_status_id = $orders_hold_status_id;
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