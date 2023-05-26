<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsVariationsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsVariationsDescriptionRepository::class)]
#[ORM\Table(name: "products_variations_description")]
class ProductsVariationsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_variations_description_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	#[ORM\Column(length: 1024, nullable: true)]
	private ?string $products_variations_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_variations_name_short = null;

	#[ORM\Column(nullable: true)]
	private ?string $products_variations_description = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_variations_description_short = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_variations_url = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_variations_link_self = null;

	 #[ORM\Column(length: 255)]
	private ?string $packing_unit = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsVariationsDescriptionId():  ?int
	{
		return $this->products_variations_description_id;
	}

	public function setProductsVariationsDescriptionId(int $products_variations_description_id) : self
	{
		$this->products_variations_description_id = $products_variations_description_id;
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

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
		return $this;
	}

	public function getProductsVariationsName():  ?string
	{
		return $this->products_variations_name;
	}

	public function setProductsVariationsName(string $products_variations_name) : self
	{
		$this->products_variations_name = $products_variations_name;
		return $this;
	}

	public function getProductsVariationsNameShort():  ?string
	{
		return $this->products_variations_name_short;
	}

	public function setProductsVariationsNameShort(string $products_variations_name_short) : self
	{
		$this->products_variations_name_short = $products_variations_name_short;
		return $this;
	}

	public function getProductsVariationsDescription():  ?string
	{
		return $this->products_variations_description;
	}

	public function setProductsVariationsDescription(string $products_variations_description) : self
	{
		$this->products_variations_description = $products_variations_description;
		return $this;
	}

	public function getProductsVariationsDescriptionShort():  ?string
	{
		return $this->products_variations_description_short;
	}

	public function setProductsVariationsDescriptionShort(string $products_variations_description_short) : self
	{
		$this->products_variations_description_short = $products_variations_description_short;
		return $this;
	}

	public function getProductsVariationsUrl():  ?string
	{
		return $this->products_variations_url;
	}

	public function setProductsVariationsUrl(string $products_variations_url) : self
	{
		$this->products_variations_url = $products_variations_url;
		return $this;
	}

	public function getProductsVariationsLinkSelf():  ?string
	{
		return $this->products_variations_link_self;
	}

	public function setProductsVariationsLinkSelf(string $products_variations_link_self) : self
	{
		$this->products_variations_link_self = $products_variations_link_self;
		return $this;
	}

	public function getPackingUnit():  ?string
	{
		return $this->packing_unit;
	}

	public function setPackingUnit(string $packing_unit) : self
	{
		$this->packing_unit = $packing_unit;
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