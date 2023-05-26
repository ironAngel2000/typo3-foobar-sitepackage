<?php

namespace App\Entity\States;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\States\StatesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: StatesRepository::class)]
#[ORM\Table(name: "states")]
class States
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $states_id = null;

	#[ORM\Column]
	private ?int $countries_id = null;

	 #[ORM\Column(length: 8)]
	private ?string $states_iso_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getStatesId():  ?int
	{
		return $this->states_id;
	}

	public function setStatesId(int $states_id) : self
	{
		$this->states_id = $states_id;
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

	public function getStatesIsoCode():  ?string
	{
		return $this->states_iso_code;
	}

	public function setStatesIsoCode(string $states_iso_code) : self
	{
		$this->states_iso_code = $states_iso_code;
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