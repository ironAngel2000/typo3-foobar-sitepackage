<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsDescriptionBulletsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsDescriptionBulletsRepository::class)]
#[ORM\Table(name: "products_description_bullets")]
class ProductsDescriptionBullets
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_description_bullets_id = null;

	#[ORM\Column]
	private ?int $products_description_id = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column]
	private ?string $bullet = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsDescriptionBulletsId():  ?int
	{
		return $this->products_description_bullets_id;
	}

	public function setProductsDescriptionBulletsId(int $products_description_bullets_id) : self
	{
		$this->products_description_bullets_id = $products_description_bullets_id;
		return $this;
	}

	public function getProductsDescriptionId():  ?int
	{
		return $this->products_description_id;
	}

	public function setProductsDescriptionId(int $products_description_id) : self
	{
		$this->products_description_id = $products_description_id;
		return $this;
	}

	public function getSortOrder():  ?int
	{
		return $this->sort_order;
	}

	public function setSortOrder(int $sort_order) : self
	{
		$this->sort_order = $sort_order;
		return $this;
	}

	public function getBullet():  ?string
	{
		return $this->bullet;
	}

	public function setBullet(string $bullet) : self
	{
		$this->bullet = $bullet;
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