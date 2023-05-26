<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsToProductsAttributesNewRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsToProductsAttributesNewRepository::class)]
#[ORM\Table(name: "products_to_products_attributes_new")]
class ProductsToProductsAttributesNew
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_to_products_attributes_new_id = null;

	#[ORM\Column]
	private ?int $products_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $products_attributes_values_id = null;

	#[ORM\Column]
	private ?int $products_attributes_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $value = null;

	#[ORM\Column(nullable: true)]
	private ?string $value_to = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsToProductsAttributesNewId():  ?int
	{
		return $this->products_to_products_attributes_new_id;
	}

	public function setProductsToProductsAttributesNewId(int $products_to_products_attributes_new_id) : self
	{
		$this->products_to_products_attributes_new_id = $products_to_products_attributes_new_id;
		return $this;
	}

	public function getProductsId():  ?int
	{
		return $this->products_id;
	}

	public function setProductsId(int $products_id) : self
	{
		$this->products_id = $products_id;
		return $this;
	}

	public function getProductsAttributesValuesId():  ?int
	{
		return $this->products_attributes_values_id;
	}

	public function setProductsAttributesValuesId(int $products_attributes_values_id) : self
	{
		$this->products_attributes_values_id = $products_attributes_values_id;
		return $this;
	}

	public function getProductsAttributesId():  ?int
	{
		return $this->products_attributes_id;
	}

	public function setProductsAttributesId(int $products_attributes_id) : self
	{
		$this->products_attributes_id = $products_attributes_id;
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

	public function getValueTo():  ?string
	{
		return $this->value_to;
	}

	public function setValueTo(string $value_to) : self
	{
		$this->value_to = $value_to;
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