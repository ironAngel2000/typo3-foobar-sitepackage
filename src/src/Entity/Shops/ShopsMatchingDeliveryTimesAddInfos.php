<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsMatchingDeliveryTimesAddInfosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsMatchingDeliveryTimesAddInfosRepository::class)]
#[ORM\Table(name: "shops_matching_delivery_times_add_infos")]
class ShopsMatchingDeliveryTimesAddInfos
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_matching_delivery_times_add_infos_id = null;

	#[ORM\Column]
	private ?int $shops_matching_delivery_times_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $key = null;

	 #[ORM\Column(length: 255)]
	private ?string $value = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsMatchingDeliveryTimesAddInfosId():  ?int
	{
		return $this->shops_matching_delivery_times_add_infos_id;
	}

	public function setShopsMatchingDeliveryTimesAddInfosId(int $shops_matching_delivery_times_add_infos_id) : self
	{
		$this->shops_matching_delivery_times_add_infos_id = $shops_matching_delivery_times_add_infos_id;
		return $this;
	}

	public function getShopsMatchingDeliveryTimesId():  ?int
	{
		return $this->shops_matching_delivery_times_id;
	}

	public function setShopsMatchingDeliveryTimesId(int $shops_matching_delivery_times_id) : self
	{
		$this->shops_matching_delivery_times_id = $shops_matching_delivery_times_id;
		return $this;
	}

	public function getKey():  ?string
	{
		return $this->key;
	}

	public function setKey(string $key) : self
	{
		$this->key = $key;
		return $this;
	}

	public function getValue():  ?string
	{
		return $this->value;
	}

	public function setValue(string $value) : self
	{
		$this->value = $value;
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