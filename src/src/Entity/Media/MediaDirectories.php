<?php

namespace App\Entity\Media;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Media\MediaDirectoriesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: MediaDirectoriesRepository::class)]
#[ORM\Table(name: "media_directories")]
class MediaDirectories
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $media_directories_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $parent_id = null;

	 #[ORM\Column(length: 128)]
	private ?string $media_directories_name = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getMediaDirectoriesId():  ?int
	{
		return $this->media_directories_id;
	}

	public function setMediaDirectoriesId(int $media_directories_id) : self
	{
		$this->media_directories_id = $media_directories_id;
		return $this;
	}

	public function getParentId():  ?int
	{
		return $this->parent_id;
	}

	public function setParentId(int $parent_id) : self
	{
		$this->parent_id = $parent_id;
		return $this;
	}

	public function getMediaDirectoriesName():  ?string
	{
		return $this->media_directories_name;
	}

	public function setMediaDirectoriesName(string $media_directories_name) : self
	{
		$this->media_directories_name = $media_directories_name;
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