<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsMatchingUnitsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsMatchingUnitsRepository::class)]
#[ORM\Table(name: "shops_matching_units")]
class ShopsMatchingUnits
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_matching_units_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $units_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $shops_units_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column]
	private ?int $last_updater = null;

	public function getShopsMatchingUnitsId():  ?int
	{
		return $this->shops_matching_units_id;
	}

	public function setShopsMatchingUnitsId(int $shops_matching_units_id) : self
	{
		$this->shops_matching_units_id = $shops_matching_units_id;
		return $this;
	}

	public function getShopsId():  ?int
	{
		return $this->shops_id;
	}

	public function setShopsId(int $shops_id) : self
	{
		$this->shops_id = $shops_id;
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

	public function getShopsUnitsCode():  ?string
	{
		return $this->shops_units_code;
	}

	public function setShopsUnitsCode(string $shops_units_code) : self
	{
		$this->shops_units_code = $shops_units_code;
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