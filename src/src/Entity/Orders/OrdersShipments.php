<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersShipmentsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersShipmentsRepository::class)]
#[ORM\Table(name: "orders_shipments")]
class OrdersShipments
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_shipments_id = null;

	#[ORM\Column]
	private ?int $orders_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $carriers_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $shipping_date = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $shipping_tracking_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $return_tracking_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $delivery_date = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $export_date = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersShipmentsId():  ?int
	{
		return $this->orders_shipments_id;
	}

	public function setOrdersShipmentsId(int $orders_shipments_id) : self
	{
		$this->orders_shipments_id = $orders_shipments_id;
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

	public function getShippingDate():  ?\DateTimeInterface
	{
		return $this->shipping_date;
	}

	public function setShippingDate(\DateTimeInterface $shipping_date) : self
	{
		$this->shipping_date = $shipping_date;
		return $this;
	}

	public function getShippingTrackingId():  ?string
	{
		return $this->shipping_tracking_id;
	}

	public function setShippingTrackingId(string $shipping_tracking_id) : self
	{
		$this->shipping_tracking_id = $shipping_tracking_id;
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

	public function getDeliveryDate():  ?\DateTimeInterface
	{
		return $this->delivery_date;
	}

	public function setDeliveryDate(\DateTimeInterface $delivery_date) : self
	{
		$this->delivery_date = $delivery_date;
		return $this;
	}

	public function getExportDate():  ?\DateTimeInterface
	{
		return $this->export_date;
	}

	public function setExportDate(\DateTimeInterface $export_date) : self
	{
		$this->export_date = $export_date;
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