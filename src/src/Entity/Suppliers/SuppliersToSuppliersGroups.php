<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersToSuppliersGroupsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersToSuppliersGroupsRepository::class)]
#[ORM\Table(name: "suppliers_to_suppliers_groups")]
class SuppliersToSuppliersGroups
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_to_suppliers_groups_id = null;

	#[ORM\Column]
	private ?int $suppliers_id = null;

	#[ORM\Column]
	private ?int $suppliers_groups_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getSuppliersToSuppliersGroupsId():  ?int
	{
		return $this->suppliers_to_suppliers_groups_id;
	}

	public function setSuppliersToSuppliersGroupsId(int $suppliers_to_suppliers_groups_id) : self
	{
		$this->suppliers_to_suppliers_groups_id = $suppliers_to_suppliers_groups_id;
		return $this;
	}

	public function getSuppliersId():  ?int
	{
		return $this->suppliers_id;
	}

	public function setSuppliersId(int $suppliers_id) : self
	{
		$this->suppliers_id = $suppliers_id;
		return $this;
	}

	public function getSuppliersGroupsId():  ?int
	{
		return $this->suppliers_groups_id;
	}

	public function setSuppliersGroupsId(int $suppliers_groups_id) : self
	{
		$this->suppliers_groups_id = $suppliers_groups_id;
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