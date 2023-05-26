<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsCategoriesDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsCategoriesDescriptionRepository::class)]
#[ORM\Table(name: "shops_categories_description")]
class ShopsCategoriesDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_categories_description_id = null;

	#[ORM\Column]
	private ?int $shops_categories_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	#[ORM\Column(length: 128, nullable: true)]
	private ?string $shops_categories_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $shops_categories_title = null;

	#[ORM\Column(nullable: true)]
	private ?string $shops_categories_description = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $shops_categories_image = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $seo_title = null;

	#[ORM\Column(nullable: true)]
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

	public function getShopsCategoriesDescriptionId():  ?int
	{
		return $this->shops_categories_description_id;
	}

	public function setShopsCategoriesDescriptionId(int $shops_categories_description_id) : self
	{
		$this->shops_categories_description_id = $shops_categories_description_id;
		return $this;
	}

	public function getShopsCategoriesId():  ?int
	{
		return $this->shops_categories_id;
	}

	public function setShopsCategoriesId(int $shops_categories_id) : self
	{
		$this->shops_categories_id = $shops_categories_id;
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

	public function getShopsCategoriesName():  ?string
	{
		return $this->shops_categories_name;
	}

	public function setShopsCategoriesName(string $shops_categories_name) : self
	{
		$this->shops_categories_name = $shops_categories_name;
		return $this;
	}

	public function getShopsCategoriesTitle():  ?string
	{
		return $this->shops_categories_title;
	}

	public function setShopsCategoriesTitle(string $shops_categories_title) : self
	{
		$this->shops_categories_title = $shops_categories_title;
		return $this;
	}

	public function getShopsCategoriesDescription():  ?string
	{
		return $this->shops_categories_description;
	}

	public function setShopsCategoriesDescription(string $shops_categories_description) : self
	{
		$this->shops_categories_description = $shops_categories_description;
		return $this;
	}

	public function getShopsCategoriesImage():  ?string
	{
		return $this->shops_categories_image;
	}

	public function setShopsCategoriesImage(string $shops_categories_image) : self
	{
		$this->shops_categories_image = $shops_categories_image;
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