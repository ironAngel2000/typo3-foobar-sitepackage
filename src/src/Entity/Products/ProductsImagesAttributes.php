<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsImagesAttributesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsImagesAttributesRepository::class)]
#[ORM\Table(name: "products_images_attributes")]
class ProductsImagesAttributes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_images_attributes_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_images_attributes_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsImagesAttributesId():  ?int
	{
		return $this->products_images_attributes_id;
	}

	public function setProductsImagesAttributesId(int $products_images_attributes_id) : self
	{
		$this->products_images_attributes_id = $products_images_attributes_id;
		return $this;
	}

	public function getProductsImagesAttributesCode():  ?string
	{
		return $this->products_images_attributes_code;
	}

	public function setProductsImagesAttributesCode(string $products_images_attributes_code) : self
	{
		$this->products_images_attributes_code = $products_images_attributes_code;
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