<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersCreditsLinesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersCreditsLinesRepository::class)]
#[ORM\Table(name: "orders_credits_lines")]
class OrdersCreditsLines
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_credits_lines_id = null;

	#[ORM\Column]
	private ?int $orders_credits_id = null;

	#[ORM\Column]
	private ?int $orders_lines_id = null;

	#[ORM\Column]
	private ?int $quantity_credited = null;

	#[ORM\Column]
	private ?string $amount_credited = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersCreditsLinesId():  ?int
	{
		return $this->orders_credits_lines_id;
	}

	public function setOrdersCreditsLinesId(int $orders_credits_lines_id) : self
	{
		$this->orders_credits_lines_id = $orders_credits_lines_id;
		return $this;
	}

	public function getOrdersCreditsId():  ?int
	{
		return $this->orders_credits_id;
	}

	public function setOrdersCreditsId(int $orders_credits_id) : self
	{
		$this->orders_credits_id = $orders_credits_id;
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

	public function getQuantityCredited():  ?int
	{
		return $this->quantity_credited;
	}

	public function setQuantityCredited(int $quantity_credited) : self
	{
		$this->quantity_credited = $quantity_credited;
		return $this;
	}

	public function getAmountCredited():  ?string
	{
		return $this->amount_credited;
	}

	public function setAmountCredited(string $amount_credited) : self
	{
		$this->amount_credited = $amount_credited;
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