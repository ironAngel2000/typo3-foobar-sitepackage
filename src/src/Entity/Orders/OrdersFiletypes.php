<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersFiletypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersFiletypesRepository::class)]
#[ORM\Table(name: "orders_filetypes")]
class OrdersFiletypes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_filetypes_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $orders_filetypes_name = null;

	 #[ORM\Column(length: 50)]
	private ?string $file_path = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersFiletypesId():  ?int
	{
		return $this->orders_filetypes_id;
	}

	public function setOrdersFiletypesId(int $orders_filetypes_id) : self
	{
		$this->orders_filetypes_id = $orders_filetypes_id;
		return $this;
	}

	public function getOrdersFiletypesName():  ?string
	{
		return $this->orders_filetypes_name;
	}

	public function setOrdersFiletypesName(string $orders_filetypes_name) : self
	{
		$this->orders_filetypes_name = $orders_filetypes_name;
		return $this;
	}

	public function getFilePath():  ?string
	{
		return $this->file_path;
	}

	public function setFilePath(string $file_path) : self
	{
		$this->file_path = $file_path;
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