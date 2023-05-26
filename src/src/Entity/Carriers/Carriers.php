<?php

namespace App\Entity\Carriers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Carriers\CarriersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CarriersRepository::class)]
#[ORM\Table(name: "carriers")]
class Carriers
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $carriers_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $carriers_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $carriers_description = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $tracking_url = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getCarriersId():  ?int
	{
		return $this->carriers_id;
	}

	public function setCarriersId(int $carriers_id) : self
	{
		$this->carriers_id = $carriers_id;
		return $this;
	}

	public function getCarriersName():  ?string
	{
		return $this->carriers_name;
	}

	public function setCarriersName(string $carriers_name) : self
	{
		$this->carriers_name = $carriers_name;
		return $this;
	}

	public function getCarriersDescription():  ?string
	{
		return $this->carriers_description;
	}

	public function setCarriersDescription(string $carriers_description) : self
	{
		$this->carriers_description = $carriers_description;
		return $this;
	}

	public function getTrackingUrl():  ?string
	{
		return $this->tracking_url;
	}

	public function setTrackingUrl(string $tracking_url) : self
	{
		$this->tracking_url = $tracking_url;
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