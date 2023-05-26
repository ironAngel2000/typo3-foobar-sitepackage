<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsVariationsDiffsOptionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsVariationsDiffsOptionsRepository::class)]
#[ORM\Table(name: "shops_products_variations_diffs_options")]
class ShopsProductsVariationsDiffsOptions
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_variations_diffs_options_id = null;

	#[ORM\Column]
	private ?int $shops_types_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_shops_products_variations_diffs_options_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsVariationsDiffsOptionsId():  ?int
	{
		return $this->shops_products_variations_diffs_options_id;
	}

	public function setShopsProductsVariationsDiffsOptionsId(int $shops_products_variations_diffs_options_id) : self
	{
		$this->shops_products_variations_diffs_options_id = $shops_products_variations_diffs_options_id;
		return $this;
	}

	public function getShopsTypesId():  ?int
	{
		return $this->shops_types_id;
	}

	public function setShopsTypesId(int $shops_types_id) : self
	{
		$this->shops_types_id = $shops_types_id;
		return $this;
	}

	public function getExternShopsProductsVariationsDiffsOptionsId():  ?string
	{
		return $this->extern_shops_products_variations_diffs_options_id;
	}

	public function setExternShopsProductsVariationsDiffsOptionsId(string $extern_shops_products_variations_diffs_options_id) : self
	{
		$this->extern_shops_products_variations_diffs_options_id = $extern_shops_products_variations_diffs_options_id;
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