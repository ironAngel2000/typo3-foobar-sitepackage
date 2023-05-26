<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsToProductsArrangementsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsToProductsArrangementsDescriptionRepository::class)]
#[ORM\Table(name: "products_to_products_arrangements_description")]
class ProductsToProductsArrangementsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_to_products_arrangements_description_id = null;

	#[ORM\Column]
	private ?int $products_to_products_arrangements_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $arrangements_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsToProductsArrangementsDescriptionId():  ?int
	{
		return $this->products_to_products_arrangements_description_id;
	}

	public function setProductsToProductsArrangementsDescriptionId(int $products_to_products_arrangements_description_id) : self
	{
		$this->products_to_products_arrangements_description_id = $products_to_products_arrangements_description_id;
		return $this;
	}

	public function getProductsToProductsArrangementsId():  ?int
	{
		return $this->products_to_products_arrangements_id;
	}

	public function setProductsToProductsArrangementsId(int $products_to_products_arrangements_id) : self
	{
		$this->products_to_products_arrangements_id = $products_to_products_arrangements_id;
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

	public function getArrangementsName():  ?string
	{
		return $this->arrangements_name;
	}

	public function setArrangementsName(string $arrangements_name) : self
	{
		$this->arrangements_name = $arrangements_name;
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