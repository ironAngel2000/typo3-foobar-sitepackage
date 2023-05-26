<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsVariationsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsVariationsDescriptionRepository::class)]
#[ORM\Table(name: "shops_products_variations_description")]
class ShopsProductsVariationsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_variations_description_id = null;

	#[ORM\Column]
	private ?int $shops_products_variations_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $products_variations_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_variations_description_short = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_variations_raw_link = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_variations_link = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsVariationsDescriptionId():  ?int
	{
		return $this->shops_products_variations_description_id;
	}

	public function setShopsProductsVariationsDescriptionId(int $shops_products_variations_description_id) : self
	{
		$this->shops_products_variations_description_id = $shops_products_variations_description_id;
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

	public function getProductsVariationsDescriptionShort():  ?string
	{
		return $this->products_variations_description_short;
	}

	public function setProductsVariationsDescriptionShort(string $products_variations_description_short) : self
	{
		$this->products_variations_description_short = $products_variations_description_short;
		return $this;
	}

	public function getProductsVariationsRawLink():  ?string
	{
		return $this->products_variations_raw_link;
	}

	public function setProductsVariationsRawLink(string $products_variations_raw_link) : self
	{
		$this->products_variations_raw_link = $products_variations_raw_link;
		return $this;
	}

	public function getProductsVariationsLink():  ?string
	{
		return $this->products_variations_link;
	}

	public function setProductsVariationsLink(string $products_variations_link) : self
	{
		$this->products_variations_link = $products_variations_link;
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