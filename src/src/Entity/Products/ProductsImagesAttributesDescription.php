<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsImagesAttributesDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsImagesAttributesDescriptionRepository::class)]
#[ORM\Table(name: "products_images_attributes_description")]
class ProductsImagesAttributesDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_images_attributes_description_id = null;

	#[ORM\Column]
	private ?int $products_images_attributes_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $products_images_attributes_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsImagesAttributesDescriptionId():  ?int
	{
		return $this->products_images_attributes_description_id;
	}

	public function setProductsImagesAttributesDescriptionId(int $products_images_attributes_description_id) : self
	{
		$this->products_images_attributes_description_id = $products_images_attributes_description_id;
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

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
		return $this;
	}

	public function getProductsImagesAttributesName():  ?string
	{
		return $this->products_images_attributes_name;
	}

	public function setProductsImagesAttributesName(string $products_images_attributes_name) : self
	{
		$this->products_images_attributes_name = $products_images_attributes_name;
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