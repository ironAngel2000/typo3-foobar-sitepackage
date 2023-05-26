<?php

namespace App\Entity\Filters;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Filters\FiltersDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: FiltersDescriptionRepository::class)]
#[ORM\Table(name: "filters_description")]
class FiltersDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $filters_description_id = null;

	#[ORM\Column]
	private ?int $filters_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $filters_name = null;

	#[ORM\Column]
	private ?string $filters_description = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $filters_attribute = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $filters_type = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $filters_value = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getFiltersDescriptionId():  ?int
	{
		return $this->filters_description_id;
	}

	public function setFiltersDescriptionId(int $filters_description_id) : self
	{
		$this->filters_description_id = $filters_description_id;
		return $this;
	}

	public function getFiltersId():  ?int
	{
		return $this->filters_id;
	}

	public function setFiltersId(int $filters_id) : self
	{
		$this->filters_id = $filters_id;
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

	public function getFiltersName():  ?string
	{
		return $this->filters_name;
	}

	public function setFiltersName(string $filters_name) : self
	{
		$this->filters_name = $filters_name;
		return $this;
	}

	public function getFiltersDescription():  ?string
	{
		return $this->filters_description;
	}

	public function setFiltersDescription(string $filters_description) : self
	{
		$this->filters_description = $filters_description;
		return $this;
	}

	public function getFiltersAttribute():  ?string
	{
		return $this->filters_attribute;
	}

	public function setFiltersAttribute(string $filters_attribute) : self
	{
		$this->filters_attribute = $filters_attribute;
		return $this;
	}

	public function getFiltersType():  ?string
	{
		return $this->filters_type;
	}

	public function setFiltersType(string $filters_type) : self
	{
		$this->filters_type = $filters_type;
		return $this;
	}

	public function getFiltersValue():  ?string
	{
		return $this->filters_value;
	}

	public function setFiltersValue(string $filters_value) : self
	{
		$this->filters_value = $filters_value;
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