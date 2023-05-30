<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersCostsChangingsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersCostsChangingsRepository::class)]
#[ORM\Table(name: "orders_costs_changings")]
class OrdersCostsChangings
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_costs_changings_id = null;

	#[ORM\Column]
	private ?int $orders_id = null;

	#[ORM\Column]
	private ?int $orders_costs_changings_type = null;

	#[ORM\Column]
	private ?float $orders_costs_changings_type_value = null;

	#[ORM\Column]
	private ?float $orders_costs_changings_value = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $orders_costs_changings_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersCostsChangingsId():  ?int
	{
		return $this->orders_costs_changings_id;
	}

	public function setOrdersCostsChangingsId(int $orders_costs_changings_id) : self
	{
		$this->orders_costs_changings_id = $orders_costs_changings_id;
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

	public function getOrdersCostsChangingsType():  ?int
	{
		return $this->orders_costs_changings_type;
	}

	public function setOrdersCostsChangingsType(int $orders_costs_changings_type) : self
	{
		$this->orders_costs_changings_type = $orders_costs_changings_type;
		return $this;
	}

	public function getOrdersCostsChangingsTypeValue():  ?float
	{
		return $this->orders_costs_changings_type_value;
	}

	public function setOrdersCostsChangingsTypeValue(float $orders_costs_changings_type_value) : self
	{
		$this->orders_costs_changings_type_value = $orders_costs_changings_type_value;
		return $this;
	}

	public function getOrdersCostsChangingsValue():  ?float
	{
		return $this->orders_costs_changings_value;
	}

	public function setOrdersCostsChangingsValue(float $orders_costs_changings_value) : self
	{
		$this->orders_costs_changings_value = $orders_costs_changings_value;
		return $this;
	}

	public function getOrdersCostsChangingsName():  ?string
	{
		return $this->orders_costs_changings_name;
	}

	public function setOrdersCostsChangingsName(string $orders_costs_changings_name) : self
	{
		$this->orders_costs_changings_name = $orders_costs_changings_name;
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