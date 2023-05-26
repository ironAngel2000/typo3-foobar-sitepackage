<?php

namespace App\Entity\Coupons;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Coupons\CouponsGroupsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CouponsGroupsRepository::class)]
#[ORM\Table(name: "coupons_groups")]
class CouponsGroups
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $coupons_groups_id = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $extern_coupons_groups_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $coupons_groups_code = null;

	 #[ORM\Column(length: 50)]
	private ?string $coupon_code_prefix = null;

	#[ORM\Column]
	private ?int $coupon_code_length = null;

	 #[ORM\Column(length: 50)]
	private ?string $coupon_code_secret = null;

	#[ORM\Column(nullable: true)]
	private ?int $coupons_types_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $coupons_reduce_types_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $rebate = null;

	#[ORM\Column(nullable: true)]
	private ?string $minimum_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $start = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $end = null;

	#[ORM\Column(nullable: true)]
	private ?string $restricted_to_user = null;

	#[ORM\Column(nullable: true)]
	private ?int $creates_per_coupon = null;

	#[ORM\Column(nullable: true)]
	private ?int $creates_per_user = null;

	#[ORM\Column(nullable: true)]
	private ?int $products_variations_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getCouponsGroupsId():  ?int
	{
		return $this->coupons_groups_id;
	}

	public function setCouponsGroupsId(int $coupons_groups_id) : self
	{
		$this->coupons_groups_id = $coupons_groups_id;
		return $this;
	}

	public function getExternCouponsGroupsId():  ?string
	{
		return $this->extern_coupons_groups_id;
	}

	public function setExternCouponsGroupsId(string $extern_coupons_groups_id) : self
	{
		$this->extern_coupons_groups_id = $extern_coupons_groups_id;
		return $this;
	}

	public function getShopsId():  ?int
	{
		return $this->shops_id;
	}

	public function setShopsId(int $shops_id) : self
	{
		$this->shops_id = $shops_id;
		return $this;
	}

	public function getCouponsGroupsCode():  ?string
	{
		return $this->coupons_groups_code;
	}

	public function setCouponsGroupsCode(string $coupons_groups_code) : self
	{
		$this->coupons_groups_code = $coupons_groups_code;
		return $this;
	}

	public function getCouponCodePrefix():  ?string
	{
		return $this->coupon_code_prefix;
	}

	public function setCouponCodePrefix(string $coupon_code_prefix) : self
	{
		$this->coupon_code_prefix = $coupon_code_prefix;
		return $this;
	}

	public function getCouponCodeLength():  ?int
	{
		return $this->coupon_code_length;
	}

	public function setCouponCodeLength(int $coupon_code_length) : self
	{
		$this->coupon_code_length = $coupon_code_length;
		return $this;
	}

	public function getCouponCodeSecret():  ?string
	{
		return $this->coupon_code_secret;
	}

	public function setCouponCodeSecret(string $coupon_code_secret) : self
	{
		$this->coupon_code_secret = $coupon_code_secret;
		return $this;
	}

	public function getCouponsTypesId():  ?int
	{
		return $this->coupons_types_id;
	}

	public function setCouponsTypesId(int $coupons_types_id) : self
	{
		$this->coupons_types_id = $coupons_types_id;
		return $this;
	}

	public function getCouponsReduceTypesId():  ?int
	{
		return $this->coupons_reduce_types_id;
	}

	public function setCouponsReduceTypesId(int $coupons_reduce_types_id) : self
	{
		$this->coupons_reduce_types_id = $coupons_reduce_types_id;
		return $this;
	}

	public function getRebate():  ?string
	{
		return $this->rebate;
	}

	public function setRebate(string $rebate) : self
	{
		$this->rebate = $rebate;
		return $this;
	}

	public function getMinimumOrder():  ?string
	{
		return $this->minimum_order;
	}

	public function setMinimumOrder(string $minimum_order) : self
	{
		$this->minimum_order = $minimum_order;
		return $this;
	}

	public function getStart():  ?\DateTimeInterface
	{
		return $this->start;
	}

	public function setStart(\DateTimeInterface $start) : self
	{
		$this->start = $start;
		return $this;
	}

	public function getEnd():  ?\DateTimeInterface
	{
		return $this->end;
	}

	public function setEnd(\DateTimeInterface $end) : self
	{
		$this->end = $end;
		return $this;
	}

	public function getRestrictedToUser():  ?string
	{
		return $this->restricted_to_user;
	}

	public function setRestrictedToUser(string $restricted_to_user) : self
	{
		$this->restricted_to_user = $restricted_to_user;
		return $this;
	}

	public function getCreatesPerCoupon():  ?int
	{
		return $this->creates_per_coupon;
	}

	public function setCreatesPerCoupon(int $creates_per_coupon) : self
	{
		$this->creates_per_coupon = $creates_per_coupon;
		return $this;
	}

	public function getCreatesPerUser():  ?int
	{
		return $this->creates_per_user;
	}

	public function setCreatesPerUser(int $creates_per_user) : self
	{
		$this->creates_per_user = $creates_per_user;
		return $this;
	}

	public function getProductsVariationsId():  ?int
	{
		return $this->products_variations_id;
	}

	public function setProductsVariationsId(int $products_variations_id) : self
	{
		$this->products_variations_id = $products_variations_id;
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