<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsMatchingProductsVariationsDiffsOptionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsMatchingProductsVariationsDiffsOptionsRepository::class)]
#[ORM\Table(name: "erp_systems_matching_products_variations_diffs_options")]
class ErpSystemsMatchingProductsVariationsDiffsOptions
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_matching_products_variations_diffs_options_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column]
	private ?int $products_variations_diffs_options_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $erp_products_variations_diffs_options_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsMatchingProductsVariationsDiffsOptionsId():  ?int
	{
		return $this->erp_systems_matching_products_variations_diffs_options_id;
	}

	public function setErpSystemsMatchingProductsVariationsDiffsOptionsId(int $erp_systems_matching_products_variations_diffs_options_id) : self
	{
		$this->erp_systems_matching_products_variations_diffs_options_id = $erp_systems_matching_products_variations_diffs_options_id;
		return $this;
	}

	public function getErpSystemsId():  ?int
	{
		return $this->erp_systems_id;
	}

	public function setErpSystemsId(int $erp_systems_id) : self
	{
		$this->erp_systems_id = $erp_systems_id;
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

	public function getErpProductsVariationsDiffsOptionsCode():  ?string
	{
		return $this->erp_products_variations_diffs_options_code;
	}

	public function setErpProductsVariationsDiffsOptionsCode(string $erp_products_variations_diffs_options_code) : self
	{
		$this->erp_products_variations_diffs_options_code = $erp_products_variations_diffs_options_code;
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