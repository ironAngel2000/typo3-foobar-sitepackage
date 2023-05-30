<?php

namespace App\Entity\Ean;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Ean\EanSeriesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: EanSeriesRepository::class)]
#[ORM\Table(name: "ean_series")]
class EanSeries
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $ean_series_id = null;

	#[ORM\Column]
	private ?string $ean_prefix = null;

	#[ORM\Column]
	private ?int $ean_min_value = null;

	#[ORM\Column]
	private ?int $ean_max_value = null;

	#[ORM\Column]
	private ?int $ean_count = null;

	#[ORM\Column]
	private ?int $status_active = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getEanSeriesId():  ?int
	{
		return $this->ean_series_id;
	}

	public function setEanSeriesId(int $ean_series_id) : self
	{
		$this->ean_series_id = $ean_series_id;
		return $this;
	}

	public function getEanPrefix():  ?string
	{
		return $this->ean_prefix;
	}

	public function setEanPrefix(string $ean_prefix) : self
	{
		$this->ean_prefix = $ean_prefix;
		return $this;
	}

	public function getEanMinValue():  ?int
	{
		return $this->ean_min_value;
	}

	public function setEanMinValue(int $ean_min_value) : self
	{
		$this->ean_min_value = $ean_min_value;
		return $this;
	}

	public function getEanMaxValue():  ?int
	{
		return $this->ean_max_value;
	}

	public function setEanMaxValue(int $ean_max_value) : self
	{
		$this->ean_max_value = $ean_max_value;
		return $this;
	}

	public function getEanCount():  ?int
	{
		return $this->ean_count;
	}

	public function setEanCount(int $ean_count) : self
	{
		$this->ean_count = $ean_count;
		return $this;
	}

	public function getStatusActive():  ?int
	{
		return $this->status_active;
	}

	public function setStatusActive(int $status_active) : self
	{
		$this->status_active = $status_active;
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