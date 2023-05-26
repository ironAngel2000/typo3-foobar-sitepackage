<?php

namespace App\Entity\Filters;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Filters\FiltersValuesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: FiltersValuesRepository::class)]
#[ORM\Table(name: "filters_values")]
class FiltersValues
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $filters_values_id = null;

	#[ORM\Column]
	private ?int $filters_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $parent_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $value = null;

	#[ORM\Column(nullable: true)]
	private ?string $value_to = null;

	#[ORM\Column(nullable: true)]
	private ?string $type = null;

	#[ORM\Column(nullable: true)]
	private ?string $list_key = null;

	#[ORM\Column(nullable: true)]
	private ?string $on = null;

	#[ORM\Column(nullable: true)]
	private ?string $re_join = null;

	#[ORM\Column(nullable: true)]
	private ?string $last_join = null;

	#[ORM\Column(nullable: true)]
	private ?string $null = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getFiltersValuesId():  ?int
	{
		return $this->filters_values_id;
	}

	public function setFiltersValuesId(int $filters_values_id) : self
	{
		$this->filters_values_id = $filters_values_id;
		return $this;
	}

	public function getFiltersId():  ?int
	{
		return $this->filters_id;
	}

	public function setFiltersId(int $filters_id) : self
	{
		$this->filters_id = $filters_id;
		return $this;
	}

	public function getParentId():  ?int
	{
		return $this->parent_id;
	}

	public function setParentId(int $parent_id) : self
	{
		$this->parent_id = $parent_id;
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

	public function getValueTo():  ?string
	{
		return $this->value_to;
	}

	public function setValueTo(string $value_to) : self
	{
		$this->value_to = $value_to;
		return $this;
	}

	public function getType():  ?string
	{
		return $this->type;
	}

	public function setType(string $type) : self
	{
		$this->type = $type;
		return $this;
	}

	public function getListKey():  ?string
	{
		return $this->list_key;
	}

	public function setListKey(string $list_key) : self
	{
		$this->list_key = $list_key;
		return $this;
	}

	public function getOn():  ?string
	{
		return $this->on;
	}

	public function setOn(string $on) : self
	{
		$this->on = $on;
		return $this;
	}

	public function getReJoin():  ?string
	{
		return $this->re_join;
	}

	public function setReJoin(string $re_join) : self
	{
		$this->re_join = $re_join;
		return $this;
	}

	public function getLastJoin():  ?string
	{
		return $this->last_join;
	}

	public function setLastJoin(string $last_join) : self
	{
		$this->last_join = $last_join;
		return $this;
	}

	public function getNull():  ?string
	{
		return $this->null;
	}

	public function setNull(string $null) : self
	{
		$this->null = $null;
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