<?php

namespace App\Entity\Return;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Return\ReturnTrackingIdFreeListRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ReturnTrackingIdFreeListRepository::class)]
#[ORM\Table(name: "return_tracking_id_free_list")]
class ReturnTrackingIdFreeList
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $return_tracking_id_list_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $return_tracking_id = null;

	#[ORM\Column]
	private ?string $used = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_of_use = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getReturnTrackingIdListId():  ?int
	{
		return $this->return_tracking_id_list_id;
	}

	public function setReturnTrackingIdListId(int $return_tracking_id_list_id) : self
	{
		$this->return_tracking_id_list_id = $return_tracking_id_list_id;
		return $this;
	}

	public function getReturnTrackingId():  ?string
	{
		return $this->return_tracking_id;
	}

	public function setReturnTrackingId(string $return_tracking_id) : self
	{
		$this->return_tracking_id = $return_tracking_id;
		return $this;
	}

	public function getUsed():  ?string
	{
		return $this->used;
	}

	public function setUsed(string $used) : self
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