<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsToShopsCategoriesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsToShopsCategoriesRepository::class)]
#[ORM\Table(name: "shops_products_to_shops_categories")]
class ShopsProductsToShopsCategories
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_to_shops_categories_id = null;

	#[ORM\Column]
	private ?int $shops_products_id = null;

	#[ORM\Column]
	private ?int $shops_categories_id = null;

	#[ORM\Column]
	private ?int $filter_passed = null;

	#[ORM\Column]
	private ?int $manual_assignment = null;

	#[ORM\Column]
	private ?int $to_delete = null;

	#[ORM\Column(nullable: true)]
	private ?int $sort_order = null;

	#[ORM\Column(nullable: true)]
	private ?int $categories_sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsToShopsCategoriesId():  ?int
	{
		return $this->shops_products_to_shops_categories_id;
	}

	public function setShopsProductsToShopsCategoriesId(int $shops_products_to_shops_categories_id) : self
	{
		$this->shops_products_to_shops_categories_id = $shops_products_to_shops_categories_id;
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

	public function getShopsCategoriesId():  ?int
	{
		return $this->shops_categories_id;
	}

	public function setShopsCategoriesId(int $shops_categories_id) : self
	{
		$this->shops_categories_id = $shops_categories_id;
		return $this;
	}

	public function getFilterPassed():  ?int
	{
		return $this->filter_passed;
	}

	public function setFilterPassed(int $filter_passed) : self
	{
		$this->filter_passed = $filter_passed;
		return $this;
	}

	public function getManualAssignment():  ?int
	{
		return $this->manual_assignment;
	}

	public function setManualAssignment(int $manual_assignment) : self
	{
		$this->manual_assignment = $manual_assignment;
		return $this;
	}

	public function getToDelete():  ?int
	{
		return $this->to_delete;
	}

	public function setToDelete(int $to_delete) : self
	{
		$this->to_delete = $to_delete;
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

	public function getCategoriesSortOrder():  ?int
	{
		return $this->categories_sort_order;
	}

	public function setCategoriesSortOrder(int $categories_sort_order) : self
	{
		$this->categories_sort_order = $categories_sort_order;
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