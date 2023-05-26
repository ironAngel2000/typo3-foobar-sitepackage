<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsBundlesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsBundlesRepository::class)]
#[ORM\Table(name: "products_variations_bundles")]
class ProductsVariationsBundles
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_bundles_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	#[ORM\Column]
	private ?int $assigned_products_variations_id = null;

	#[ORM\Column]
	private ?int $quantity = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsBundlesId():  ?int
	{
		return $this->products_variations_bundles_id;
	}

	public function setProductsVariationsBundlesId(int $products_variations_bundles_id) : self
	{
		$this->products_variations_bundles_id = $products_variations_bundles_id;
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

	public function getAssignedProductsVariationsId():  ?int
	{
		return $this->assigned_products_variations_id;
	}

	public function setAssignedProductsVariationsId(int $assigned_products_variations_id) : self
	{
		$this->assigned_products_variations_id = $assigned_products_variations_id;
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