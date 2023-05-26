<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersGroupsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersGroupsDescriptionRepository::class)]
#[ORM\Table(name: "suppliers_groups_description")]
class SuppliersGroupsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_groups_description_id = null;

	#[ORM\Column]
	private ?int $suppliers_groups_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $suppliers_groups_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getSuppliersGroupsDescriptionId():  ?int
	{
		return $this->suppliers_groups_description_id;
	}

	public function setSuppliersGroupsDescriptionId(int $suppliers_groups_description_id) : self
	{
		$this->suppliers_groups_description_id = $suppliers_groups_description_id;
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

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
		return $this;
	}

	public function getSuppliersGroupsName():  ?string
	{
		return $this->suppliers_groups_name;
	}

	public function setSuppliersGroupsName(string $suppliers_groups_name) : self
	{
		$this->suppliers_groups_name = $suppliers_groups_name;
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