<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersOrdersLinesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersOrdersLinesRepository::class)]
#[ORM\Table(name: "suppliers_orders_lines")]
class SuppliersOrdersLines
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_orders_lines_id = null;

	#[ORM\Column]
	private ?int $suppliers_orders_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $stock_location = null;

	 #[ORM\Column(length: 64)]
	private ?string $suppliers_item_num = null;

	 #[ORM\Column(length: 255)]
	private ?string $item_description = null;

	#[ORM\Column(nullable: true)]
	private ?string $orders_line_comment = null;

	#[ORM\Column]
	private ?int $quantity = null;

	 #[ORM\Column(length: 50)]
	private ?string $unit = null;

	#[ORM\Column]
	private ?int $replacement_quantity = null;

	 #[ORM\Column(length: 50)]
	private ?string $item_number = null;

	#[ORM\Column]
	private ?string $price = null;

	 #[ORM\Column(length: 50)]
	private ?string $price_unit = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getSuppliersOrdersLinesId():  ?int
	{
		return $this->suppliers_orders_lines_id;
	}

	public function setSuppliersOrdersLinesId(int $suppliers_orders_lines_id) : self
	{
		$this->suppliers_orders_lines_id = $suppliers_orders_lines_id;
		return $this;
	}

	public function getSuppliersOrdersId():  ?int
	{
		return $this->suppliers_orders_id;
	}

	public function setSuppliersOrdersId(int $suppliers_orders_id) : self
	{
		$this->suppliers_orders_id = $suppliers_orders_id;
		return $this;
	}

	public function getProductsVariationsId():  ?int
	{
		return $this->products_variations_id;
	}

	public function setProductsVariationsId(int $products_variations_id) : self
	{
		$this->products_variations_id = $products_variations_id;
		return $this;
	}

	public function getStockLocation():  ?string
	{
		return $this->stock_location;
	}

	public function setStockLocation(string $stock_location) : self
	{
		$this->stock_location = $stock_location;
		return $this;
	}

	public function getSuppliersItemNum():  ?string
	{
		return $this->suppliers_item_num;
	}

	public function setSuppliersItemNum(string $suppliers_item_num) : self
	{
		$this->suppliers_item_num = $suppliers_item_num;
		return $this;
	}

	public function getItemDescription():  ?string
	{
		return $this->item_description;
	}

	public function setItemDescription(string $item_description) : self
	{
		$this->item_description = $item_description;
		return $this;
	}

	public function getOrdersLineComment():  ?string
	{
		return $this->orders_line_comment;
	}

	public function setOrdersLineComment(string $orders_line_comment) : self
	{
		$this->orders_line_comment = $orders_line_comment;
		return $this;
	}

	public function getQuantity():  ?int
	{
		return $this->quantity;
	}

	public function setQuantity(int $quantity) : self
	{
		$this->quantity = $quantity;
		return $this;
	}

	public function getUnit():  ?string
	{
		return $this->unit;
	}

	public function setUnit(string $unit) : self
	{
		$this->unit = $unit;
		return $this;
	}

	public function getReplacementQuantity():  ?int
	{
		return $this->replacement_quantity;
	}

	public function setReplacementQuantity(int $replacement_quantity) : self
	{
		$this->replacement_quantity = $replacement_quantity;
		return $this;
	}

	public function getItemNumber():  ?string
	{
		return $this->item_number;
	}

	public function setItemNumber(string $item_number) : self
	{
		$this->item_number = $item_number;
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

	public function getPriceUnit():  ?string
	{
		return $this->price_unit;
	}

	public function setPriceUnit(string $price_unit) : self
	{
		$this->price_unit = $price_unit;
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