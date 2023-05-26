<?php

namespace App\Entity\Media;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Media\MediaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: MediaRepository::class)]
#[ORM\Table(name: "media")]
class Media
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $media_id = null;

	 #[ORM\Column(length: 250)]
	private ?string $media_name = null;

	 #[ORM\Column(length: 250)]
	private ?string $media_file_name = null;

	#[ORM\Column]
	private ?int $media_types_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $media_directories_id = null;

	#[ORM\Column]
	private ?int $media_categories_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getMediaId():  ?int
	{
		return $this->media_id;
	}

	public function setMediaId(int $media_id) : self
	{
		$this->media_id = $media_id;
		return $this;
	}

	public function getMediaName():  ?string
	{
		return $this->media_name;
	}

	public function setMediaName(string $media_name) : self
	{
		$this->media_name = $media_name;
		return $this;
	}

	public function getMediaFileName():  ?string
	{
		return $this->media_file_name;
	}

	public function setMediaFileName(string $media_file_name) : self
	{
		$this->media_file_name = $media_file_name;
		return $this;
	}

	public function getMediaTypesId():  ?int
	{
		return $this->media_types_id;
	}

	public function setMediaTypesId(int $media_types_id) : self
	{
		$this->media_types_id = $media_types_id;
		return $this;
	}

	public function getMediaDirectoriesId():  ?int
	{
		return $this->media_directories_id;
	}

	public function setMediaDirectoriesId(int $media_directories_id) : self
	{
		$this->media_directories_id = $media_directories_id;
		return $this;
	}

	public function getMediaCategoriesId():  ?int
	{
		return $this->media_categories_id;
	}

	public function setMediaCategoriesId(int $media_categories_id) : self
	{
		$this->media_categories_id = $media_categories_id;
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