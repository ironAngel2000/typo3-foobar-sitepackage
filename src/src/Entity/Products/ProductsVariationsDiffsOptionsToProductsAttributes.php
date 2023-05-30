<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsDiffsOptionsToProductsAttributesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsDiffsOptionsToProductsAttributesRepository::class)]
#[ORM\Table(name: "products_variations_diffs_options_to_products_attributes")]
class ProductsVariationsDiffsOptionsToProductsAttributes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_diffs_options_to_products_attributes_id = null;

	#[ORM\Column]
	private ?int $products_variations_diffs_options_id = null;

	#[ORM\Column]
	private ?int $products_attributes_id = null;

	#[ORM\Column]
	private ?int $export_attributes_values = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsDiffsOptionsToProductsAttributesId():  ?int
	{
		return $this->products_variations_diffs_options_to_products_attributes_id;
	}

	public function setProductsVariationsDiffsOptionsToProductsAttributesId(int $products_variations_diffs_options_to_products_attributes_id) : self
	{
		$this->products_variations_diffs_options_to_products_attributes_id = $products_variations_diffs_options_to_products_attributes_id;
		return $this;
	}

	public function getProductsVariationsDiffsOptionsId():  ?int
	{
		return $this->products_variations_diffs_options_id;
	}

	public function setProductsVariationsDiffsOptionsId(int $products_variations_diffs_options_id) : self
	{
		$this->products_variations_diffs_options_id = $products_variations_diffs_options_id;
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

	public function getExportAttributesValues():  ?int
	{
		return $this->export_attributes_values;
	}

	public function setExportAttributesValues(int $export_attributes_values) : self
	{
		$this->export_attributes_values = $export_attributes_values;
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