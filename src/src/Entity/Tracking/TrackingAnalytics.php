<?php

namespace App\Entity\Tracking;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tracking\TrackingAnalyticsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TrackingAnalyticsRepository::class)]
#[ORM\Table(name: "tracking_analytics")]
class TrackingAnalytics
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tracking_analytics_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_clients_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_channels_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_utm_sources_id = null;

	#[ORM\Column(length: 512, nullable: true)]
	private ?string $source = null;

	#[ORM\Column(length: 512, nullable: true)]
	private ?string $campaign = null;

	#[ORM\Column(length: 512, nullable: true)]
	private ?string $medium = null;

	#[ORM\Column(length: 512, nullable: true)]
	private ?string $keyword = null;

	#[ORM\Column(length: 512, nullable: true)]
	private ?string $ad_content = null;

	#[ORM\Column(length: 512, nullable: true)]
	private ?string $adwords_creative_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $visitors = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTrackingAnalyticsId():  ?int
	{
		return $this->tracking_analytics_id;
	}

	public function setTrackingAnalyticsId(int $tracking_analytics_id) : self
	{
		$this->tracking_analytics_id = $tracking_analytics_id;
		return $this;
	}

	public function getTrackingClientsId():  ?int
	{
		return $this->tracking_clients_id;
	}

	public function setTrackingClientsId(int $tracking_clients_id) : self
	{
		$this->tracking_clients_id = $tracking_clients_id;
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

	public function getTrackingUtmSourcesId():  ?int
	{
		return $this->tracking_utm_sources_id;
	}

	public function setTrackingUtmSourcesId(int $tracking_utm_sources_id) : self
	{
		$this->tracking_utm_sources_id = $tracking_utm_sources_id;
		return $this;
	}

	public function getSource():  ?string
	{
		return $this->source;
	}

	public function setSource(string $source) : self
	{
		$this->source = $source;
		return $this;
	}

	public function getCampaign():  ?string
	{
		return $this->campaign;
	}

	public function setCampaign(string $campaign) : self
	{
		$this->campaign = $campaign;
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

	public function getKeyword():  ?string
	{
		return $this->keyword;
	}

	public function setKeyword(string $keyword) : self
	{
		$this->keyword = $keyword;
		return $this;
	}

	public function getAdContent():  ?string
	{
		return $this->ad_content;
	}

	public function setAdContent(string $ad_content) : self
	{
		$this->ad_content = $ad_content;
		return $this;
	}

	public function getAdwordsCreativeId():  ?string
	{
		return $this->adwords_creative_id;
	}

	public function setAdwordsCreativeId(string $adwords_creative_id) : self
	{
		$this->adwords_creative_id = $adwords_creative_id;
		return $this;
	}

	public function getDate():  ?\DateTimeInterface
	{
		return $this->date;
	}

	public function setDate(\DateTimeInterface $date) : self
	{
		$this->date = $date;
		return $this;
	}

	public function getVisitors():  ?string
	{
		return $this->visitors;
	}

	public function setVisitors(string $visitors) : self
	{
		$this->visitors = $visitors;
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