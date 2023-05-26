<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersCatalogsMatchingLanguagesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersCatalogsMatchingLanguagesRepository::class)]
#[ORM\Table(name: "suppliers_catalogs_matching_languages")]
class SuppliersCatalogsMatchingLanguages
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_catalogs_matching_languages_id = null;

	#[ORM\Column]
	private ?int $suppliers_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 32)]
	private ?string $suppliers_languages_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getSuppliersCatalogsMatchingLanguagesId():  ?int
	{
		return $this->suppliers_catalogs_matching_languages_id;
	}

	public function setSuppliersCatalogsMatchingLanguagesId(int $suppliers_catalogs_matching_languages_id) : self
	{
		$this->suppliers_catalogs_matching_languages_id = $suppliers_catalogs_matching_languages_id;
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

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
		return $this;
	}

	public function getSuppliersLanguagesCode():  ?string
	{
		return $this->suppliers_languages_code;
	}

	public function setSuppliersLanguagesCode(string $suppliers_languages_code) : self
	{
		$this->suppliers_languages_code = $suppliers_languages_code;
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