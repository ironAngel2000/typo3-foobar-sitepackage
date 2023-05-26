<?php

namespace App\Entity\Price;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Price\PriceRobotsTypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PriceRobotsTypesRepository::class)]
#[ORM\Table(name: "price_robots_types")]
class PriceRobotsTypes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $price_robots_types_id = null;

	 #[ORM\Column(length: 32)]
	private ?string $price_robots_types_code = null;

	 #[ORM\Column(length: 64)]
	private ?string $price_robots_types_name = null;

	#[ORM\Column]
	private ?int $shops_types_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getPriceRobotsTypesId():  ?int
	{
		return $this->price_robots_types_id;
	}

	public function setPriceRobotsTypesId(int $price_robots_types_id) : self
	{
		$this->price_robots_types_id = $price_robots_types_id;
		return $this;
	}

	public function getPriceRobotsTypesCode():  ?string
	{
		return $this->price_robots_types_code;
	}

	public function setPriceRobotsTypesCode(string $price_robots_types_code) : self
	{
		$this->price_robots_types_code = $price_robots_types_code;
		return $this;
	}

	public function getPriceRobotsTypesName():  ?string
	{
		return $this->price_robots_types_name;
	}

	public function setPriceRobotsTypesName(string $price_robots_types_name) : self
	{
		$this->price_robots_types_name = $price_robots_types_name;
		return $this;
	}

	public function getShopsTypesId():  ?int
	{
		return $this->shops_types_id;
	}

	public function setShopsTypesId(int $shops_types_id) : self
	{
		$this->shops_types_id = $shops_types_id;
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