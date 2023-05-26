<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsVariationsCombinationsHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsVariationsCombinationsHistoryRepository::class)]
#[ORM\Table(name: "shops_products_variations_combinations_history")]
class ShopsProductsVariationsCombinationsHistory
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_variations_combinations_history_id = null;

	#[ORM\Column]
	private ?int $shops_products_variations_id = null;

	#[ORM\Column]
	private ?int $original_shops_products_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsVariationsCombinationsHistoryId():  ?int
	{
		return $this->shops_products_variations_combinations_history_id;
	}

	public function setShopsProductsVariationsCombinationsHistoryId(int $shops_products_variations_combinations_history_id) : self
	{
		$this->shops_products_variations_combinations_history_id = $shops_products_variations_combinations_history_id;
		return $this;
	}

	public function getShopsProductsVariationsId():  ?int
	{
		return $this->shops_products_variations_id;
	}

	public function setShopsProductsVariationsId(int $shops_products_variations_id) : self
	{
		$this->shops_products_variations_id = $shops_products_variations_id;
		return $this;
	}

	public function getOriginalShopsProductsId():  ?int
	{
		return $this->original_shops_products_id;
	}

	public function setOriginalShopsProductsId(int $original_shops_products_id) : self
	{
		$this->original_shops_products_id = $original_shops_products_id;
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