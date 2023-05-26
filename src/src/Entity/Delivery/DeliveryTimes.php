<?php

namespace App\Entity\Delivery;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Delivery\DeliveryTimesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: DeliveryTimesRepository::class)]
#[ORM\Table(name: "delivery_times")]
class DeliveryTimes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $delivery_times_id = null;

	#[ORM\Column(length: 60, nullable: true)]
	private ?string $delivery_times_code = null;

	#[ORM\Column(nullable: true)]
	private ?int $sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getDeliveryTimesId():  ?int
	{
		return $this->delivery_times_id;
	}

	public function setDeliveryTimesId(int $delivery_times_id) : self
	{
		$this->delivery_times_id = $delivery_times_id;
		return $this;
	}

	public function getDeliveryTimesCode():  ?string
	{
		return $this->delivery_times_code;
	}

	public function setDeliveryTimesCode(string $delivery_times_code) : self
	{
		$this->delivery_times_code = $delivery_times_code;
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