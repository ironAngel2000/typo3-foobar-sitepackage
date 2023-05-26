<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsOptionsValuesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsOptionsValuesRepository::class)]
#[ORM\Table(name: "products_options_values")]
class ProductsOptionsValues
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_options_values_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_products_options_values_id = null;

	#[ORM\Column]
	private ?int $products_options_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $price = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsOptionsValuesId():  ?int
	{
		return $this->products_options_values_id;
	}

	public function setProductsOptionsValuesId(int $products_options_values_id) : self
	{
		$this->products_options_values_id = $products_options_values_id;
		return $this;
	}

	public function getExternProductsOptionsValuesId():  ?string
	{
		return $this->extern_products_options_values_id;
	}

	public function setExternProductsOptionsValuesId(string $extern_products_options_values_id) : self
	{
		$this->extern_products_options_values_id = $extern_products_options_values_id;
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

	public function getPrice():  ?string
	{
		return $this->price;
	}

	public function setPrice(string $price) : self
	{
		$this->price = $price;
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