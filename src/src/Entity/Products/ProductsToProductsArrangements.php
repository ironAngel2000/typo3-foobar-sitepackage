<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsToProductsArrangementsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsToProductsArrangementsRepository::class)]
#[ORM\Table(name: "products_to_products_arrangements")]
class ProductsToProductsArrangements
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_to_products_arrangements_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_to_products_arrangements_code = null;

	#[ORM\Column]
	private ?string $multi_assign = null;

	#[ORM\Column]
	private ?string $multi_quantity = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsToProductsArrangementsId():  ?int
	{
		return $this->products_to_products_arrangements_id;
	}

	public function setProductsToProductsArrangementsId(int $products_to_products_arrangements_id) : self
	{
		$this->products_to_products_arrangements_id = $products_to_products_arrangements_id;
		return $this;
	}

	public function getProductsToProductsArrangementsCode():  ?string
	{
		return $this->products_to_products_arrangements_code;
	}

	public function setProductsToProductsArrangementsCode(string $products_to_products_arrangements_code) : self
	{
		$this->products_to_products_arrangements_code = $products_to_products_arrangements_code;
		return $this;
	}

	public function getMultiAssign():  ?string
	{
		return $this->multi_assign;
	}

	public function setMultiAssign(string $multi_assign) : self
	{
		$this->multi_assign = $multi_assign;
		return $this;
	}

	public function getMultiQuantity():  ?string
	{
		return $this->multi_quantity;
	}

	public function setMultiQuantity(string $multi_quantity) : self
	{
		$this->multi_quantity = $multi_quantity;
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