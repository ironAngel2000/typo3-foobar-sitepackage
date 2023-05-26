<?php

namespace App\Entity\Text;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Text\TextBlocksTypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TextBlocksTypesRepository::class)]
#[ORM\Table(name: "text_blocks_types")]
class TextBlocksTypes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $text_blocks_types_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $text_blocks_types_code = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTextBlocksTypesId():  ?int
	{
		return $this->text_blocks_types_id;
	}

	public function setTextBlocksTypesId(int $text_blocks_types_id) : self
	{
		$this->text_blocks_types_id = $text_blocks_types_id;
		return $this;
	}

	public function getTextBlocksTypesCode():  ?string
	{
		return $this->text_blocks_types_code;
	}

	public function setTextBlocksTypesCode(string $text_blocks_types_code) : self
	{
		$this->text_blocks_types_code = $text_blocks_types_code;
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