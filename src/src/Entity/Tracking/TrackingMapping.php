<?php

namespace App\Entity\Tracking;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tracking\TrackingMappingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TrackingMappingRepository::class)]
#[ORM\Table(name: "tracking_mapping")]
class TrackingMapping
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tracking_mapping_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_utm_campaigns_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_utm_contents_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_utm_mediums_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_utm_sources_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_utm_terms_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTrackingMappingId():  ?int
	{
		return $this->tracking_mapping_id;
	}

	public function setTrackingMappingId(int $tracking_mapping_id) : self
	{
		$this->tracking_mapping_id = $tracking_mapping_id;
		return $this;
	}

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
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

	public function getTrackingUtmContentsId():  ?int
	{
		return $this->tracking_utm_contents_id;
	}

	public function setTrackingUtmContentsId(int $tracking_utm_contents_id) : self
	{
		$this->tracking_utm_contents_id = $tracking_utm_contents_id;
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

	public function getTrackingUtmSourcesId():  ?int
	{
		return $this->tracking_utm_sources_id;
	}

	public function setTrackingUtmSourcesId(int $tracking_utm_sources_id) : self
	{
		$this->tracking_utm_sources_id = $tracking_utm_sources_id;
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

	public function getName():  ?string
	{
		return $this->name;
	}

	public function setName(string $name) : self
	{
		$this->name = $name;
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