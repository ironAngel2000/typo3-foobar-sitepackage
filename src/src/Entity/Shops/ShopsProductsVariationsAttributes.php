<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsVariationsAttributesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsVariationsAttributesRepository::class)]
#[ORM\Table(name: "shops_products_variations_attributes")]
class ShopsProductsVariationsAttributes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_variations_attributes_id = null;

	#[ORM\Column]
	private ?int $shops_products_variations_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $attributes_key = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $attributes_value = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsVariationsAttributesId():  ?int
	{
		return $this->shops_products_variations_attributes_id;
	}

	public function setShopsProductsVariationsAttributesId(int $shops_products_variations_attributes_id) : self
	{
		$this->shops_products_variations_attributes_id = $shops_products_variations_attributes_id;
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

	public function getAttributesKey():  ?string
	{
		return $this->attributes_key;
	}

	public function setAttributesKey(string $attributes_key) : self
	{
		$this->attributes_key = $attributes_key;
		return $this;
	}

	public function getAttributesValue():  ?string
	{
		return $this->attributes_value;
	}

	public function setAttributesValue(string $attributes_value) : self
	{
		$this->attributes_value = $attributes_value;
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