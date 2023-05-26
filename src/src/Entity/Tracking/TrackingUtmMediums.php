<?php

namespace App\Entity\Tracking;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tracking\TrackingUtmMediumsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TrackingUtmMediumsRepository::class)]
#[ORM\Table(name: "tracking_utm_mediums")]
class TrackingUtmMediums
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tracking_utm_mediums_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_channels_id = null;

	#[ORM\Column(length: 512, nullable: true)]
	private ?string $medium = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTrackingUtmMediumsId():  ?int
	{
		return $this->tracking_utm_mediums_id;
	}

	public function setTrackingUtmMediumsId(int $tracking_utm_mediums_id) : self
	{
		$this->tracking_utm_mediums_id = $tracking_utm_mediums_id;
		return $this;
	}

	public function getTrackingChannelsId():  ?int
	{
		return $this->tracking_channels_id;
	}

	public function setTrackingChannelsId(int $tracking_channels_id) : self
	{
		$this->tracking_channels_id = $tracking_channels_id;
		return $this;
	}

	public function getMedium():  ?string
	{
		return $this->medium;
	}

	public function setMedium(string $medium) : self
	{
		$this->medium = $medium;
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