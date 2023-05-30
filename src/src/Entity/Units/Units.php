<?php

namespace App\Entity\Units;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Units\UnitsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: UnitsRepository::class)]
#[ORM\Table(name: "units")]
class Units
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $units_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $base_units_id = null;

	#[ORM\Column]
	private ?float $base_units_factor = null;

	 #[ORM\Column(length: 255)]
	private ?string $measure = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_units_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getUnitsId():  ?int
	{
		return $this->units_id;
	}

	public function setUnitsId(int $units_id) : self
	{
		$this->units_id = $units_id;
		return $this;
	}

	public function getBaseUnitsId():  ?int
	{
		return $this->base_units_id;
	}

	public function setBaseUnitsId(int $base_units_id) : self
	{
		$this->base_units_id = $base_units_id;
		return $this;
	}

	public function getBaseUnitsFactor():  ?float
	{
		return $this->base_units_factor;
	}

	public function setBaseUnitsFactor(float $base_units_factor) : self
	{
		$this->base_units_factor = $base_units_factor;
		return $this;
	}

	public function getMeasure():  ?string
	{
		return $this->measure;
	}

	public function setMeasure(string $measure) : self
	{
		$this->measure = $measure;
		return $this;
	}

	public function getSortOrder():  ?int
	{
		return $this->sort_order;
	}

	public function setSortOrder(int $sort_order) : self
	{
		$this->sort_order = $sort_order;
		return $this;
	}

	public function getExternUnitsId():  ?string
	{
		return $this->extern_units_id;
	}

	public function setExternUnitsId(string $extern_units_id) : self
	{
		$this->extern_units_id = $extern_units_id;
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