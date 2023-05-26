<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsTypesErrorsSeveritiesDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsTypesErrorsSeveritiesDescriptionRepository::class)]
#[ORM\Table(name: "shops_types_errors_severities_description")]
class ShopsTypesErrorsSeveritiesDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_types_errors_severities_description_id = null;

	#[ORM\Column]
	private ?int $shops_types_errors_severities_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $shops_types_errors_severities_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsTypesErrorsSeveritiesDescriptionId():  ?int
	{
		return $this->shops_types_errors_severities_description_id;
	}

	public function setShopsTypesErrorsSeveritiesDescriptionId(int $shops_types_errors_severities_description_id) : self
	{
		$this->shops_types_errors_severities_description_id = $shops_types_errors_severities_description_id;
		return $this;
	}

	public function getShopsTypesErrorsSeveritiesId():  ?int
	{
		return $this->shops_types_errors_severities_id;
	}

	public function setShopsTypesErrorsSeveritiesId(int $shops_types_errors_severities_id) : self
	{
		$this->shops_types_errors_severities_id = $shops_types_errors_severities_id;
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

	public function getShopsTypesErrorsSeveritiesName():  ?string
	{
		return $this->shops_types_errors_severities_name;
	}

	public function setShopsTypesErrorsSeveritiesName(string $shops_types_errors_severities_name) : self
	{
		$this->shops_types_errors_severities_name = $shops_types_errors_severities_name;
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