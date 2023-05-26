<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersStatusPossibleChangesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersStatusPossibleChangesRepository::class)]
#[ORM\Table(name: "orders_status_possible_changes")]
class OrdersStatusPossibleChanges
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_status_possible_changes_id = null;

	#[ORM\Column]
	private ?int $orders_status_id = null;

	#[ORM\Column]
	private ?int $allowed_orders_status_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersStatusPossibleChangesId():  ?int
	{
		return $this->orders_status_possible_changes_id;
	}

	public function setOrdersStatusPossibleChangesId(int $orders_status_possible_changes_id) : self
	{
		$this->orders_status_possible_changes_id = $orders_status_possible_changes_id;
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

	public function getAllowedOrdersStatusId():  ?int
	{
		return $this->allowed_orders_status_id;
	}

	public function setAllowedOrdersStatusId(int $allowed_orders_status_id) : self
	{
		$this->allowed_orders_status_id = $allowed_orders_status_id;
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