<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfApplicationsTranslationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfApplicationsTranslationsRepository::class)]
#[ORM\Table(name: "bf_applications_translations")]
class BfApplicationsTranslations
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_applications_translations_id = null;

	#[ORM\Column]
	private ?int $bf_applications_id = null;

	#[ORM\Column]
	private ?int $bf_translations_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfApplicationsTranslationsId():  ?int
	{
		return $this->bf_applications_translations_id;
	}

	public function setBfApplicationsTranslationsId(int $bf_applications_translations_id) : self
	{
		$this->bf_applications_translations_id = $bf_applications_translations_id;
		return $this;
	}

	public function getBfApplicationsId():  ?int
	{
		return $this->bf_applications_id;
	}

	public function setBfApplicationsId(int $bf_applications_id) : self
	{
		$this->bf_applications_id = $bf_applications_id;
		return $this;
	}

	public function getBfTranslationsId():  ?int
	{
		return $this->bf_translations_id;
	}

	public function setBfTranslationsId(int $bf_translations_id) : self
	{
		$this->bf_translations_id = $bf_translations_id;
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