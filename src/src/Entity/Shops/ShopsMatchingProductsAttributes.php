<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsMatchingProductsAttributesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsMatchingProductsAttributesRepository::class)]
#[ORM\Table(name: "shops_matching_products_attributes")]
class ShopsMatchingProductsAttributes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_matching_products_attributes_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $products_attributes_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_categories_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $shops_products_attributes_code = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $shops_products_attributes_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsMatchingProductsAttributesId():  ?int
	{
		return $this->shops_matching_products_attributes_id;
	}

	public function setShopsMatchingProductsAttributesId(int $shops_matching_products_attributes_id) : self
	{
		$this->shops_matching_products_attributes_id = $shops_matching_products_attributes_id;
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

	public function getProductsAttributesId():  ?int
	{
		return $this->products_attributes_id;
	}

	public function setProductsAttributesId(int $products_attributes_id) : self
	{
		$this->products_attributes_id = $products_attributes_id;
		return $this;
	}

	public function getShopsCategoriesId():  ?int
	{
		return $this->shops_categories_id;
	}

	public function setShopsCategoriesId(int $shops_categories_id) : self
	{
		$this->shops_categories_id = $shops_categories_id;
		return $this;
	}

	public function getShopsProductsAttributesCode():  ?string
	{
		return $this->shops_products_attributes_code;
	}

	public function setShopsProductsAttributesCode(string $shops_products_attributes_code) : self
	{
		$this->shops_products_attributes_code = $shops_products_attributes_code;
		return $this;
	}

	public function getShopsProductsAttributesId():  ?string
	{
		return $this->shops_products_attributes_id;
	}

	public function setShopsProductsAttributesId(string $shops_products_attributes_id) : self
	{
		$this->shops_products_attributes_id = $shops_products_attributes_id;
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