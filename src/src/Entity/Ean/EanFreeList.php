<?php

namespace App\Entity\Ean;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Ean\EanFreeListRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: EanFreeListRepository::class)]
#[ORM\Table(name: "ean_free_list")]
class EanFreeList
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $ean_free_list_id = null;

	#[ORM\Column]
	private ?string $ean = null;

	#[ORM\Column]
	private ?int $used = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_of_use = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getEanFreeListId():  ?int
	{
		return $this->ean_free_list_id;
	}

	public function setEanFreeListId(int $ean_free_list_id) : self
	{
		$this->ean_free_list_id = $ean_free_list_id;
		return $this;
	}

	public function getEan():  ?string
	{
		return $this->ean;
	}

	public function setEan(string $ean) : self
	{
		$this->ean = $ean;
		return $this;
	}

	public function getUsed():  ?int
	{
		return $this->used;
	}

	public function setUsed(int $used) : self
	{
		$this->used = $used;
		return $this;
	}

	public function getDateOfUse():  ?\DateTimeInterface
	{
		return $this->date_of_use;
	}

	public function setDateOfUse(\DateTimeInterface $date_of_use) : self
	{
		$this->date_of_use = $date_of_use;
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