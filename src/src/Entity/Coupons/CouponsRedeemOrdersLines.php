<?php

namespace App\Entity\Coupons;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Coupons\CouponsRedeemOrdersLinesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CouponsRedeemOrdersLinesRepository::class)]
#[ORM\Table(name: "coupons_redeem_orders_lines")]
class CouponsRedeemOrdersLines
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $coupons_redeem_orders_lines_id = null;

	#[ORM\Column]
	private ?int $coupons_redeem_id = null;

	#[ORM\Column]
	private ?int $orders_lines_id = null;

	#[ORM\Column]
	private ?float $rebate = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getCouponsRedeemOrdersLinesId():  ?int
	{
		return $this->coupons_redeem_orders_lines_id;
	}

	public function setCouponsRedeemOrdersLinesId(int $coupons_redeem_orders_lines_id) : self
	{
		$this->coupons_redeem_orders_lines_id = $coupons_redeem_orders_lines_id;
		return $this;
	}

	public function getCouponsRedeemId():  ?int
	{
		return $this->coupons_redeem_id;
	}

	public function setCouponsRedeemId(int $coupons_redeem_id) : self
	{
		$this->coupons_redeem_id = $coupons_redeem_id;
		return $this;
	}

	public function getOrdersLinesId():  ?int
	{
		return $this->orders_lines_id;
	}

	public function setOrdersLinesId(int $orders_lines_id) : self
	{
		$this->orders_lines_id = $orders_lines_id;
		return $this;
	}

	public function getRebate():  ?float
	{
		return $this->rebate;
	}

	public function setRebate(float $rebate) : self
	{
		$this->rebate = $rebate;
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