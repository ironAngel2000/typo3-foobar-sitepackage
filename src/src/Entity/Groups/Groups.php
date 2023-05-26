<?php

namespace App\Entity\Groups;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Groups\GroupsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: GroupsRepository::class)]
#[ORM\Table(name: "groups")]
class Groups
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $groups_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $extern_groups_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $parent_id = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column(nullable: true)]
	private ?int $products_attributes_sets_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getGroupsId():  ?int
	{
		return $this->groups_id;
	}

	public function setGroupsId(int $groups_id) : self
	{
		$this->groups_id = $groups_id;
		return $this;
	}

	public function getExternGroupsId():  ?string
	{
		return $this->extern_groups_id;
	}

	public function setExternGroupsId(string $extern_groups_id) : self
	{
		$this->extern_groups_id = $extern_groups_id;
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

	public function getProductsAttributesSetsId():  ?int
	{
		return $this->products_attributes_sets_id;
	}

	public function setProductsAttributesSetsId(int $products_attributes_sets_id) : self
	{
		$this->products_attributes_sets_id = $products_attributes_sets_id;
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