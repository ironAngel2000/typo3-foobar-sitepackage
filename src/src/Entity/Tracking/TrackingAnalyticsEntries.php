<?php

namespace App\Entity\Tracking;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tracking\TrackingAnalyticsEntriesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TrackingAnalyticsEntriesRepository::class)]
#[ORM\Table(name: "tracking_analytics_entries")]
class TrackingAnalyticsEntries
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tracking_analytics_entries_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $date = null;

	#[ORM\Column(nullable: true)]
	private ?int $entries = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTrackingAnalyticsEntriesId():  ?int
	{
		return $this->tracking_analytics_entries_id;
	}

	public function setTrackingAnalyticsEntriesId(int $tracking_analytics_entries_id) : self
	{
		$this->tracking_analytics_entries_id = $tracking_analytics_entries_id;
		return $this;
	}

	public function getDate():  ?string
	{
		return $this->date;
	}

	public function setDate(string $date) : self
	{
		$this->date = $date;
		return $this;
	}

	public function getEntries():  ?int
	{
		return $this->entries;
	}

	public function setEntries(int $entries) : self
	{
		$this->entries = $entries;
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