<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsLastUpdatesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsLastUpdatesRepository::class)]
#[ORM\Table(name: "products_variations_last_updates")]
class ProductsVariationsLastUpdates
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_last_updates_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $products_variations_last_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsLastUpdatesId():  ?int
	{
		return $this->products_variations_last_updates_id;
	}

	public function setProductsVariationsLastUpdatesId(int $products_variations_last_updates_id) : self
	{
		$this->products_variations_last_updates_id = $products_variations_last_updates_id;
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

	public function getProductsVariationsLastUpdate():  ?\DateTimeInterface
	{
		return $this->products_variations_last_update;
	}

	public function setProductsVariationsLastUpdate(\DateTimeInterface $products_variations_last_update) : self
	{
		$this->products_variations_last_update = $products_variations_last_update;
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