<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersLinesToOrdersShipmentsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersLinesToOrdersShipmentsRepository::class)]
#[ORM\Table(name: "orders_lines_to_orders_shipments")]
class OrdersLinesToOrdersShipments
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_lines_to_orders_shipments_id = null;

	#[ORM\Column]
	private ?int $orders_lines_id = null;

	#[ORM\Column]
	private ?int $orders_shipments_id = null;

	#[ORM\Column]
	private ?int $quantity_shipped = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersLinesToOrdersShipmentsId():  ?int
	{
		return $this->orders_lines_to_orders_shipments_id;
	}

	public function setOrdersLinesToOrdersShipmentsId(int $orders_lines_to_orders_shipments_id) : self
	{
		$this->orders_lines_to_orders_shipments_id = $orders_lines_to_orders_shipments_id;
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

	public function getOrdersShipmentsId():  ?int
	{
		return $this->orders_shipments_id;
	}

	public function setOrdersShipmentsId(int $orders_shipments_id) : self
	{
		$this->orders_shipments_id = $orders_shipments_id;
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