<?php

namespace App\Entity\Text;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Text\TextBlocksDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TextBlocksDescriptionRepository::class)]
#[ORM\Table(name: "text_blocks_description")]
class TextBlocksDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $text_blocks_description_id = null;

	#[ORM\Column]
	private ?int $text_blocks_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $text_blocks_name = null;

	#[ORM\Column]
	private ?string $text_blocks_text = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTextBlocksDescriptionId():  ?int
	{
		return $this->text_blocks_description_id;
	}

	public function setTextBlocksDescriptionId(int $text_blocks_description_id) : self
	{
		$this->text_blocks_description_id = $text_blocks_description_id;
		return $this;
	}

	public function getTextBlocksId():  ?int
	{
		return $this->text_blocks_id;
	}

	public function setTextBlocksId(int $text_blocks_id) : self
	{
		$this->text_blocks_id = $text_blocks_id;
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

	public function getTextBlocksName():  ?string
	{
		return $this->text_blocks_name;
	}

	public function setTextBlocksName(string $text_blocks_name) : self
	{
		$this->text_blocks_name = $text_blocks_name;
		return $this;
	}

	public function getTextBlocksText():  ?string
	{
		return $this->text_blocks_text;
	}

	public function setTextBlocksText(string $text_blocks_text) : self
	{
		$this->text_blocks_text = $text_blocks_text;
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