<?php

namespace App\Entity\States;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\States\StatesDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: StatesDescriptionRepository::class)]
#[ORM\Table(name: "states_description")]
class StatesDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $states_description_id = null;

	#[ORM\Column]
	private ?int $states_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $states_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getStatesDescriptionId():  ?int
	{
		return $this->states_description_id;
	}

	public function setStatesDescriptionId(int $states_description_id) : self
	{
		$this->states_description_id = $states_description_id;
		return $this;
	}

	public function getStatesId():  ?int
	{
		return $this->states_id;
	}

	public function setStatesId(int $states_id) : self
	{
		$this->states_id = $states_id;
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

	public function getStatesName():  ?string
	{
		return $this->states_name;
	}

	public function setStatesName(string $states_name) : self
	{
		$this->states_name = $states_name;
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