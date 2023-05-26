<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsListingsTypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsListingsTypesRepository::class)]
#[ORM\Table(name: "shops_products_listings_types")]
class ShopsProductsListingsTypes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_listings_types_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $shops_products_listings_types_code = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $shops_products_listings_types_description = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsListingsTypesId():  ?int
	{
		return $this->shops_products_listings_types_id;
	}

	public function setShopsProductsListingsTypesId(int $shops_products_listings_types_id) : self
	{
		$this->shops_products_listings_types_id = $shops_products_listings_types_id;
		return $this;
	}

	public function getShopsProductsListingsTypesCode():  ?string
	{
		return $this->shops_products_listings_types_code;
	}

	public function setShopsProductsListingsTypesCode(string $shops_products_listings_types_code) : self
	{
		$this->shops_products_listings_types_code = $shops_products_listings_types_code;
		return $this;
	}

	public function getShopsProductsListingsTypesDescription():  ?string
	{
		return $this->shops_products_listings_types_description;
	}

	public function setShopsProductsListingsTypesDescription(string $shops_products_listings_types_description) : self
	{
		$this->shops_products_listings_types_description = $shops_products_listings_types_description;
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