<?php

namespace App\Entity\Price;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Price\PriceRobotsConfigurationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PriceRobotsConfigurationRepository::class)]
#[ORM\Table(name: "price_robots_configuration")]
class PriceRobotsConfiguration
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $price_robots_configuration_id = null;

	#[ORM\Column]
	private ?int $price_robots_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $configuration_key = null;

	#[ORM\Column(nullable: true)]
	private ?string $configuration_value = null;

	#[ORM\Column]
	private ?string $required = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getPriceRobotsConfigurationId():  ?int
	{
		return $this->price_robots_configuration_id;
	}

	public function setPriceRobotsConfigurationId(int $price_robots_configuration_id) : self
	{
		$this->price_robots_configuration_id = $price_robots_configuration_id;
		return $this;
	}

	public function getPriceRobotsId():  ?int
	{
		return $this->price_robots_id;
	}

	public function setPriceRobotsId(int $price_robots_id) : self
	{
		$this->price_robots_id = $price_robots_id;
		return $this;
	}

	public function getConfigurationKey():  ?string
	{
		return $this->configuration_key;
	}

	public function setConfigurationKey(string $configuration_key) : self
	{
		$this->configuration_key = $configuration_key;
		return $this;
	}

	public function getConfigurationValue():  ?string
	{
		return $this->configuration_value;
	}

	public function setConfigurationValue(string $configuration_value) : self
	{
		$this->configuration_value = $configuration_value;
		return $this;
	}

	public function getRequired():  ?string
	{
		return $this->required;
	}

	public function setRequired(string $required) : self
	{
		$this->required = $required;
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