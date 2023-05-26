<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersInvoicesToOrdersShipmentsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersInvoicesToOrdersShipmentsRepository::class)]
#[ORM\Table(name: "orders_invoices_to_orders_shipments")]
class OrdersInvoicesToOrdersShipments
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_invoices_to_orders_shipments_id = null;

	#[ORM\Column]
	private ?int $orders_invoices_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $orders_shipments_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersInvoicesToOrdersShipmentsId():  ?int
	{
		return $this->orders_invoices_to_orders_shipments_id;
	}

	public function setOrdersInvoicesToOrdersShipmentsId(int $orders_invoices_to_orders_shipments_id) : self
	{
		$this->orders_invoices_to_orders_shipments_id = $orders_invoices_to_orders_shipments_id;
		return $this;
	}

	public function getOrdersInvoicesId():  ?int
	{
		return $this->orders_invoices_id;
	}

	public function setOrdersInvoicesId(int $orders_invoices_id) : self
	{
		$this->orders_invoices_id = $orders_invoices_id;
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