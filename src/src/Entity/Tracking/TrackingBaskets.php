<?php

namespace App\Entity\Tracking;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tracking\TrackingBasketsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TrackingBasketsRepository::class)]
#[ORM\Table(name: "tracking_baskets")]
class TrackingBaskets
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tracking_baskets_id = null;

	#[ORM\Column]
	private ?int $tracking_goals_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $log_goal_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_clients_id = null;

	 #[ORM\Column(length: 32)]
	private ?string $basket_id = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $sku = null;

	#[ORM\Column(length: 256, nullable: true)]
	private ?string $product_name = null;

	#[ORM\Column(nullable: true)]
	private ?int $quantity = null;

	#[ORM\Column(nullable: true)]
	private ?string $unit_price = null;

	#[ORM\Column(nullable: true)]
	private ?string $unit_price_net = null;

	#[ORM\Column(length: 128, nullable: true)]
	private ?string $category = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTrackingBasketsId():  ?int
	{
		return $this->tracking_baskets_id;
	}

	public function setTrackingBasketsId(int $tracking_baskets_id) : self
	{
		$this->tracking_baskets_id = $tracking_baskets_id;
		return $this;
	}

	public function getTrackingGoalsId():  ?int
	{
		return $this->tracking_goals_id;
	}

	public function setTrackingGoalsId(int $tracking_goals_id) : self
	{
		$this->tracking_goals_id = $tracking_goals_id;
		return $this;
	}

	public function getLogGoalId():  ?int
	{
		return $this->log_goal_id;
	}

	public function setLogGoalId(int $log_goal_id) : self
	{
		$this->log_goal_id = $log_goal_id;
		return $this;
	}

	public function getTrackingClientsId():  ?int
	{
		return $this->tracking_clients_id;
	}

	public function setTrackingClientsId(int $tracking_clients_id) : self
	{
		$this->tracking_clients_id = $tracking_clients_id;
		return $this;
	}

	public function getBasketId():  ?string
	{
		return $this->basket_id;
	}

	public function setBasketId(string $basket_id) : self
	{
		$this->basket_id = $basket_id;
		return $this;
	}

	public function getSku():  ?string
	{
		return $this->sku;
	}

	public function setSku(string $sku) : self
	{
		$this->sku = $sku;
		return $this;
	}

	public function getProductName():  ?string
	{
		return $this->product_name;
	}

	public function setProductName(string $product_name) : self
	{
		$this->product_name = $product_name;
		return $this;
	}

	public function getQuantity():  ?int
	{
		return $this->quantity;
	}

	public function setQuantity(int $quantity) : self
	{
		$this->quantity = $quantity;
		return $this;
	}

	public function getUnitPrice():  ?string
	{
		return $this->unit_price;
	}

	public function setUnitPrice(string $unit_price) : self
	{
		$this->unit_price = $unit_price;
		return $this;
	}

	public function getUnitPriceNet():  ?string
	{
		return $this->unit_price_net;
	}

	public function setUnitPriceNet(string $unit_price_net) : self
	{
		$this->unit_price_net = $unit_price_net;
		return $this;
	}

	public function getCategory():  ?string
	{
		return $this->category;
	}

	public function setCategory(string $category) : self
	{
		$this->category = $category;
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