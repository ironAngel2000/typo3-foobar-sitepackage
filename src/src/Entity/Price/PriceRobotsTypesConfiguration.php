<?php

namespace App\Entity\Price;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Price\PriceRobotsTypesConfigurationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PriceRobotsTypesConfigurationRepository::class)]
#[ORM\Table(name: "price_robots_types_configuration")]
class PriceRobotsTypesConfiguration
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $price_robots_types_configuration_id = null;

	#[ORM\Column]
	private ?int $price_robots_types_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $key = null;

	 #[ORM\Column(length: 255)]
	private ?string $value = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getPriceRobotsTypesConfigurationId():  ?int
	{
		return $this->price_robots_types_configuration_id;
	}

	public function setPriceRobotsTypesConfigurationId(int $price_robots_types_configuration_id) : self
	{
		$this->price_robots_types_configuration_id = $price_robots_types_configuration_id;
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

	public function getKey():  ?string
	{
		return $this->key;
	}

	public function setKey(string $key) : self
	{
		$this->key = $key;
		return $this;
	}

	public function getValue():  ?string
	{
		return $this->value;
	}

	public function setValue(string $value) : self
	{
		$this->value = $value;
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