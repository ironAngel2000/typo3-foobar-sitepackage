<?php

namespace App\Entity\Virtual;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Virtual\VirtualShopsProductsVariationsDiffsOptionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: VirtualShopsProductsVariationsDiffsOptionsRepository::class)]
#[ORM\Table(name: "virtual_shops_products_variations_diffs_options")]
class VirtualShopsProductsVariationsDiffsOptions
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $virtual_shops_products_variations_diffs_options_id = null;

	#[ORM\Column]
	private ?int $shops_products_variations_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $diffs_options_name = null;

	 #[ORM\Column(length: 255)]
	private ?string $diffs_options_values = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getVirtualShopsProductsVariationsDiffsOptionsId():  ?int
	{
		return $this->virtual_shops_products_variations_diffs_options_id;
	}

	public function setVirtualShopsProductsVariationsDiffsOptionsId(int $virtual_shops_products_variations_diffs_options_id) : self
	{
		$this->virtual_shops_products_variations_diffs_options_id = $virtual_shops_products_variations_diffs_options_id;
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

	public function getDiffsOptionsName():  ?string
	{
		return $this->diffs_options_name;
	}

	public function setDiffsOptionsName(string $diffs_options_name) : self
	{
		$this->diffs_options_name = $diffs_options_name;
		return $this;
	}

	public function getDiffsOptionsValues():  ?string
	{
		return $this->diffs_options_values;
	}

	public function setDiffsOptionsValues(string $diffs_options_values) : self
	{
		$this->diffs_options_values = $diffs_options_values;
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