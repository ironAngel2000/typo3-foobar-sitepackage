<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsLanguagesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsLanguagesRepository::class)]
#[ORM\Table(name: "shops_languages")]
class ShopsLanguages
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_languages_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $extern_shops_languages_id = null;

	#[ORM\Column]
	private ?string $main_language = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsLanguagesId():  ?int
	{
		return $this->shops_languages_id;
	}

	public function setShopsLanguagesId(int $shops_languages_id) : self
	{
		$this->shops_languages_id = $shops_languages_id;
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

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
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

	public function getExternShopsLanguagesId():  ?string
	{
		return $this->extern_shops_languages_id;
	}

	public function setExternShopsLanguagesId(string $extern_shops_languages_id) : self
	{
		$this->extern_shops_languages_id = $extern_shops_languages_id;
		return $this;
	}

	public function getMainLanguage():  ?string
	{
		return $this->main_language;
	}

	public function setMainLanguage(string $main_language) : self
	{
		$this->main_language = $main_language;
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