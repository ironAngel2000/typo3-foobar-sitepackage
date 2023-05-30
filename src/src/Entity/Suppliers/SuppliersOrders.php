<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersOrdersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersOrdersRepository::class)]
#[ORM\Table(name: "suppliers_orders")]
class SuppliersOrders
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_orders_id = null;

	#[ORM\Column]
	private ?int $suppliers_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $delivery_date = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_id = null;

	#[ORM\Column]
	private ?int $send_status = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $customers_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getSuppliersOrdersId():  ?int
	{
		return $this->suppliers_orders_id;
	}

	public function setSuppliersOrdersId(int $suppliers_orders_id) : self
	{
		$this->suppliers_orders_id = $suppliers_orders_id;
		return $this;
	}

	public function getSuppliersId():  ?int
	{
		return $this->suppliers_id;
	}

	public function setSuppliersId(int $suppliers_id) : self
	{
		$this->suppliers_id = $suppliers_id;
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

	public function getShopsId():  ?int
	{
		return $this->shops_id;
	}

	public function setShopsId(int $shops_id) : self
	{
		$this->shops_id = $shops_id;
		return $this;
	}

	public function getSendStatus():  ?int
	{
		return $this->send_status;
	}

	public function setSendStatus(int $send_status) : self
	{
		$this->send_status = $send_status;
		return $this;
	}

	public function getCustomersId():  ?string
	{
		return $this->customers_id;
	}

	public function setCustomersId(string $customers_id) : self
	{
		$this->customers_id = $customers_id;
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