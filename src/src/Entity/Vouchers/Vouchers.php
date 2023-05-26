<?php

namespace App\Entity\Vouchers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Vouchers\VouchersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: VouchersRepository::class)]
#[ORM\Table(name: "vouchers")]
class Vouchers
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $vouchers_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $vouchers_parent_id = null;

	#[ORM\Column]
	private ?int $coupons_id = null;

	#[ORM\Column]
	private ?string $vouchers_amount = null;

	#[ORM\Column(nullable: true)]
	private ?int $redeemed_in_orders_id = null;

	#[ORM\Column]
	private ?string $redeemed_amount = null;

	#[ORM\Column]
	private ?string $calculated_amount = null;

	#[ORM\Column]
	private ?string $is_sent = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getVouchersId():  ?int
	{
		return $this->vouchers_id;
	}

	public function setVouchersId(int $vouchers_id) : self
	{
		$this->vouchers_id = $vouchers_id;
		return $this;
	}

	public function getVouchersParentId():  ?int
	{
		return $this->vouchers_parent_id;
	}

	public function setVouchersParentId(int $vouchers_parent_id) : self
	{
		$this->vouchers_parent_id = $vouchers_parent_id;
		return $this;
	}

	public function getCouponsId():  ?int
	{
		return $this->coupons_id;
	}

	public function setCouponsId(int $coupons_id) : self
	{
		$this->coupons_id = $coupons_id;
		return $this;
	}

	public function getVouchersAmount():  ?string
	{
		return $this->vouchers_amount;
	}

	public function setVouchersAmount(string $vouchers_amount) : self
	{
		$this->vouchers_amount = $vouchers_amount;
		return $this;
	}

	public function getRedeemedInOrdersId():  ?int
	{
		return $this->redeemed_in_orders_id;
	}

	public function setRedeemedInOrdersId(int $redeemed_in_orders_id) : self
	{
		$this->redeemed_in_orders_id = $redeemed_in_orders_id;
		return $this;
	}

	public function getRedeemedAmount():  ?string
	{
		return $this->redeemed_amount;
	}

	public function setRedeemedAmount(string $redeemed_amount) : self
	{
		$this->redeemed_amount = $redeemed_amount;
		return $this;
	}

	public function getCalculatedAmount():  ?string
	{
		return $this->calculated_amount;
	}

	public function setCalculatedAmount(string $calculated_amount) : self
	{
		$this->calculated_amount = $calculated_amount;
		return $this;
	}

	public function getIsSent():  ?string
	{
		return $this->is_sent;
	}

	public function setIsSent(string $is_sent) : self
	{
		$this->is_sent = $is_sent;
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