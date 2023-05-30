<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsToProductsAttributesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsToProductsAttributesRepository::class)]
#[ORM\Table(name: "products_variations_to_products_attributes")]
class ProductsVariationsToProductsAttributes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_to_products_attributes_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $products_attributes_values_id = null;

	#[ORM\Column]
	private ?int $products_attributes_id = null;

	#[ORM\Column(nullable: true)]
	private ?float $value = null;

	#[ORM\Column(nullable: true)]
	private ?float $value_to = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsToProductsAttributesId():  ?int
	{
		return $this->products_variations_to_products_attributes_id;
	}

	public function setProductsVariationsToProductsAttributesId(int $products_variations_to_products_attributes_id) : self
	{
		$this->products_variations_to_products_attributes_id = $products_variations_to_products_attributes_id;
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

	public function getValue():  ?float
	{
		return $this->value;
	}

	public function setValue(float $value) : self
	{
		$this->value = $value;
		return $this;
	}

	public function getValueTo():  ?float
	{
		return $this->value_to;
	}

	public function setValueTo(float $value_to) : self
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