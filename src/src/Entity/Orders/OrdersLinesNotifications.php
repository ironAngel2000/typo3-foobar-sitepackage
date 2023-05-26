<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersLinesNotificationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersLinesNotificationsRepository::class)]
#[ORM\Table(name: "orders_lines_notifications")]
class OrdersLinesNotifications
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_lines_notifications_id = null;

	#[ORM\Column]
	private ?int $orders_lines_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $orders_lines_notifications_type = null;

	#[ORM\Column]
	private ?int $quantity_cancelled = null;

	#[ORM\Column]
	private ?int $quantity_shipped = null;

	#[ORM\Column]
	private ?int $quantity_returned = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_notified = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersLinesNotificationsId():  ?int
	{
		return $this->orders_lines_notifications_id;
	}

	public function setOrdersLinesNotificationsId(int $orders_lines_notifications_id) : self
	{
		$this->orders_lines_notifications_id = $orders_lines_notifications_id;
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

	public function getOrdersLinesNotificationsType():  ?string
	{
		return $this->orders_lines_notifications_type;
	}

	public function setOrdersLinesNotificationsType(string $orders_lines_notifications_type) : self
	{
		$this->orders_lines_notifications_type = $orders_lines_notifications_type;
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

	public function getDateNotified():  ?\DateTimeInterface
	{
		return $this->date_notified;
	}

	public function setDateNotified(\DateTimeInterface $date_notified) : self
	{
		$this->date_notified = $date_notified;
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