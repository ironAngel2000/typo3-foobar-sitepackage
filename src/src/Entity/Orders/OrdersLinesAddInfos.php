<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersLinesAddInfosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersLinesAddInfosRepository::class)]
#[ORM\Table(name: "orders_lines_add_infos")]
class OrdersLinesAddInfos
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_lines_add_infos_id = null;

	#[ORM\Column]
	private ?int $orders_lines_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $key = null;

	 #[ORM\Column(length: 1000)]
	private ?string $value = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersLinesAddInfosId():  ?int
	{
		return $this->orders_lines_add_infos_id;
	}

	public function setOrdersLinesAddInfosId(int $orders_lines_add_infos_id) : self
	{
		$this->orders_lines_add_infos_id = $orders_lines_add_infos_id;
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

	public function getKey():  ?string
	{
		return $this->key;
	}

	public function setKey(string $key) : self
	{
		$this->key = $key;
		return $this;
	}

	public function getValue():  ?string
	{
		return $this->value;
	}

	public function setValue(string $value) : self
	{
		$this->value = $value;
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