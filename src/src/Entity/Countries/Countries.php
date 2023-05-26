<?php

namespace App\Entity\Countries;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Countries\CountriesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CountriesRepository::class)]
#[ORM\Table(name: "countries")]
class Countries
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $countries_id = null;

	 #[ORM\Column(length: 8)]
	private ?string $countries_iso_code = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $countries_iso3_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getCountriesId():  ?int
	{
		return $this->countries_id;
	}

	public function setCountriesId(int $countries_id) : self
	{
		$this->countries_id = $countries_id;
		return $this;
	}

	public function getCountriesIsoCode():  ?string
	{
		return $this->countries_iso_code;
	}

	public function setCountriesIsoCode(string $countries_iso_code) : self
	{
		$this->countries_iso_code = $countries_iso_code;
		return $this;
	}

	public function getCountriesIso3Code():  ?string
	{
		return $this->countries_iso3_code;
	}

	public function setCountriesIso3Code(string $countries_iso3_code) : self
	{
		$this->countries_iso3_code = $countries_iso3_code;
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