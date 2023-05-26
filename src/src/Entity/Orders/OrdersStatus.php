<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersStatusRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersStatusRepository::class)]
#[ORM\Table(name: "orders_status")]
class OrdersStatus
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_status_id = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $orders_status_code = null;

	#[ORM\Column(nullable: true)]
	private ?int $sort_order = null;

	#[ORM\Column]
	private ?string $frontend_hidden = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersStatusId():  ?int
	{
		return $this->orders_status_id;
	}

	public function setOrdersStatusId(int $orders_status_id) : self
	{
		$this->orders_status_id = $orders_status_id;
		return $this;
	}

	public function getOrdersStatusCode():  ?string
	{
		return $this->orders_status_code;
	}

	public function setOrdersStatusCode(string $orders_status_code) : self
	{
		$this->orders_status_code = $orders_status_code;
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

	public function getFrontendHidden():  ?string
	{
		return $this->frontend_hidden;
	}

	public function setFrontendHidden(string $frontend_hidden) : self
	{
		$this->frontend_hidden = $frontend_hidden;
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