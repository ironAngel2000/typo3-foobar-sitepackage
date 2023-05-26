<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersStatusDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersStatusDescriptionRepository::class)]
#[ORM\Table(name: "orders_status_description")]
class OrdersStatusDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_status_description_id = null;

	#[ORM\Column]
	private ?int $orders_status_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $orders_status_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $orders_status_description = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersStatusDescriptionId():  ?int
	{
		return $this->orders_status_description_id;
	}

	public function setOrdersStatusDescriptionId(int $orders_status_description_id) : self
	{
		$this->orders_status_description_id = $orders_status_description_id;
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

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
		return $this;
	}

	public function getOrdersStatusName():  ?string
	{
		return $this->orders_status_name;
	}

	public function setOrdersStatusName(string $orders_status_name) : self
	{
		$this->orders_status_name = $orders_status_name;
		return $this;
	}

	public function getOrdersStatusDescription():  ?string
	{
		return $this->orders_status_description;
	}

	public function setOrdersStatusDescription(string $orders_status_description) : self
	{
		$this->orders_status_description = $orders_status_description;
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