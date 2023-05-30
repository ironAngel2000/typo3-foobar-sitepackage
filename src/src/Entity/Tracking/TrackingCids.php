<?php

namespace App\Entity\Tracking;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tracking\TrackingCidsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TrackingCidsRepository::class)]
#[ORM\Table(name: "tracking_cids")]
class TrackingCids
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tracking_cids_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_goals_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $log_goal_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_clients_id = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $goal = null;

	 #[ORM\Column(length: 32)]
	private ?string $cid = null;

	#[ORM\Column(nullable: true)]
	private ?float $goal_total = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $goal_date = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $contact = null;

	#[ORM\Column(nullable: true)]
	private ?int $sort_order = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_channels_id = null;

	#[ORM\Column(nullable: true)]
	private ?float $channel_total = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_utm_sources_id = null;

	#[ORM\Column(nullable: true)]
	private ?float $source_total = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_utm_mediums_id = null;

	#[ORM\Column(nullable: true)]
	private ?float $medium_total = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_utm_terms_id = null;

	#[ORM\Column(nullable: true)]
	private ?float $term_total = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_utm_contents_id = null;

	#[ORM\Column(nullable: true)]
	private ?float $content_total = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_utm_campaigns_id = null;

	#[ORM\Column(nullable: true)]
	private ?float $campaign_total = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTrackingCidsId():  ?int
	{
		return $this->tracking_cids_id;
	}

	public function setTrackingCidsId(int $tracking_cids_id) : self
	{
		$this->tracking_cids_id = $tracking_cids_id;
		return $this;
	}

	public function getTrackingGoalsId():  ?int
	{
		return $this->tracking_goals_id;
	}

	public function setTrackingGoalsId(int $tracking_goals_id) : self
	{
		$this->tracking_goals_id = $tracking_goals_id;
		return $this;
	}

	public function getLogGoalId():  ?int
	{
		return $this->log_goal_id;
	}

	public function setLogGoalId(int $log_goal_id) : self
	{
		$this->log_goal_id = $log_goal_id;
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

	public function getGoal():  ?string
	{
		return $this->goal;
	}

	public function setGoal(string $goal) : self
	{
		$this->goal = $goal;
		return $this;
	}

	public function getCid():  ?string
	{
		return $this->cid;
	}

	public function setCid(string $cid) : self
	{
		$this->cid = $cid;
		return $this;
	}

	public function getGoalTotal():  ?float
	{
		return $this->goal_total;
	}

	public function setGoalTotal(float $goal_total) : self
	{
		$this->goal_total = $goal_total;
		return $this;
	}

	public function getGoalDate():  ?\DateTimeInterface
	{
		return $this->goal_date;
	}

	public function setGoalDate(\DateTimeInterface $goal_date) : self
	{
		$this->goal_date = $goal_date;
		return $this;
	}

	public function getContact():  ?\DateTimeInterface
	{
		return $this->contact;
	}

	public function setContact(\DateTimeInterface $contact) : self
	{
		$this->contact = $contact;
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

	public function getTrackingChannelsId():  ?int
	{
		return $this->tracking_channels_id;
	}

	public function setTrackingChannelsId(int $tracking_channels_id) : self
	{
		$this->tracking_channels_id = $tracking_channels_id;
		return $this;
	}

	public function getChannelTotal():  ?float
	{
		return $this->channel_total;
	}

	public function setChannelTotal(float $channel_total) : self
	{
		$this->channel_total = $channel_total;
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

	public function getSourceTotal():  ?float
	{
		return $this->source_total;
	}

	public function setSourceTotal(float $source_total) : self
	{
		$this->source_total = $source_total;
		return $this;
	}

	public function getTrackingUtmMediumsId():  ?int
	{
		return $this->tracking_utm_mediums_id;
	}

	public function setTrackingUtmMediumsId(int $tracking_utm_mediums_id) : self
	{
		$this->tracking_utm_mediums_id = $tracking_utm_mediums_id;
		return $this;
	}

	public function getMediumTotal():  ?float
	{
		return $this->medium_total;
	}

	public function setMediumTotal(float $medium_total) : self
	{
		$this->medium_total = $medium_total;
		return $this;
	}

	public function getTrackingUtmTermsId():  ?int
	{
		return $this->tracking_utm_terms_id;
	}

	public function setTrackingUtmTermsId(int $tracking_utm_terms_id) : self
	{
		$this->tracking_utm_terms_id = $tracking_utm_terms_id;
		return $this;
	}

	public function getTermTotal():  ?float
	{
		return $this->term_total;
	}

	public function setTermTotal(float $term_total) : self
	{
		$this->term_total = $term_total;
		return $this;
	}

	public function getTrackingUtmContentsId():  ?int
	{
		return $this->tracking_utm_contents_id;
	}

	public function setTrackingUtmContentsId(int $tracking_utm_contents_id) : self
	{
		$this->tracking_utm_contents_id = $tracking_utm_contents_id;
		return $this;
	}

	public function getContentTotal():  ?float
	{
		return $this->content_total;
	}

	public function setContentTotal(float $content_total) : self
	{
		$this->content_total = $content_total;
		return $this;
	}

	public function getTrackingUtmCampaignsId():  ?int
	{
		return $this->tracking_utm_campaigns_id;
	}

	public function setTrackingUtmCampaignsId(int $tracking_utm_campaigns_id) : self
	{
		$this->tracking_utm_campaigns_id = $tracking_utm_campaigns_id;
		return $this;
	}

	public function getCampaignTotal():  ?float
	{
		return $this->campaign_total;
	}

	public function setCampaignTotal(float $campaign_total) : self
	{
		$this->campaign_total = $campaign_total;
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