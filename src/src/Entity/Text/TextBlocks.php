<?php

namespace App\Entity\Text;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Text\TextBlocksRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TextBlocksRepository::class)]
#[ORM\Table(name: "text_blocks")]
class TextBlocks
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $text_blocks_id = null;

	#[ORM\Column]
	private ?int $text_blocks_groups_id = null;

	#[ORM\Column]
	private ?int $text_blocks_types_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTextBlocksId():  ?int
	{
		return $this->text_blocks_id;
	}

	public function setTextBlocksId(int $text_blocks_id) : self
	{
		$this->text_blocks_id = $text_blocks_id;
		return $this;
	}

	public function getTextBlocksGroupsId():  ?int
	{
		return $this->text_blocks_groups_id;
	}

	public function setTextBlocksGroupsId(int $text_blocks_groups_id) : self
	{
		$this->text_blocks_groups_id = $text_blocks_groups_id;
		return $this;
	}

	public function getTextBlocksTypesId():  ?int
	{
		return $this->text_blocks_types_id;
	}

	public function setTextBlocksTypesId(int $text_blocks_types_id) : self
	{
		$this->text_blocks_types_id = $text_blocks_types_id;
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