<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsTypesErrorsSeveritiesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsTypesErrorsSeveritiesRepository::class)]
#[ORM\Table(name: "shops_types_errors_severities")]
class ShopsTypesErrorsSeverities
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_types_errors_severities_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $shops_types_errors_severities_code = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsTypesErrorsSeveritiesId():  ?int
	{
		return $this->shops_types_errors_severities_id;
	}

	public function setShopsTypesErrorsSeveritiesId(int $shops_types_errors_severities_id) : self
	{
		$this->shops_types_errors_severities_id = $shops_types_errors_severities_id;
		return $this;
	}

	public function getShopsTypesErrorsSeveritiesCode():  ?string
	{
		return $this->shops_types_errors_severities_code;
	}

	public function setShopsTypesErrorsSeveritiesCode(string $shops_types_errors_severities_code) : self
	{
		$this->shops_types_errors_severities_code = $shops_types_errors_severities_code;
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