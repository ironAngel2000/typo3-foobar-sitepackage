<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersCatalogsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersCatalogsDescriptionRepository::class)]
#[ORM\Table(name: "suppliers_catalogs_description")]
class SuppliersCatalogsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_catalogs_description_id = null;

	#[ORM\Column]
	private ?int $suppliers_catalogs_id = null;

	#[ORM\Column]
	private ?int $suppliers_catalogs_matching_languages_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $suppliers_item_name = null;

	#[ORM\Column(nullable: true)]
	private ?string $suppliers_item_name2 = null;

	#[ORM\Column(nullable: true)]
	private ?string $suppliers_item_name3 = null;

	#[ORM\Column(nullable: true)]
	private ?string $description = null;

	#[ORM\Column(nullable: true)]
	private ?string $material = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column]
	private ?int $last_updater = null;

	public function getSuppliersCatalogsDescriptionId():  ?int
	{
		return $this->suppliers_catalogs_description_id;
	}

	public function setSuppliersCatalogsDescriptionId(int $suppliers_catalogs_description_id) : self
	{
		$this->suppliers_catalogs_description_id = $suppliers_catalogs_description_id;
		return $this;
	}

	public function getSuppliersCatalogsId():  ?int
	{
		return $this->suppliers_catalogs_id;
	}

	public function setSuppliersCatalogsId(int $suppliers_catalogs_id) : self
	{
		$this->suppliers_catalogs_id = $suppliers_catalogs_id;
		return $this;
	}

	public function getSuppliersCatalogsMatchingLanguagesId():  ?int
	{
		return $this->suppliers_catalogs_matching_languages_id;
	}

	public function setSuppliersCatalogsMatchingLanguagesId(int $suppliers_catalogs_matching_languages_id) : self
	{
		$this->suppliers_catalogs_matching_languages_id = $suppliers_catalogs_matching_languages_id;
		return $this;
	}

	public function getSuppliersItemName():  ?string
	{
		return $this->suppliers_item_name;
	}

	public function setSuppliersItemName(string $suppliers_item_name) : self
	{
		$this->suppliers_item_name = $suppliers_item_name;
		return $this;
	}

	public function getSuppliersItemName2():  ?string
	{
		return $this->suppliers_item_name2;
	}

	public function setSuppliersItemName2(string $suppliers_item_name2) : self
	{
		$this->suppliers_item_name2 = $suppliers_item_name2;
		return $this;
	}

	public function getSuppliersItemName3():  ?string
	{
		return $this->suppliers_item_name3;
	}

	public function setSuppliersItemName3(string $suppliers_item_name3) : self
	{
		$this->suppliers_item_name3 = $suppliers_item_name3;
		return $this;
	}

	public function getDescription():  ?string
	{
		return $this->description;
	}

	public function setDescription(string $description) : self
	{
		$this->description = $description;
		return $this;
	}

	public function getMaterial():  ?string
	{
		return $this->material;
	}

	public function setMaterial(string $material) : self
	{
		$this->material = $material;
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