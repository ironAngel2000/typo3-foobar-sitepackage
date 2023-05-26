<?php

namespace App\Entity\Shopbots;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shopbots\ShopbotsMatchingDeliveryTimesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopbotsMatchingDeliveryTimesRepository::class)]
#[ORM\Table(name: "shopbots_matching_delivery_times")]
class ShopbotsMatchingDeliveryTimes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shopbots_matching_delivery_times_id = null;

	#[ORM\Column]
	private ?int $shopbots_id = null;

	#[ORM\Column]
	private ?int $delivery_times_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $shopbots_delivery_times_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopbotsMatchingDeliveryTimesId():  ?int
	{
		return $this->shopbots_matching_delivery_times_id;
	}

	public function setShopbotsMatchingDeliveryTimesId(int $shopbots_matching_delivery_times_id) : self
	{
		$this->shopbots_matching_delivery_times_id = $shopbots_matching_delivery_times_id;
		return $this;
	}

	public function getShopbotsId():  ?int
	{
		return $this->shopbots_id;
	}

	public function setShopbotsId(int $shopbots_id) : self
	{
		$this->shopbots_id = $shopbots_id;
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

	public function getShopbotsDeliveryTimesCode():  ?string
	{
		return $this->shopbots_delivery_times_code;
	}

	public function setShopbotsDeliveryTimesCode(string $shopbots_delivery_times_code) : self
	{
		$this->shopbots_delivery_times_code = $shopbots_delivery_times_code;
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