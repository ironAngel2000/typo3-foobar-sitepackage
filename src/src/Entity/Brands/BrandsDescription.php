<?php

namespace App\Entity\Brands;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Brands\BrandsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BrandsDescriptionRepository::class)]
#[ORM\Table(name: "brands_description")]
class BrandsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $brands_description_id = null;

	#[ORM\Column]
	private ?int $brands_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 150)]
	private ?string $brands_title = null;

	#[ORM\Column(nullable: true)]
	private ?string $brands_description = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $brands_url = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $brands_link_self = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $brands_image = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $seo_title = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $seo_description = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $seo_keywords = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $seo_abstract = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $seo_page_topic = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBrandsDescriptionId():  ?int
	{
		return $this->brands_description_id;
	}

	public function setBrandsDescriptionId(int $brands_description_id) : self
	{
		$this->brands_description_id = $brands_description_id;
		return $this;
	}

	public function getBrandsId():  ?int
	{
		return $this->brands_id;
	}

	public function setBrandsId(int $brands_id) : self
	{
		$this->brands_id = $brands_id;
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

	public function getBrandsTitle():  ?string
	{
		return $this->brands_title;
	}

	public function setBrandsTitle(string $brands_title) : self
	{
		$this->brands_title = $brands_title;
		return $this;
	}

	public function getBrandsDescription():  ?string
	{
		return $this->brands_description;
	}

	public function setBrandsDescription(string $brands_description) : self
	{
		$this->brands_description = $brands_description;
		return $this;
	}

	public function getBrandsUrl():  ?string
	{
		return $this->brands_url;
	}

	public function setBrandsUrl(string $brands_url) : self
	{
		$this->brands_url = $brands_url;
		return $this;
	}

	public function getBrandsLinkSelf():  ?string
	{
		return $this->brands_link_self;
	}

	public function setBrandsLinkSelf(string $brands_link_self) : self
	{
		$this->brands_link_self = $brands_link_self;
		return $this;
	}

	public function getBrandsImage():  ?string
	{
		return $this->brands_image;
	}

	public function setBrandsImage(string $brands_image) : self
	{
		$this->brands_image = $brands_image;
		return $this;
	}

	public function getSeoTitle():  ?string
	{
		return $this->seo_title;
	}

	public function setSeoTitle(string $seo_title) : self
	{
		$this->seo_title = $seo_title;
		return $this;
	}

	public function getSeoDescription():  ?string
	{
		return $this->seo_description;
	}

	public function setSeoDescription(string $seo_description) : self
	{
		$this->seo_description = $seo_description;
		return $this;
	}

	public function getSeoKeywords():  ?string
	{
		return $this->seo_keywords;
	}

	public function setSeoKeywords(string $seo_keywords) : self
	{
		$this->seo_keywords = $seo_keywords;
		return $this;
	}

	public function getSeoAbstract():  ?string
	{
		return $this->seo_abstract;
	}

	public function setSeoAbstract(string $seo_abstract) : self
	{
		$this->seo_abstract = $seo_abstract;
		return $this;
	}

	public function getSeoPageTopic():  ?string
	{
		return $this->seo_page_topic;
	}

	public function setSeoPageTopic(string $seo_page_topic) : self
	{
		$this->seo_page_topic = $seo_page_topic;
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