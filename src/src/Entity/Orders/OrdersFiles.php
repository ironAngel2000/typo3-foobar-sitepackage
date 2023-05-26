<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersFilesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersFilesRepository::class)]
#[ORM\Table(name: "orders_files")]
class OrdersFiles
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_files_id = null;

	#[ORM\Column]
	private ?int $orders_id = null;

	#[ORM\Column]
	private ?int $orders_filetypes_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $orders_files_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersFilesId():  ?int
	{
		return $this->orders_files_id;
	}

	public function setOrdersFilesId(int $orders_files_id) : self
	{
		$this->orders_files_id = $orders_files_id;
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

	public function getOrdersFiletypesId():  ?int
	{
		return $this->orders_filetypes_id;
	}

	public function setOrdersFiletypesId(int $orders_filetypes_id) : self
	{
		$this->orders_filetypes_id = $orders_filetypes_id;
		return $this;
	}

	public function getOrdersFilesName():  ?string
	{
		return $this->orders_files_name;
	}

	public function setOrdersFilesName(string $orders_files_name) : self
	{
		$this->orders_files_name = $orders_files_name;
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