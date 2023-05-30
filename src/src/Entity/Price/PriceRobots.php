<?php

namespace App\Entity\Price;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Price\PriceRobotsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PriceRobotsRepository::class)]
#[ORM\Table(name: "price_robots")]
class PriceRobots
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $price_robots_id = null;

	#[ORM\Column]
	private ?int $price_robots_types_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $price_robots_name = null;

	#[ORM\Column]
	private ?int $price_robots_visible = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getPriceRobotsId():  ?int
	{
		return $this->price_robots_id;
	}

	public function setPriceRobotsId(int $price_robots_id) : self
	{
		$this->price_robots_id = $price_robots_id;
		return $this;
	}

	public function getPriceRobotsTypesId():  ?int
	{
		return $this->price_robots_types_id;
	}

	public function setPriceRobotsTypesId(int $price_robots_types_id) : self
	{
		$this->price_robots_types_id = $price_robots_types_id;
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

	public function getPriceRobotsName():  ?string
	{
		return $this->price_robots_name;
	}

	public function setPriceRobotsName(string $price_robots_name) : self
	{
		$this->price_robots_name = $price_robots_name;
		return $this;
	}

	public function getPriceRobotsVisible():  ?int
	{
		return $this->price_robots_visible;
	}

	public function setPriceRobotsVisible(int $price_robots_visible) : self
	{
		$this->price_robots_visible = $price_robots_visible;
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