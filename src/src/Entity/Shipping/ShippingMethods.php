<?php

namespace App\Entity\Shipping;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shipping\ShippingMethodsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShippingMethodsRepository::class)]
#[ORM\Table(name: "shipping_methods")]
class ShippingMethods
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shipping_methods_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $orders_hold_status_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $shipping_methods_code = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShippingMethodsId():  ?int
	{
		return $this->shipping_methods_id;
	}

	public function setShippingMethodsId(int $shipping_methods_id) : self
	{
		$this->shipping_methods_id = $shipping_methods_id;
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

	public function getShippingMethodsCode():  ?string
	{
		return $this->shipping_methods_code;
	}

	public function setShippingMethodsCode(string $shipping_methods_code) : self
	{
		$this->shipping_methods_code = $shipping_methods_code;
		return $this;
	}

	public function getSortOrder():  ?int
	{
		return $this->sort_order;
	}

	public function setSortOrder(int $sort_order) : self
	{
		$this->sort_order = $sort_order;
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