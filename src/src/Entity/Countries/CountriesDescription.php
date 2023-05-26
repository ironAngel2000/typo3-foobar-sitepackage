<?php

namespace App\Entity\Countries;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Countries\CountriesDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CountriesDescriptionRepository::class)]
#[ORM\Table(name: "countries_description")]
class CountriesDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $countries_description_id = null;

	#[ORM\Column]
	private ?int $countries_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $countries_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getCountriesDescriptionId():  ?int
	{
		return $this->countries_description_id;
	}

	public function setCountriesDescriptionId(int $countries_description_id) : self
	{
		$this->countries_description_id = $countries_description_id;
		return $this;
	}

	public function getCountriesId():  ?int
	{
		return $this->countries_id;
	}

	public function setCountriesId(int $countries_id) : self
	{
		$this->countries_id = $countries_id;
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

	public function getCountriesName():  ?string
	{
		return $this->countries_name;
	}

	public function setCountriesName(string $countries_name) : self
	{
		$this->countries_name = $countries_name;
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