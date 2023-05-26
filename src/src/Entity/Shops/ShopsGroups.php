<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsGroupsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsGroupsRepository::class)]
#[ORM\Table(name: "shops_groups")]
class ShopsGroups
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_groups_id = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsGroupsId():  ?int
	{
		return $this->shops_groups_id;
	}

	public function setShopsGroupsId(int $shops_groups_id) : self
	{
		$this->shops_groups_id = $shops_groups_id;
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