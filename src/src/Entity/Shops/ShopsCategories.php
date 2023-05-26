<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsCategoriesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsCategoriesRepository::class)]
#[ORM\Table(name: "shops_categories")]
class ShopsCategories
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_categories_id = null;

	#[ORM\Column(length: 100, nullable: true)]
	private ?string $extern_shops_categories_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column]
	private ?string $shops_categories_status = null;

	#[ORM\Column(nullable: true)]
	private ?int $parent_id = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column]
	private ?string $secondary = null;

	#[ORM\Column]
	private ?string $categories_filters_outdated = null;

	#[ORM\Column]
	private ?string $is_deleted = null;

	#[ORM\Column]
	private ?string $has_shops_products = null;

	#[ORM\Column]
	private ?string $has_groups = null;

	#[ORM\Column]
	private ?string $to_delete = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsCategoriesId():  ?int
	{
		return $this->shops_categories_id;
	}

	public function setShopsCategoriesId(int $shops_categories_id) : self
	{
		$this->shops_categories_id = $shops_categories_id;
		return $this;
	}

	public function getExternShopsCategoriesId():  ?string
	{
		return $this->extern_shops_categories_id;
	}

	public function setExternShopsCategoriesId(string $extern_shops_categories_id) : self
	{
		$this->extern_shops_categories_id = $extern_shops_categories_id;
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

	public function getShopsCategoriesStatus():  ?string
	{
		return $this->shops_categories_status;
	}

	public function setShopsCategoriesStatus(string $shops_categories_status) : self
	{
		$this->shops_categories_status = $shops_categories_status;
		return $this;
	}

	public function getParentId():  ?int
	{
		return $this->parent_id;
	}

	public function setParentId(int $parent_id) : self
	{
		$this->parent_id = $parent_id;
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

	public function getSecondary():  ?string
	{
		return $this->secondary;
	}

	public function setSecondary(string $secondary) : self
	{
		$this->secondary = $secondary;
		return $this;
	}

	public function getCategoriesFiltersOutdated():  ?string
	{
		return $this->categories_filters_outdated;
	}

	public function setCategoriesFiltersOutdated(string $categories_filters_outdated) : self
	{
		$this->categories_filters_outdated = $categories_filters_outdated;
		return $this;
	}

	public function getIsDeleted():  ?string
	{
		return $this->is_deleted;
	}

	public function setIsDeleted(string $is_deleted) : self
	{
		$this->is_deleted = $is_deleted;
		return $this;
	}

	public function getHasShopsProducts():  ?string
	{
		return $this->has_shops_products;
	}

	public function setHasShopsProducts(string $has_shops_products) : self
	{
		$this->has_shops_products = $has_shops_products;
		return $this;
	}

	public function getHasGroups():  ?string
	{
		return $this->has_groups;
	}

	public function setHasGroups(string $has_groups) : self
	{
		$this->has_groups = $has_groups;
		return $this;
	}

	public function getToDelete():  ?string
	{
		return $this->to_delete;
	}

	public function setToDelete(string $to_delete) : self
	{
		$this->to_delete = $to_delete;
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