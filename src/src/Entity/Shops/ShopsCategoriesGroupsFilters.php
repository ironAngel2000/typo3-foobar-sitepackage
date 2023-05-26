<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsCategoriesGroupsFiltersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsCategoriesGroupsFiltersRepository::class)]
#[ORM\Table(name: "shops_categories_groups_filters")]
class ShopsCategoriesGroupsFilters
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_categories_groups_filters_id = null;

	#[ORM\Column]
	private ?int $shops_categories_groups_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $filter_type = null;

	 #[ORM\Column(length: 32)]
	private ?string $filter_value = null;

	#[ORM\Column(nullable: true)]
	private ?int $products_attributes_id = null;

	 #[ORM\Column(length: 3)]
	private ?string $operator = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsCategoriesGroupsFiltersId():  ?int
	{
		return $this->shops_categories_groups_filters_id;
	}

	public function setShopsCategoriesGroupsFiltersId(int $shops_categories_groups_filters_id) : self
	{
		$this->shops_categories_groups_filters_id = $shops_categories_groups_filters_id;
		return $this;
	}

	public function getShopsCategoriesGroupsId():  ?int
	{
		return $this->shops_categories_groups_id;
	}

	public function setShopsCategoriesGroupsId(int $shops_categories_groups_id) : self
	{
		$this->shops_categories_groups_id = $shops_categories_groups_id;
		return $this;
	}

	public function getFilterType():  ?string
	{
		return $this->filter_type;
	}

	public function setFilterType(string $filter_type) : self
	{
		$this->filter_type = $filter_type;
		return $this;
	}

	public function getFilterValue():  ?string
	{
		return $this->filter_value;
	}

	public function setFilterValue(string $filter_value) : self
	{
		$this->filter_value = $filter_value;
		return $this;
	}

	public function getProductsAttributesId():  ?int
	{
		return $this->products_attributes_id;
	}

	public function setProductsAttributesId(int $products_attributes_id) : self
	{
		$this->products_attributes_id = $products_attributes_id;
		return $this;
	}

	public function getOperator():  ?string
	{
		return $this->operator;
	}

	public function setOperator(string $operator) : self
	{
		$this->operator = $operator;
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