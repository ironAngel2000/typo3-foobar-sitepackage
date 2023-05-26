<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsClassificationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsClassificationRepository::class)]
#[ORM\Table(name: "products_classification")]
class ProductsClassification
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_classification_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $products_classification_code = null;

	#[ORM\Column]
	private ?int $products_classification_availability_types_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $products_classification_delivery_times_types_id = null;

	#[ORM\Column]
	private ?string $sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsClassificationId():  ?int
	{
		return $this->products_classification_id;
	}

	public function setProductsClassificationId(int $products_classification_id) : self
	{
		$this->products_classification_id = $products_classification_id;
		return $this;
	}

	public function getProductsClassificationCode():  ?string
	{
		return $this->products_classification_code;
	}

	public function setProductsClassificationCode(string $products_classification_code) : self
	{
		$this->products_classification_code = $products_classification_code;
		return $this;
	}

	public function getProductsClassificationAvailabilityTypesId():  ?int
	{
		return $this->products_classification_availability_types_id;
	}

	public function setProductsClassificationAvailabilityTypesId(int $products_classification_availability_types_id) : self
	{
		$this->products_classification_availability_types_id = $products_classification_availability_types_id;
		return $this;
	}

	public function getProductsClassificationDeliveryTimesTypesId():  ?int
	{
		return $this->products_classification_delivery_times_types_id;
	}

	public function setProductsClassificationDeliveryTimesTypesId(int $products_classification_delivery_times_types_id) : self
	{
		$this->products_classification_delivery_times_types_id = $products_classification_delivery_times_types_id;
		return $this;
	}

	public function getSortOrder():  ?string
	{
		return $this->sort_order;
	}

	public function setSortOrder(string $sort_order) : self
	{
		$this->sort_order = $sort_order;
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