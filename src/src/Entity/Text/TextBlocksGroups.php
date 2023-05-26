<?php

namespace App\Entity\Text;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Text\TextBlocksGroupsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TextBlocksGroupsRepository::class)]
#[ORM\Table(name: "text_blocks_groups")]
class TextBlocksGroups
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $text_blocks_groups_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $text_blocks_groups_code = null;

	#[ORM\Column]
	private ?string $text_blocks_updated = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTextBlocksGroupsId():  ?int
	{
		return $this->text_blocks_groups_id;
	}

	public function setTextBlocksGroupsId(int $text_blocks_groups_id) : self
	{
		$this->text_blocks_groups_id = $text_blocks_groups_id;
		return $this;
	}

	public function getTextBlocksGroupsCode():  ?string
	{
		return $this->text_blocks_groups_code;
	}

	public function setTextBlocksGroupsCode(string $text_blocks_groups_code) : self
	{
		$this->text_blocks_groups_code = $text_blocks_groups_code;
		return $this;
	}

	public function getTextBlocksUpdated():  ?string
	{
		return $this->text_blocks_updated;
	}

	public function setTextBlocksUpdated(string $text_blocks_updated) : self
	{
		$this->text_blocks_updated = $text_blocks_updated;
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