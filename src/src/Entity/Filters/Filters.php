<?php

namespace App\Entity\Filters;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Filters\FiltersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: FiltersRepository::class)]
#[ORM\Table(name: "filters")]
class Filters
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $filters_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $attribute = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getFiltersId():  ?int
	{
		return $this->filters_id;
	}

	public function setFiltersId(int $filters_id) : self
	{
		$this->filters_id = $filters_id;
		return $this;
	}

	public function getAttribute():  ?string
	{
		return $this->attribute;
	}

	public function setAttribute(string $attribute) : self
	{
		$this->attribute = $attribute;
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