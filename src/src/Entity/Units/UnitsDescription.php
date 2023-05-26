<?php

namespace App\Entity\Units;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Units\UnitsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: UnitsDescriptionRepository::class)]
#[ORM\Table(name: "units_description")]
class UnitsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $units_description_id = null;

	#[ORM\Column]
	private ?int $units_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $units_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getUnitsDescriptionId():  ?int
	{
		return $this->units_description_id;
	}

	public function setUnitsDescriptionId(int $units_description_id) : self
	{
		$this->units_description_id = $units_description_id;
		return $this;
	}

	public function getUnitsId():  ?int
	{
		return $this->units_id;
	}

	public function setUnitsId(int $units_id) : self
	{
		$this->units_id = $units_id;
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

	public function getUnitsName():  ?string
	{
		return $this->units_name;
	}

	public function setUnitsName(string $units_name) : self
	{
		$this->units_name = $units_name;
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