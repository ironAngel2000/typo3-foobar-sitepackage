<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersLinesOptionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersLinesOptionsRepository::class)]
#[ORM\Table(name: "orders_lines_options")]
class OrdersLinesOptions
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_lines_options = null;

	#[ORM\Column]
	private ?int $orders_lines_id = null;

	#[ORM\Column]
	private ?int $products_options_id = null;

	#[ORM\Column]
	private ?int $products_options_values_id = null;

	#[ORM\Column]
	private ?string $price = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersLinesOptions():  ?int
	{
		return $this->orders_lines_options;
	}

	public function setOrdersLinesOptions(int $orders_lines_options) : self
	{
		$this->orders_lines_options = $orders_lines_options;
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

	public function getProductsOptionsId():  ?int
	{
		return $this->products_options_id;
	}

	public function setProductsOptionsId(int $products_options_id) : self
	{
		$this->products_options_id = $products_options_id;
		return $this;
	}

	public function getProductsOptionsValuesId():  ?int
	{
		return $this->products_options_values_id;
	}

	public function setProductsOptionsValuesId(int $products_options_values_id) : self
	{
		$this->products_options_values_id = $products_options_values_id;
		return $this;
	}

	public function getPrice():  ?string
	{
		return $this->price;
	}

	public function setPrice(string $price) : self
	{
		$this->price = $price;
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