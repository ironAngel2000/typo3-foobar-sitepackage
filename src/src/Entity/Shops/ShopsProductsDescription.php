<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsDescriptionRepository::class)]
#[ORM\Table(name: "shops_products_description")]
class ShopsProductsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_description_id = null;

	#[ORM\Column]
	private ?int $shops_products_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	#[ORM\Column(length: 500, nullable: true)]
	private ?string $products_name = null;

	#[ORM\Column(nullable: true)]
	private ?string $products_description = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_description_short = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_raw_link = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_link = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsDescriptionId():  ?int
	{
		return $this->shops_products_description_id;
	}

	public function setShopsProductsDescriptionId(int $shops_products_description_id) : self
	{
		$this->shops_products_description_id = $shops_products_description_id;
		return $this;
	}

	public function getShopsProductsId():  ?int
	{
		return $this->shops_products_id;
	}

	public function setShopsProductsId(int $shops_products_id) : self
	{
		$this->shops_products_id = $shops_products_id;
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

	public function getProductsName():  ?string
	{
		return $this->products_name;
	}

	public function setProductsName(string $products_name) : self
	{
		$this->products_name = $products_name;
		return $this;
	}

	public function getProductsDescription():  ?string
	{
		return $this->products_description;
	}

	public function setProductsDescription(string $products_description) : self
	{
		$this->products_description = $products_description;
		return $this;
	}

	public function getProductsDescriptionShort():  ?string
	{
		return $this->products_description_short;
	}

	public function setProductsDescriptionShort(string $products_description_short) : self
	{
		$this->products_description_short = $products_description_short;
		return $this;
	}

	public function getProductsRawLink():  ?string
	{
		return $this->products_raw_link;
	}

	public function setProductsRawLink(string $products_raw_link) : self
	{
		$this->products_raw_link = $products_raw_link;
		return $this;
	}

	public function getProductsLink():  ?string
	{
		return $this->products_link;
	}

	public function setProductsLink(string $products_link) : self
	{
		$this->products_link = $products_link;
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