<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsImagesAttributesValuesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsImagesAttributesValuesRepository::class)]
#[ORM\Table(name: "products_images_attributes_values")]
class ProductsImagesAttributesValues
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_images_attributes_values_id = null;

	#[ORM\Column]
	private ?int $products_images_attributes_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsImagesAttributesValuesId():  ?int
	{
		return $this->products_images_attributes_values_id;
	}

	public function setProductsImagesAttributesValuesId(int $products_images_attributes_values_id) : self
	{
		$this->products_images_attributes_values_id = $products_images_attributes_values_id;
		return $this;
	}

	public function getProductsImagesAttributesId():  ?int
	{
		return $this->products_images_attributes_id;
	}

	public function setProductsImagesAttributesId(int $products_images_attributes_id) : self
	{
		$this->products_images_attributes_id = $products_images_attributes_id;
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