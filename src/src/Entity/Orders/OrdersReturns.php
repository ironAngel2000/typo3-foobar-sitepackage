<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersReturnsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersReturnsRepository::class)]
#[ORM\Table(name: "orders_returns")]
class OrdersReturns
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_returns_id = null;

	#[ORM\Column]
	private ?int $orders_id = null;

	#[ORM\Column]
	private ?int $carriers_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $return_date = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $return_tracking_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersReturnsId():  ?int
	{
		return $this->orders_returns_id;
	}

	public function setOrdersReturnsId(int $orders_returns_id) : self
	{
		$this->orders_returns_id = $orders_returns_id;
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

	public function getCarriersId():  ?int
	{
		return $this->carriers_id;
	}

	public function setCarriersId(int $carriers_id) : self
	{
		$this->carriers_id = $carriers_id;
		return $this;
	}

	public function getReturnDate():  ?\DateTimeInterface
	{
		return $this->return_date;
	}

	public function setReturnDate(\DateTimeInterface $return_date) : self
	{
		$this->return_date = $return_date;
		return $this;
	}

	public function getReturnTrackingId():  ?string
	{
		return $this->return_tracking_id;
	}

	public function setReturnTrackingId(string $return_tracking_id) : self
	{
		$this->return_tracking_id = $return_tracking_id;
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