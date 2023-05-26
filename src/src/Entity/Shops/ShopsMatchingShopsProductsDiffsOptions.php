<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsMatchingShopsProductsDiffsOptionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsMatchingShopsProductsDiffsOptionsRepository::class)]
#[ORM\Table(name: "shops_matching_shops_products_diffs_options")]
class ShopsMatchingShopsProductsDiffsOptions
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_matching_groups_diffs_options_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column]
	private ?int $shops_products_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $products_variations_diffs_options_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $shops_products_variations_diffs_options_code = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $shops_products_variations_diffs_options_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsMatchingGroupsDiffsOptionsId():  ?int
	{
		return $this->shops_matching_groups_diffs_options_id;
	}

	public function setShopsMatchingGroupsDiffsOptionsId(int $shops_matching_groups_diffs_options_id) : self
	{
		$this->shops_matching_groups_diffs_options_id = $shops_matching_groups_diffs_options_id;
		return $this;
	}

	public function getShopsId():  ?int
	{
		return $this->shops_id;
	}

	public function setShopsId(int $shops_id) : self
	{
		$this->shops_id = $shops_id;
		return $this;
	}

	public function getShopsProductsId():  ?int
	{
		return $this->shops_products_id;
	}

	public function setShopsProductsId(int $shops_products_id) : self
	{
		$this->shops_products_id = $shops_products_id;
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

	public function getShopsProductsVariationsDiffsOptionsCode():  ?string
	{
		return $this->shops_products_variations_diffs_options_code;
	}

	public function setShopsProductsVariationsDiffsOptionsCode(string $shops_products_variations_diffs_options_code) : self
	{
		$this->shops_products_variations_diffs_options_code = $shops_products_variations_diffs_options_code;
		return $this;
	}

	public function getShopsProductsVariationsDiffsOptionsId():  ?string
	{
		return $this->shops_products_variations_diffs_options_id;
	}

	public function setShopsProductsVariationsDiffsOptionsId(string $shops_products_variations_diffs_options_id) : self
	{
		$this->shops_products_variations_diffs_options_id = $shops_products_variations_diffs_options_id;
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