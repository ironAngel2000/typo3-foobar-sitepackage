<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsFiltersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsFiltersRepository::class)]
#[ORM\Table(name: "shops_filters")]
class ShopsFilters
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_filters_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $filters_id = null;

	#[ORM\Column]
	private ?string $is_variation_filter = null;

	#[ORM\Column(nullable: true)]
	private ?int $filters_values_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $filter_class = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsFiltersId():  ?int
	{
		return $this->shops_filters_id;
	}

	public function setShopsFiltersId(int $shops_filters_id) : self
	{
		$this->shops_filters_id = $shops_filters_id;
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

	public function getFiltersId():  ?int
	{
		return $this->filters_id;
	}

	public function setFiltersId(int $filters_id) : self
	{
		$this->filters_id = $filters_id;
		return $this;
	}

	public function getIsVariationFilter():  ?string
	{
		return $this->is_variation_filter;
	}

	public function setIsVariationFilter(string $is_variation_filter) : self
	{
		$this->is_variation_filter = $is_variation_filter;
		return $this;
	}

	public function getFiltersValuesId():  ?int
	{
		return $this->filters_values_id;
	}

	public function setFiltersValuesId(int $filters_values_id) : self
	{
		$this->filters_values_id = $filters_values_id;
		return $this;
	}

	public function getFilterClass():  ?string
	{
		return $this->filter_class;
	}

	public function setFilterClass(string $filter_class) : self
	{
		$this->filter_class = $filter_class;
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