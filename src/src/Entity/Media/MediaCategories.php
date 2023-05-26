<?php

namespace App\Entity\Media;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Media\MediaCategoriesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: MediaCategoriesRepository::class)]
#[ORM\Table(name: "media_categories")]
class MediaCategories
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $media_categories_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $media_categories_code = null;

	 #[ORM\Column(length: 128)]
	private ?string $media_categories_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getMediaCategoriesId():  ?int
	{
		return $this->media_categories_id;
	}

	public function setMediaCategoriesId(int $media_categories_id) : self
	{
		$this->media_categories_id = $media_categories_id;
		return $this;
	}

	public function getMediaCategoriesCode():  ?string
	{
		return $this->media_categories_code;
	}

	public function setMediaCategoriesCode(string $media_categories_code) : self
	{
		$this->media_categories_code = $media_categories_code;
		return $this;
	}

	public function getMediaCategoriesName():  ?string
	{
		return $this->media_categories_name;
	}

	public function setMediaCategoriesName(string $media_categories_name) : self
	{
		$this->media_categories_name = $media_categories_name;
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