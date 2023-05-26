<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsConfigurationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsConfigurationRepository::class)]
#[ORM\Table(name: "shops_configuration")]
class ShopsConfiguration
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_configuration_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	 #[ORM\Column(length: 100)]
	private ?string $key = null;

	#[ORM\Column(nullable: true)]
	private ?string $value = null;

	#[ORM\Column(nullable: true)]
	private ?int $required = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsConfigurationId():  ?int
	{
		return $this->shops_configuration_id;
	}

	public function setShopsConfigurationId(int $shops_configuration_id) : self
	{
		$this->shops_configuration_id = $shops_configuration_id;
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

	public function getRequired():  ?int
	{
		return $this->required;
	}

	public function setRequired(int $required) : self
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