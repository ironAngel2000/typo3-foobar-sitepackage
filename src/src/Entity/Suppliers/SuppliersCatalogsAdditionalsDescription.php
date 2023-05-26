<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersCatalogsAdditionalsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersCatalogsAdditionalsDescriptionRepository::class)]
#[ORM\Table(name: "suppliers_catalogs_additionals_description")]
class SuppliersCatalogsAdditionalsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_catalogs_additionals_description_id = null;

	#[ORM\Column]
	private ?int $suppliers_catalogs_additionals_id = null;

	#[ORM\Column]
	private ?int $suppliers_catalogs_matching_languages_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $additionals_value = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column]
	private ?int $last_updater = null;

	public function getSuppliersCatalogsAdditionalsDescriptionId():  ?int
	{
		return $this->suppliers_catalogs_additionals_description_id;
	}

	public function setSuppliersCatalogsAdditionalsDescriptionId(int $suppliers_catalogs_additionals_description_id) : self
	{
		$this->suppliers_catalogs_additionals_description_id = $suppliers_catalogs_additionals_description_id;
		return $this;
	}

	public function getSuppliersCatalogsAdditionalsId():  ?int
	{
		return $this->suppliers_catalogs_additionals_id;
	}

	public function setSuppliersCatalogsAdditionalsId(int $suppliers_catalogs_additionals_id) : self
	{
		$this->suppliers_catalogs_additionals_id = $suppliers_catalogs_additionals_id;
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

	public function getAdditionalsValue():  ?string
	{
		return $this->additionals_value;
	}

	public function setAdditionalsValue(string $additionals_value) : self
	{
		$this->additionals_value = $additionals_value;
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