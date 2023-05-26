<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsClassificationDeliveryTimesTypesDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsClassificationDeliveryTimesTypesDescriptionRepository::class)]
#[ORM\Table(name: "products_classification_delivery_times_types_description")]
class ProductsClassificationDeliveryTimesTypesDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_classification_delivery_times_types_description_id = null;

	#[ORM\Column]
	private ?int $products_classification_delivery_times_types_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsClassificationDeliveryTimesTypesDescriptionId():  ?int
	{
		return $this->products_classification_delivery_times_types_description_id;
	}

	public function setProductsClassificationDeliveryTimesTypesDescriptionId(int $products_classification_delivery_times_types_description_id) : self
	{
		$this->products_classification_delivery_times_types_description_id = $products_classification_delivery_times_types_description_id;
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

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
		return $this;
	}

	public function getName():  ?string
	{
		return $this->name;
	}

	public function setName(string $name) : self
	{
		$this->name = $name;
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