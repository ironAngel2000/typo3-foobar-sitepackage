<?php

namespace App\Entity\Cost;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Cost\CostCentreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CostCentreRepository::class)]
#[ORM\Table(name: "cost_centre")]
class CostCentre
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $cost_centre_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $cost_centre_name = null;

	 #[ORM\Column(length: 32)]
	private ?string $cost_centre_value = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getCostCentreId():  ?int
	{
		return $this->cost_centre_id;
	}

	public function setCostCentreId(int $cost_centre_id) : self
	{
		$this->cost_centre_id = $cost_centre_id;
		return $this;
	}

	public function getCostCentreName():  ?string
	{
		return $this->cost_centre_name;
	}

	public function setCostCentreName(string $cost_centre_name) : self
	{
		$this->cost_centre_name = $cost_centre_name;
		return $this;
	}

	public function getCostCentreValue():  ?string
	{
		return $this->cost_centre_value;
	}

	public function setCostCentreValue(string $cost_centre_value) : self
	{
		$this->cost_centre_value = $cost_centre_value;
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