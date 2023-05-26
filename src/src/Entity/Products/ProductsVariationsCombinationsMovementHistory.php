<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsCombinationsMovementHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsCombinationsMovementHistoryRepository::class)]
#[ORM\Table(name: "products_variations_combinations_movement_history")]
class ProductsVariationsCombinationsMovementHistory
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_combinations_movement_history_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	#[ORM\Column]
	private ?int $from_products_id = null;

	#[ORM\Column]
	private ?int $to_products_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsCombinationsMovementHistoryId():  ?int
	{
		return $this->products_variations_combinations_movement_history_id;
	}

	public function setProductsVariationsCombinationsMovementHistoryId(int $products_variations_combinations_movement_history_id) : self
	{
		$this->products_variations_combinations_movement_history_id = $products_variations_combinations_movement_history_id;
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

	public function getFromProductsId():  ?int
	{
		return $this->from_products_id;
	}

	public function setFromProductsId(int $from_products_id) : self
	{
		$this->from_products_id = $from_products_id;
		return $this;
	}

	public function getToProductsId():  ?int
	{
		return $this->to_products_id;
	}

	public function setToProductsId(int $to_products_id) : self
	{
		$this->to_products_id = $to_products_id;
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