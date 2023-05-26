<?php

namespace App\Entity\Tracking;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tracking\TrackingUtmContentsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TrackingUtmContentsRepository::class)]
#[ORM\Table(name: "tracking_utm_contents")]
class TrackingUtmContents
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tracking_utm_contents_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_channels_id = null;

	#[ORM\Column(length: 512, nullable: true)]
	private ?string $content = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTrackingUtmContentsId():  ?int
	{
		return $this->tracking_utm_contents_id;
	}

	public function setTrackingUtmContentsId(int $tracking_utm_contents_id) : self
	{
		$this->tracking_utm_contents_id = $tracking_utm_contents_id;
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

	public function getContent():  ?string
	{
		return $this->content;
	}

	public function setContent(string $content) : self
	{
		$this->content = $content;
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