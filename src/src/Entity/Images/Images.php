<?php

namespace App\Entity\Images;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Images\ImagesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ImagesRepository::class)]
#[ORM\Table(name: "images")]
class Images
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $images_id = null;

	 #[ORM\Column(length: 32)]
	private ?string $image_type = null;

	#[ORM\Column(length: 500, nullable: true)]
	private ?string $image_name = null;

	#[ORM\Column(nullable: true)]
	private ?int $width = null;

	#[ORM\Column(nullable: true)]
	private ?int $height = null;

	#[ORM\Column(nullable: true)]
	private ?string $is_invalid_path = null;

	 #[ORM\Column(length: 255)]
	private ?string $image_name_branded = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getImagesId():  ?int
	{
		return $this->images_id;
	}

	public function setImagesId(int $images_id) : self
	{
		$this->images_id = $images_id;
		return $this;
	}

	public function getImageType():  ?string
	{
		return $this->image_type;
	}

	public function setImageType(string $image_type) : self
	{
		$this->image_type = $image_type;
		return $this;
	}

	public function getImageName():  ?string
	{
		return $this->image_name;
	}

	public function setImageName(string $image_name) : self
	{
		$this->image_name = $image_name;
		return $this;
	}

	public function getWidth():  ?int
	{
		return $this->width;
	}

	public function setWidth(int $width) : self
	{
		$this->width = $width;
		return $this;
	}

	public function getHeight():  ?int
	{
		return $this->height;
	}

	public function setHeight(int $height) : self
	{
		$this->height = $height;
		return $this;
	}

	public function getIsInvalidPath():  ?string
	{
		return $this->is_invalid_path;
	}

	public function setIsInvalidPath(string $is_invalid_path) : self
	{
		$this->is_invalid_path = $is_invalid_path;
		return $this;
	}

	public function getImageNameBranded():  ?string
	{
		return $this->image_name_branded;
	}

	public function setImageNameBranded(string $image_name_branded) : self
	{
		$this->image_name_branded = $image_name_branded;
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