<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsDiffsOptionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsDiffsOptionsRepository::class)]
#[ORM\Table(name: "products_variations_diffs_options")]
class ProductsVariationsDiffsOptions
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_diffs_options_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $products_variations_diffs_options_code = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_products_variations_diffs_options_id = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $diffs_options_last_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsDiffsOptionsId():  ?int
	{
		return $this->products_variations_diffs_options_id;
	}

	public function setProductsVariationsDiffsOptionsId(int $products_variations_diffs_options_id) : self
	{
		$this->products_variations_diffs_options_id = $products_variations_diffs_options_id;
		return $this;
	}

	public function getProductsVariationsDiffsOptionsCode():  ?string
	{
		return $this->products_variations_diffs_options_code;
	}

	public function setProductsVariationsDiffsOptionsCode(string $products_variations_diffs_options_code) : self
	{
		$this->products_variations_diffs_options_code = $products_variations_diffs_options_code;
		return $this;
	}

	public function getExternProductsVariationsDiffsOptionsId():  ?string
	{
		return $this->extern_products_variations_diffs_options_id;
	}

	public function setExternProductsVariationsDiffsOptionsId(string $extern_products_variations_diffs_options_id) : self
	{
		$this->extern_products_variations_diffs_options_id = $extern_products_variations_diffs_options_id;
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

	public function getDiffsOptionsLastUpdate():  ?\DateTimeInterface
	{
		return $this->diffs_options_last_update;
	}

	public function setDiffsOptionsLastUpdate(\DateTimeInterface $diffs_options_last_update) : self
	{
		$this->diffs_options_last_update = $diffs_options_last_update;
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