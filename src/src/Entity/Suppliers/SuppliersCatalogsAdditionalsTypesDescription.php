<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersCatalogsAdditionalsTypesDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersCatalogsAdditionalsTypesDescriptionRepository::class)]
#[ORM\Table(name: "suppliers_catalogs_additionals_types_description")]
class SuppliersCatalogsAdditionalsTypesDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_catalogs_additionals_types_description_id = null;

	#[ORM\Column]
	private ?int $suppliers_catalogs_additionals_types_id = null;

	#[ORM\Column]
	private ?int $suppliers_catalogs_matching_languages_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $additionals_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column]
	private ?int $last_updater = null;

	public function getSuppliersCatalogsAdditionalsTypesDescriptionId():  ?int
	{
		return $this->suppliers_catalogs_additionals_types_description_id;
	}

	public function setSuppliersCatalogsAdditionalsTypesDescriptionId(int $suppliers_catalogs_additionals_types_description_id) : self
	{
		$this->suppliers_catalogs_additionals_types_description_id = $suppliers_catalogs_additionals_types_description_id;
		return $this;
	}

	public function getSuppliersCatalogsAdditionalsTypesId():  ?int
	{
		return $this->suppliers_catalogs_additionals_types_id;
	}

	public function setSuppliersCatalogsAdditionalsTypesId(int $suppliers_catalogs_additionals_types_id) : self
	{
		$this->suppliers_catalogs_additionals_types_id = $suppliers_catalogs_additionals_types_id;
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

	public function getAdditionalsName():  ?string
	{
		return $this->additionals_name;
	}

	public function setAdditionalsName(string $additionals_name) : self
	{
		$this->additionals_name = $additionals_name;
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