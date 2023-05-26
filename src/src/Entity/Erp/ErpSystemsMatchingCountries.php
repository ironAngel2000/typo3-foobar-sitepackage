<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsMatchingCountriesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsMatchingCountriesRepository::class)]
#[ORM\Table(name: "erp_systems_matching_countries")]
class ErpSystemsMatchingCountries
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_matching_countries_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $countries_name = null;

	 #[ORM\Column(length: 64)]
	private ?string $erp_countries_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsMatchingCountriesId():  ?int
	{
		return $this->erp_systems_matching_countries_id;
	}

	public function setErpSystemsMatchingCountriesId(int $erp_systems_matching_countries_id) : self
	{
		$this->erp_systems_matching_countries_id = $erp_systems_matching_countries_id;
		return $this;
	}

	public function getErpSystemsId():  ?int
	{
		return $this->erp_systems_id;
	}

	public function setErpSystemsId(int $erp_systems_id) : self
	{
		$this->erp_systems_id = $erp_systems_id;
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

	public function getErpCountriesName():  ?string
	{
		return $this->erp_countries_name;
	}

	public function setErpCountriesName(string $erp_countries_name) : self
	{
		$this->erp_countries_name = $erp_countries_name;
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