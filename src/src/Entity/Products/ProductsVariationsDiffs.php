<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsDiffsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsDiffsRepository::class)]
#[ORM\Table(name: "products_variations_diffs")]
class ProductsVariationsDiffs
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_diffs_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	#[ORM\Column]
	private ?int $products_variations_diffs_options_id = null;

	#[ORM\Column]
	private ?int $products_variations_diffs_options_values_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsDiffsId():  ?int
	{
		return $this->products_variations_diffs_id;
	}

	public function setProductsVariationsDiffsId(int $products_variations_diffs_id) : self
	{
		$this->products_variations_diffs_id = $products_variations_diffs_id;
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

	public function getProductsVariationsDiffsOptionsId():  ?int
	{
		return $this->products_variations_diffs_options_id;
	}

	public function setProductsVariationsDiffsOptionsId(int $products_variations_diffs_options_id) : self
	{
		$this->products_variations_diffs_options_id = $products_variations_diffs_options_id;
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