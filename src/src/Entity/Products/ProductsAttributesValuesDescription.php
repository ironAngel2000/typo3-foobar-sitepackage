<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsAttributesValuesDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsAttributesValuesDescriptionRepository::class)]
#[ORM\Table(name: "products_attributes_values_description")]
class ProductsAttributesValuesDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_attributes_values_description_id = null;

	#[ORM\Column]
	private ?int $products_attributes_values_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_attributes_values_name = null;

	#[ORM\Column(nullable: true)]
	private ?string $products_attributes_values_text = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsAttributesValuesDescriptionId():  ?int
	{
		return $this->products_attributes_values_description_id;
	}

	public function setProductsAttributesValuesDescriptionId(int $products_attributes_values_description_id) : self
	{
		$this->products_attributes_values_description_id = $products_attributes_values_description_id;
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

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
		return $this;
	}

	public function getProductsAttributesValuesName():  ?string
	{
		return $this->products_attributes_values_name;
	}

	public function setProductsAttributesValuesName(string $products_attributes_values_name) : self
	{
		$this->products_attributes_values_name = $products_attributes_values_name;
		return $this;
	}

	public function getProductsAttributesValuesText():  ?string
	{
		return $this->products_attributes_values_text;
	}

	public function setProductsAttributesValuesText(string $products_attributes_values_text) : self
	{
		$this->products_attributes_values_text = $products_attributes_values_text;
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