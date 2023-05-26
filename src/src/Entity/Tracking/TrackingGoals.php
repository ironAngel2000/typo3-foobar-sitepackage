<?php

namespace App\Entity\Tracking;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tracking\TrackingGoalsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TrackingGoalsRepository::class)]
#[ORM\Table(name: "tracking_goals")]
class TrackingGoals
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tracking_goals_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $log_goal_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $tracking_clients_id = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $goal = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $goal_date = null;

	#[ORM\Column(nullable: true)]
	private ?string $ecommerce = null;

	#[ORM\Column(nullable: true)]
	private ?int $cookie_len = null;

	#[ORM\Column(nullable: true)]
	private ?int $cid_count = null;

	#[ORM\Column(nullable: true)]
	private ?string $total = null;

	#[ORM\Column(nullable: true)]
	private ?string $total_net = null;

	#[ORM\Column(nullable: true)]
	private ?string $amount = null;

	#[ORM\Column(nullable: true)]
	private ?string $amount_net = null;

	#[ORM\Column(nullable: true)]
	private ?string $shipping = null;

	#[ORM\Column(nullable: true)]
	private ?string $shipping_net = null;

	#[ORM\Column(nullable: true)]
	private ?string $tax = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $status = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $payment = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

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

	public function getGoal():  ?string
	{
		return $this->goal;
	}

	public function setGoal(string $goal) : self
	{
		$this->goal = $goal;
		return $this;
	}

	public function getGoalDate():  ?\DateTimeInterface
	{
		return $this->goal_date;
	}

	public function setGoalDate(\DateTimeInterface $goal_date) : self
	{
		$this->goal_date = $goal_date;
		return $this;
	}

	public function getEcommerce():  ?string
	{
		return $this->ecommerce;
	}

	public function setEcommerce(string $ecommerce) : self
	{
		$this->ecommerce = $ecommerce;
		return $this;
	}

	public function getCookieLen():  ?int
	{
		return $this->cookie_len;
	}

	public function setCookieLen(int $cookie_len) : self
	{
		$this->cookie_len = $cookie_len;
		return $this;
	}

	public function getCidCount():  ?int
	{
		return $this->cid_count;
	}

	public function setCidCount(int $cid_count) : self
	{
		$this->cid_count = $cid_count;
		return $this;
	}

	public function getTotal():  ?string
	{
		return $this->total;
	}

	public function setTotal(string $total) : self
	{
		$this->total = $total;
		return $this;
	}

	public function getTotalNet():  ?string
	{
		return $this->total_net;
	}

	public function setTotalNet(string $total_net) : self
	{
		$this->total_net = $total_net;
		return $this;
	}

	public function getAmount():  ?string
	{
		return $this->amount;
	}

	public function setAmount(string $amount) : self
	{
		$this->amount = $amount;
		return $this;
	}

	public function getAmountNet():  ?string
	{
		return $this->amount_net;
	}

	public function setAmountNet(string $amount_net) : self
	{
		$this->amount_net = $amount_net;
		return $this;
	}

	public function getShipping():  ?string
	{
		return $this->shipping;
	}

	public function setShipping(string $shipping) : self
	{
		$this->shipping = $shipping;
		return $this;
	}

	public function getShippingNet():  ?string
	{
		return $this->shipping_net;
	}

	public function setShippingNet(string $shipping_net) : self
	{
		$this->shipping_net = $shipping_net;
		return $this;
	}

	public function getTax():  ?string
	{
		return $this->tax;
	}

	public function setTax(string $tax) : self
	{
		$this->tax = $tax;
		return $this;
	}

	public function getStatus():  ?string
	{
		return $this->status;
	}

	public function setStatus(string $status) : self
	{
		$this->status = $status;
		return $this;
	}

	public function getPayment():  ?string
	{
		return $this->payment;
	}

	public function setPayment(string $payment) : self
	{
		$this->payment = $payment;
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