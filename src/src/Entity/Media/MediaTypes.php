<?php

namespace App\Entity\Media;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Media\MediaTypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: MediaTypesRepository::class)]
#[ORM\Table(name: "media_types")]
class MediaTypes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $media_types_id = null;

	#[ORM\Column(length: 16, nullable: true)]
	private ?string $file_type = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $title = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $mime_type = null;

	#[ORM\Column(length: 5, nullable: true)]
	private ?string $file_extension = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getMediaTypesId():  ?int
	{
		return $this->media_types_id;
	}

	public function setMediaTypesId(int $media_types_id) : self
	{
		$this->media_types_id = $media_types_id;
		return $this;
	}

	public function getFileType():  ?string
	{
		return $this->file_type;
	}

	public function setFileType(string $file_type) : self
	{
		$this->file_type = $file_type;
		return $this;
	}

	public function getTitle():  ?string
	{
		return $this->title;
	}

	public function setTitle(string $title) : self
	{
		$this->title = $title;
		return $this;
	}

	public function getMimeType():  ?string
	{
		return $this->mime_type;
	}

	public function setMimeType(string $mime_type) : self
	{
		$this->mime_type = $mime_type;
		return $this;
	}

	public function getFileExtension():  ?string
	{
		return $this->file_extension;
	}

	public function setFileExtension(string $file_extension) : self
	{
		$this->file_extension = $file_extension;
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