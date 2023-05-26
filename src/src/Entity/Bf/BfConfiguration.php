<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfConfigurationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfConfigurationRepository::class)]
#[ORM\Table(name: "bf_configuration")]
class BfConfiguration
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_configuration_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $configuration_key = null;

	#[ORM\Column(nullable: true)]
	private ?string $configuration_value = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $modul = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $segment = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $description = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfConfigurationId():  ?int
	{
		return $this->bf_configuration_id;
	}

	public function setBfConfigurationId(int $bf_configuration_id) : self
	{
		$this->bf_configuration_id = $bf_configuration_id;
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

	public function getModul():  ?string
	{
		return $this->modul;
	}

	public function setModul(string $modul) : self
	{
		$this->modul = $modul;
		return $this;
	}

	public function getSegment():  ?string
	{
		return $this->segment;
	}

	public function setSegment(string $segment) : self
	{
		$this->segment = $segment;
		return $this;
	}

	public function getDescription():  ?string
	{
		return $this->description;
	}

	public function setDescription(string $description) : self
	{
		$this->description = $description;
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