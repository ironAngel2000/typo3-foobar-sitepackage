<?php

namespace App\Entity\Coupons;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Coupons\CouponsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CouponsRepository::class)]
#[ORM\Table(name: "coupons")]
class Coupons
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $coupons_id = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $extern_coupons_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $coupons_code = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column]
	private ?int $coupons_types_id = null;

	#[ORM\Column]
	private ?int $coupons_reduce_types_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $coupons_groups_id = null;

	#[ORM\Column]
	private ?string $rebate = null;

	#[ORM\Column]
	private ?string $minimum_order = null;

	#[ORM\Column]
	private ?string $active = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $start = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $end = null;

	#[ORM\Column]
	private ?int $uses_per_coupon = null;

	#[ORM\Column]
	private ?int $uses_per_user = null;

	 #[ORM\Column(length: 50)]
	private ?string $restrict_to_user = null;

	#[ORM\Column(nullable: true)]
	private ?int $products_variations_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $origin_orders_id = null;

	#[ORM\Column]
	private ?string $is_deleted = null;

	 #[ORM\Column(length: 255)]
	private ?string $shops_categories_ids = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getCouponsId():  ?int
	{
		return $this->coupons_id;
	}

	public function setCouponsId(int $coupons_id) : self
	{
		$this->coupons_id = $coupons_id;
		return $this;
	}

	public function getExternCouponsId():  ?string
	{
		return $this->extern_coupons_id;
	}

	public function setExternCouponsId(string $extern_coupons_id) : self
	{
		$this->extern_coupons_id = $extern_coupons_id;
		return $this;
	}

	public function getCouponsCode():  ?string
	{
		return $this->coupons_code;
	}

	public function setCouponsCode(string $coupons_code) : self
	{
		$this->coupons_code = $coupons_code;
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

	public function getCouponsGroupsId():  ?int
	{
		return $this->coupons_groups_id;
	}

	public function setCouponsGroupsId(int $coupons_groups_id) : self
	{
		$this->coupons_groups_id = $coupons_groups_id;
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

	public function getActive():  ?string
	{
		return $this->active;
	}

	public function setActive(string $active) : self
	{
		$this->active = $active;
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

	public function getUsesPerCoupon():  ?int
	{
		return $this->uses_per_coupon;
	}

	public function setUsesPerCoupon(int $uses_per_coupon) : self
	{
		$this->uses_per_coupon = $uses_per_coupon;
		return $this;
	}

	public function getUsesPerUser():  ?int
	{
		return $this->uses_per_user;
	}

	public function setUsesPerUser(int $uses_per_user) : self
	{
		$this->uses_per_user = $uses_per_user;
		return $this;
	}

	public function getRestrictToUser():  ?string
	{
		return $this->restrict_to_user;
	}

	public function setRestrictToUser(string $restrict_to_user) : self
	{
		$this->restrict_to_user = $restrict_to_user;
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

	public function getOriginOrdersId():  ?int
	{
		return $this->origin_orders_id;
	}

	public function setOriginOrdersId(int $origin_orders_id) : self
	{
		$this->origin_orders_id = $origin_orders_id;
		return $this;
	}

	public function getIsDeleted():  ?string
	{
		return $this->is_deleted;
	}

	public function setIsDeleted(string $is_deleted) : self
	{
		$this->is_deleted = $is_deleted;
		return $this;
	}

	public function getShopsCategoriesIds():  ?string
	{
		return $this->shops_categories_ids;
	}

	public function setShopsCategoriesIds(string $shops_categories_ids) : self
	{
		$this->shops_categories_ids = $shops_categories_ids;
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