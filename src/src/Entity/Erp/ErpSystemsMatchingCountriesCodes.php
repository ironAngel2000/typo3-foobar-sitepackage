<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsMatchingCountriesCodesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsMatchingCountriesCodesRepository::class)]
#[ORM\Table(name: "erp_systems_matching_countries_codes")]
class ErpSystemsMatchingCountriesCodes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_matching_countries_codes_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $countries_code = null;

	 #[ORM\Column(length: 64)]
	private ?string $erp_countries_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsMatchingCountriesCodesId():  ?int
	{
		return $this->erp_systems_matching_countries_codes_id;
	}

	public function setErpSystemsMatchingCountriesCodesId(int $erp_systems_matching_countries_codes_id) : self
	{
		$this->erp_systems_matching_countries_codes_id = $erp_systems_matching_countries_codes_id;
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

	public function getCountriesCode():  ?string
	{
		return $this->countries_code;
	}

	public function setCountriesCode(string $countries_code) : self
	{
		$this->countries_code = $countries_code;
		return $this;
	}

	public function getErpCountriesCode():  ?string
	{
		return $this->erp_countries_code;
	}

	public function setErpCountriesCode(string $erp_countries_code) : self
	{
		$this->erp_countries_code = $erp_countries_code;
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