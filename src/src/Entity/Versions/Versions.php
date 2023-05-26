<?php

namespace App\Entity\Versions;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Versions\VersionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: VersionsRepository::class)]
#[ORM\Table(name: "versions")]
class Versions
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $versions_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $version_number = null;

	#[ORM\Column(nullable: true)]
	private ?string $sql_patch = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getVersionsId():  ?int
	{
		return $this->versions_id;
	}

	public function setVersionsId(int $versions_id) : self
	{
		$this->versions_id = $versions_id;
		return $this;
	}

	public function getVersionNumber():  ?string
	{
		return $this->version_number;
	}

	public function setVersionNumber(string $version_number) : self
	{
		$this->version_number = $version_number;
		return $this;
	}

	public function getSqlPatch():  ?string
	{
		return $this->sql_patch;
	}

	public function setSqlPatch(string $sql_patch) : self
	{
		$this->sql_patch = $sql_patch;
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