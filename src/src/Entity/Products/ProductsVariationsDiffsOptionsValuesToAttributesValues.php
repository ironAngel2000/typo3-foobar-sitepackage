<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsDiffsOptionsValuesToAttributesValuesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsDiffsOptionsValuesToAttributesValuesRepository::class)]
#[ORM\Table(name: "products_variations_diffs_options_values_to_attributes_values")]
class ProductsVariationsDiffsOptionsValuesToAttributesValues
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_diffs_options_values_to_attributes_values_id = null;

	#[ORM\Column]
	private ?int $products_variations_diffs_options_values_id = null;

	#[ORM\Column]
	private ?int $products_attributes_values_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsDiffsOptionsValuesToAttributesValuesId():  ?int
	{
		return $this->products_variations_diffs_options_values_to_attributes_values_id;
	}

	public function setProductsVariationsDiffsOptionsValuesToAttributesValuesId(int $products_variations_diffs_options_values_to_attributes_values_id) : self
	{
		$this->products_variations_diffs_options_values_to_attributes_values_id = $products_variations_diffs_options_values_to_attributes_values_id;
		return $this;
	}

	public function getProductsVariationsDiffsOptionsValuesId():  ?int
	{
		return $this->products_variations_diffs_options_values_id;
	}

	public function setProductsVariationsDiffsOptionsValuesId(int $products_variations_diffs_options_values_id) : self
	{
		$this->products_variations_diffs_options_values_id = $products_variations_diffs_options_values_id;
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