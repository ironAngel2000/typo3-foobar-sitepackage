<?php

namespace App\Entity\Delivery;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Delivery\DeliveryTimesDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: DeliveryTimesDescriptionRepository::class)]
#[ORM\Table(name: "delivery_times_description")]
class DeliveryTimesDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $delivery_times_description_id = null;

	#[ORM\Column]
	private ?int $delivery_times_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $delivery_times_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getDeliveryTimesDescriptionId():  ?int
	{
		return $this->delivery_times_description_id;
	}

	public function setDeliveryTimesDescriptionId(int $delivery_times_description_id) : self
	{
		$this->delivery_times_description_id = $delivery_times_description_id;
		return $this;
	}

	public function getDeliveryTimesId():  ?int
	{
		return $this->delivery_times_id;
	}

	public function setDeliveryTimesId(int $delivery_times_id) : self
	{
		$this->delivery_times_id = $delivery_times_id;
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

	public function getDeliveryTimesName():  ?string
	{
		return $this->delivery_times_name;
	}

	public function setDeliveryTimesName(string $delivery_times_name) : self
	{
		$this->delivery_times_name = $delivery_times_name;
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