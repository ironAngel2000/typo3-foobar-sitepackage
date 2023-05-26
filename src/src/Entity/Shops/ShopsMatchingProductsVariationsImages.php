<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsMatchingProductsVariationsImagesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsMatchingProductsVariationsImagesRepository::class)]
#[ORM\Table(name: "shops_matching_products_variations_images")]
class ShopsMatchingProductsVariationsImages
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_matching_products_variations_images_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_products_variations_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $products_variations_images_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $shops_products_variations_images_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsMatchingProductsVariationsImagesId():  ?int
	{
		return $this->shops_matching_products_variations_images_id;
	}

	public function setShopsMatchingProductsVariationsImagesId(int $shops_matching_products_variations_images_id) : self
	{
		$this->shops_matching_products_variations_images_id = $shops_matching_products_variations_images_id;
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

	public function getShopsProductsVariationsId():  ?int
	{
		return $this->shops_products_variations_id;
	}

	public function setShopsProductsVariationsId(int $shops_products_variations_id) : self
	{
		$this->shops_products_variations_id = $shops_products_variations_id;
		return $this;
	}

	public function getProductsVariationsImagesId():  ?int
	{
		return $this->products_variations_images_id;
	}

	public function setProductsVariationsImagesId(int $products_variations_images_id) : self
	{
		$this->products_variations_images_id = $products_variations_images_id;
		return $this;
	}

	public function getShopsProductsVariationsImagesCode():  ?string
	{
		return $this->shops_products_variations_images_code;
	}

	public function setShopsProductsVariationsImagesCode(string $shops_products_variations_images_code) : self
	{
		$this->shops_products_variations_images_code = $shops_products_variations_images_code;
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