<?php

namespace App\Entity\Tax;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tax\TaxCategoriesValuesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TaxCategoriesValuesRepository::class)]
#[ORM\Table(name: "tax_categories_values")]
class TaxCategoriesValues
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tax_categories_values_id = null;

	#[ORM\Column]
	private ?int $tax_categories_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTaxCategoriesValuesId():  ?int
	{
		return $this->tax_categories_values_id;
	}

	public function setTaxCategoriesValuesId(int $tax_categories_values_id) : self
	{
		$this->tax_categories_values_id = $tax_categories_values_id;
		return $this;
	}

	public function getTaxCategoriesId():  ?int
	{
		return $this->tax_categories_id;
	}

	public function setTaxCategoriesId(int $tax_categories_id) : self
	{
		$this->tax_categories_id = $tax_categories_id;
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

	public function getName():  ?string
	{
		return $this->name;
	}

	public function setName(string $name) : self
	{
		$this->name = $name;
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