<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsBundlesToProductsOptionsValuesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsBundlesToProductsOptionsValuesRepository::class)]
#[ORM\Table(name: "products_bundles_to_products_options_values")]
class ProductsBundlesToProductsOptionsValues
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_bundles_to_products_options_values_id = null;

	#[ORM\Column]
	private ?int $products_bundles_id = null;

	#[ORM\Column]
	private ?int $products_options_values_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsBundlesToProductsOptionsValuesId():  ?int
	{
		return $this->products_bundles_to_products_options_values_id;
	}

	public function setProductsBundlesToProductsOptionsValuesId(int $products_bundles_to_products_options_values_id) : self
	{
		$this->products_bundles_to_products_options_values_id = $products_bundles_to_products_options_values_id;
		return $this;
	}

	public function getProductsBundlesId():  ?int
	{
		return $this->products_bundles_id;
	}

	public function setProductsBundlesId(int $products_bundles_id) : self
	{
		$this->products_bundles_id = $products_bundles_id;
		return $this;
	}

	public function getProductsOptionsValuesId():  ?int
	{
		return $this->products_options_values_id;
	}

	public function setProductsOptionsValuesId(int $products_options_values_id) : self
	{
		$this->products_options_values_id = $products_options_values_id;
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