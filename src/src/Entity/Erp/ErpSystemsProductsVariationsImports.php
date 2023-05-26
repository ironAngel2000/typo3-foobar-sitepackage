<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsProductsVariationsImportsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsProductsVariationsImportsRepository::class)]
#[ORM\Table(name: "erp_systems_products_variations_imports")]
class ErpSystemsProductsVariationsImports
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_products_variations_imports_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $products_variations_hash = null;

	#[ORM\Column(nullable: true)]
	private ?string $products_variations_update_hash = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $products_variations_attributes_hash = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $products_variations_images_hash = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $products_variations_media_hash = null;

	#[ORM\Column(nullable: true)]
	private ?string $products_variations_prices_hash = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $products_variations_stock_hash = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsProductsVariationsImportsId():  ?int
	{
		return $this->erp_systems_products_variations_imports_id;
	}

	public function setErpSystemsProductsVariationsImportsId(int $erp_systems_products_variations_imports_id) : self
	{
		$this->erp_systems_products_variations_imports_id = $erp_systems_products_variations_imports_id;
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

	public function getProductsVariationsId():  ?int
	{
		return $this->products_variations_id;
	}

	public function setProductsVariationsId(int $products_variations_id) : self
	{
		$this->products_variations_id = $products_variations_id;
		return $this;
	}

	public function getProductsVariationsHash():  ?string
	{
		return $this->products_variations_hash;
	}

	public function setProductsVariationsHash(string $products_variations_hash) : self
	{
		$this->products_variations_hash = $products_variations_hash;
		return $this;
	}

	public function getProductsVariationsUpdateHash():  ?string
	{
		return $this->products_variations_update_hash;
	}

	public function setProductsVariationsUpdateHash(string $products_variations_update_hash) : self
	{
		$this->products_variations_update_hash = $products_variations_update_hash;
		return $this;
	}

	public function getProductsVariationsAttributesHash():  ?string
	{
		return $this->products_variations_attributes_hash;
	}

	public function setProductsVariationsAttributesHash(string $products_variations_attributes_hash) : self
	{
		$this->products_variations_attributes_hash = $products_variations_attributes_hash;
		return $this;
	}

	public function getProductsVariationsImagesHash():  ?string
	{
		return $this->products_variations_images_hash;
	}

	public function setProductsVariationsImagesHash(string $products_variations_images_hash) : self
	{
		$this->products_variations_images_hash = $products_variations_images_hash;
		return $this;
	}

	public function getProductsVariationsMediaHash():  ?string
	{
		return $this->products_variations_media_hash;
	}

	public function setProductsVariationsMediaHash(string $products_variations_media_hash) : self
	{
		$this->products_variations_media_hash = $products_variations_media_hash;
		return $this;
	}

	public function getProductsVariationsPricesHash():  ?string
	{
		return $this->products_variations_prices_hash;
	}

	public function setProductsVariationsPricesHash(string $products_variations_prices_hash) : self
	{
		$this->products_variations_prices_hash = $products_variations_prices_hash;
		return $this;
	}

	public function getProductsVariationsStockHash():  ?string
	{
		return $this->products_variations_stock_hash;
	}

	public function setProductsVariationsStockHash(string $products_variations_stock_hash) : self
	{
		$this->products_variations_stock_hash = $products_variations_stock_hash;
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