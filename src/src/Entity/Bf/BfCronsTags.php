<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfCronsTagsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfCronsTagsRepository::class)]
#[ORM\Table(name: "bf_crons_tags")]
class BfCronsTags
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_crons_tags_id = null;

	#[ORM\Column]
	private ?int $bf_crons_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $tag = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfCronsTagsId():  ?int
	{
		return $this->bf_crons_tags_id;
	}

	public function setBfCronsTagsId(int $bf_crons_tags_id) : self
	{
		$this->bf_crons_tags_id = $bf_crons_tags_id;
		return $this;
	}

	public function getBfCronsId():  ?int
	{
		return $this->bf_crons_id;
	}

	public function setBfCronsId(int $bf_crons_id) : self
	{
		$this->bf_crons_id = $bf_crons_id;
		return $this;
	}

	public function getTag():  ?string
	{
		return $this->tag;
	}

	public function setTag(string $tag) : self
	{
		$this->tag = $tag;
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