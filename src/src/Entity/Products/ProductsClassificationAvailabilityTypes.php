<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsClassificationAvailabilityTypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsClassificationAvailabilityTypesRepository::class)]
#[ORM\Table(name: "products_classification_availability_types")]
class ProductsClassificationAvailabilityTypes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_classification_availability_types_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $availability_types_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsClassificationAvailabilityTypesId():  ?int
	{
		return $this->products_classification_availability_types_id;
	}

	public function setProductsClassificationAvailabilityTypesId(int $products_classification_availability_types_id) : self
	{
		$this->products_classification_availability_types_id = $products_classification_availability_types_id;
		return $this;
	}

	public function getAvailabilityTypesCode():  ?string
	{
		return $this->availability_types_code;
	}

	public function setAvailabilityTypesCode(string $availability_types_code) : self
	{
		$this->availability_types_code = $availability_types_code;
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