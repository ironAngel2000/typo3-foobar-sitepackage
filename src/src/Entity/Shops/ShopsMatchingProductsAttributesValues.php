<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsMatchingProductsAttributesValuesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsMatchingProductsAttributesValuesRepository::class)]
#[ORM\Table(name: "shops_matching_products_attributes_values")]
class ShopsMatchingProductsAttributesValues
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_matching_products_attributes_values_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_matching_products_attributes_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $products_attributes_values_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_categories_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $shops_products_attributes_values_code = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $shops_products_attributes_values_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsMatchingProductsAttributesValuesId():  ?int
	{
		return $this->shops_matching_products_attributes_values_id;
	}

	public function setShopsMatchingProductsAttributesValuesId(int $shops_matching_products_attributes_values_id) : self
	{
		$this->shops_matching_products_attributes_values_id = $shops_matching_products_attributes_values_id;
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

	public function getShopsMatchingProductsAttributesId():  ?int
	{
		return $this->shops_matching_products_attributes_id;
	}

	public function setShopsMatchingProductsAttributesId(int $shops_matching_products_attributes_id) : self
	{
		$this->shops_matching_products_attributes_id = $shops_matching_products_attributes_id;
		return $this;
	}

	public function getProductsAttributesValuesId():  ?int
	{
		return $this->products_attributes_values_id;
	}

	public function setProductsAttributesValuesId(int $products_attributes_values_id) : self
	{
		$this->products_attributes_values_id = $products_attributes_values_id;
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

	public function getShopsProductsAttributesValuesCode():  ?string
	{
		return $this->shops_products_attributes_values_code;
	}

	public function setShopsProductsAttributesValuesCode(string $shops_products_attributes_values_code) : self
	{
		$this->shops_products_attributes_values_code = $shops_products_attributes_values_code;
		return $this;
	}

	public function getShopsProductsAttributesValuesId():  ?string
	{
		return $this->shops_products_attributes_values_id;
	}

	public function setShopsProductsAttributesValuesId(string $shops_products_attributes_values_id) : self
	{
		$this->shops_products_attributes_values_id = $shops_products_attributes_values_id;
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