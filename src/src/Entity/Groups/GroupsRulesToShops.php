<?php

namespace App\Entity\Groups;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Groups\GroupsRulesToShopsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: GroupsRulesToShopsRepository::class)]
#[ORM\Table(name: "groups_rules_to_shops")]
class GroupsRulesToShops
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $groups_rules_to_shops_id = null;

	#[ORM\Column]
	private ?int $groups_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_price_schemes_id = null;

	#[ORM\Column]
	private ?int $prices_rules_active = null;

	#[ORM\Column]
	private ?string $prices_factor = null;

	#[ORM\Column]
	private ?string $absolute_prices_additions = null;

	#[ORM\Column]
	private ?string $absolute_prices_addition_threshold = null;

	#[ORM\Column]
	private ?int $fee_and_margin_active = null;

	#[ORM\Column]
	private ?string $fee_factor = null;

	#[ORM\Column]
	private ?string $minimum_margin_factor = null;

	#[ORM\Column]
	private ?int $automatic_reach_minimum_margin_factor = null;

	#[ORM\Column]
	private ?int $ignore_scale_prices = null;

	#[ORM\Column]
	private ?int $ignore_special_prices = null;

	#[ORM\Column]
	private ?int $stocks_rules_active = null;

	#[ORM\Column(nullable: true)]
	private ?int $virtual_quantity = null;

	#[ORM\Column(nullable: true)]
	private ?int $virtual_third_party_stock_quantity = null;

	#[ORM\Column(nullable: true)]
	private ?int $stock_threshold = null;

	#[ORM\Column(nullable: true)]
	private ?string $stock_quota = null;

	#[ORM\Column(nullable: true)]
	private ?string $stock_up_round = null;

	#[ORM\Column(nullable: true)]
	private ?int $stock_over_threshold = null;

	#[ORM\Column(nullable: true)]
	private ?int $virtual_threshold_quantity = null;

	#[ORM\Column(nullable: true)]
	private ?int $virtual_over_threshold_quantity = null;

	#[ORM\Column(nullable: true)]
	private ?int $stock_threshold_special = null;

	#[ORM\Column(nullable: true)]
	private ?int $stock_threshold_special_quantity = null;

	#[ORM\Column]
	private ?int $merchant_shipping_group_active = null;

	#[ORM\Column(length: 256, nullable: true)]
	private ?string $merchant_shipping_group_name = null;

	#[ORM\Column]
	private ?int $merchant_shipping_group_third_party_stock_active = null;

	#[ORM\Column(length: 256, nullable: true)]
	private ?string $merchant_shipping_group_third_party_stock_name = null;

	#[ORM\Column]
	private ?string $template_active = null;

	#[ORM\Column(length: 256, nullable: true)]
	private ?string $template_name = null;

	#[ORM\Column]
	private ?string $ebay_policies_active = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $ebay_shipping_policy = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $ebay_return_policy = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $ebay_payment_policy = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getGroupsRulesToShopsId():  ?int
	{
		return $this->groups_rules_to_shops_id;
	}

	public function setGroupsRulesToShopsId(int $groups_rules_to_shops_id) : self
	{
		$this->groups_rules_to_shops_id = $groups_rules_to_shops_id;
		return $this;
	}

	public function getGroupsId():  ?int
	{
		return $this->groups_id;
	}

	public function setGroupsId(int $groups_id) : self
	{
		$this->groups_id = $groups_id;
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

	public function getShopsPriceSchemesId():  ?int
	{
		return $this->shops_price_schemes_id;
	}

	public function setShopsPriceSchemesId(int $shops_price_schemes_id) : self
	{
		$this->shops_price_schemes_id = $shops_price_schemes_id;
		return $this;
	}

	public function getPricesRulesActive():  ?int
	{
		return $this->prices_rules_active;
	}

	public function setPricesRulesActive(int $prices_rules_active) : self
	{
		$this->prices_rules_active = $prices_rules_active;
		return $this;
	}

	public function getPricesFactor():  ?string
	{
		return $this->prices_factor;
	}

	public function setPricesFactor(string $prices_factor) : self
	{
		$this->prices_factor = $prices_factor;
		return $this;
	}

	public function getAbsolutePricesAdditions():  ?string
	{
		return $this->absolute_prices_additions;
	}

	public function setAbsolutePricesAdditions(string $absolute_prices_additions) : self
	{
		$this->absolute_prices_additions = $absolute_prices_additions;
		return $this;
	}

	public function getAbsolutePricesAdditionThreshold():  ?string
	{
		return $this->absolute_prices_addition_threshold;
	}

	public function setAbsolutePricesAdditionThreshold(string $absolute_prices_addition_threshold) : self
	{
		$this->absolute_prices_addition_threshold = $absolute_prices_addition_threshold;
		return $this;
	}

	public function getFeeAndMarginActive():  ?int
	{
		return $this->fee_and_margin_active;
	}

	public function setFeeAndMarginActive(int $fee_and_margin_active) : self
	{
		$this->fee_and_margin_active = $fee_and_margin_active;
		return $this;
	}

	public function getFeeFactor():  ?string
	{
		return $this->fee_factor;
	}

	public function setFeeFactor(string $fee_factor) : self
	{
		$this->fee_factor = $fee_factor;
		return $this;
	}

	public function getMinimumMarginFactor():  ?string
	{
		return $this->minimum_margin_factor;
	}

	public function setMinimumMarginFactor(string $minimum_margin_factor) : self
	{
		$this->minimum_margin_factor = $minimum_margin_factor;
		return $this;
	}

	public function getAutomaticReachMinimumMarginFactor():  ?int
	{
		return $this->automatic_reach_minimum_margin_factor;
	}

	public function setAutomaticReachMinimumMarginFactor(int $automatic_reach_minimum_margin_factor) : self
	{
		$this->automatic_reach_minimum_margin_factor = $automatic_reach_minimum_margin_factor;
		return $this;
	}

	public function getIgnoreScalePrices():  ?int
	{
		return $this->ignore_scale_prices;
	}

	public function setIgnoreScalePrices(int $ignore_scale_prices) : self
	{
		$this->ignore_scale_prices = $ignore_scale_prices;
		return $this;
	}

	public function getIgnoreSpecialPrices():  ?int
	{
		return $this->ignore_special_prices;
	}

	public function setIgnoreSpecialPrices(int $ignore_special_prices) : self
	{
		$this->ignore_special_prices = $ignore_special_prices;
		return $this;
	}

	public function getStocksRulesActive():  ?int
	{
		return $this->stocks_rules_active;
	}

	public function setStocksRulesActive(int $stocks_rules_active) : self
	{
		$this->stocks_rules_active = $stocks_rules_active;
		return $this;
	}

	public function getVirtualQuantity():  ?int
	{
		return $this->virtual_quantity;
	}

	public function setVirtualQuantity(int $virtual_quantity) : self
	{
		$this->virtual_quantity = $virtual_quantity;
		return $this;
	}

	public function getVirtualThirdPartyStockQuantity():  ?int
	{
		return $this->virtual_third_party_stock_quantity;
	}

	public function setVirtualThirdPartyStockQuantity(int $virtual_third_party_stock_quantity) : self
	{
		$this->virtual_third_party_stock_quantity = $virtual_third_party_stock_quantity;
		return $this;
	}

	public function getStockThreshold():  ?int
	{
		return $this->stock_threshold;
	}

	public function setStockThreshold(int $stock_threshold) : self
	{
		$this->stock_threshold = $stock_threshold;
		return $this;
	}

	public function getStockQuota():  ?string
	{
		return $this->stock_quota;
	}

	public function setStockQuota(string $stock_quota) : self
	{
		$this->stock_quota = $stock_quota;
		return $this;
	}

	public function getStockUpRound():  ?string
	{
		return $this->stock_up_round;
	}

	public function setStockUpRound(string $stock_up_round) : self
	{
		$this->stock_up_round = $stock_up_round;
		return $this;
	}

	public function getStockOverThreshold():  ?int
	{
		return $this->stock_over_threshold;
	}

	public function setStockOverThreshold(int $stock_over_threshold) : self
	{
		$this->stock_over_threshold = $stock_over_threshold;
		return $this;
	}

	public function getVirtualThresholdQuantity():  ?int
	{
		return $this->virtual_threshold_quantity;
	}

	public function setVirtualThresholdQuantity(int $virtual_threshold_quantity) : self
	{
		$this->virtual_threshold_quantity = $virtual_threshold_quantity;
		return $this;
	}

	public function getVirtualOverThresholdQuantity():  ?int
	{
		return $this->virtual_over_threshold_quantity;
	}

	public function setVirtualOverThresholdQuantity(int $virtual_over_threshold_quantity) : self
	{
		$this->virtual_over_threshold_quantity = $virtual_over_threshold_quantity;
		return $this;
	}

	public function getStockThresholdSpecial():  ?int
	{
		return $this->stock_threshold_special;
	}

	public function setStockThresholdSpecial(int $stock_threshold_special) : self
	{
		$this->stock_threshold_special = $stock_threshold_special;
		return $this;
	}

	public function getStockThresholdSpecialQuantity():  ?int
	{
		return $this->stock_threshold_special_quantity;
	}

	public function setStockThresholdSpecialQuantity(int $stock_threshold_special_quantity) : self
	{
		$this->stock_threshold_special_quantity = $stock_threshold_special_quantity;
		return $this;
	}

	public function getMerchantShippingGroupActive():  ?int
	{
		return $this->merchant_shipping_group_active;
	}

	public function setMerchantShippingGroupActive(int $merchant_shipping_group_active) : self
	{
		$this->merchant_shipping_group_active = $merchant_shipping_group_active;
		return $this;
	}

	public function getMerchantShippingGroupName():  ?string
	{
		return $this->merchant_shipping_group_name;
	}

	public function setMerchantShippingGroupName(string $merchant_shipping_group_name) : self
	{
		$this->merchant_shipping_group_name = $merchant_shipping_group_name;
		return $this;
	}

	public function getMerchantShippingGroupThirdPartyStockActive():  ?int
	{
		return $this->merchant_shipping_group_third_party_stock_active;
	}

	public function setMerchantShippingGroupThirdPartyStockActive(int $merchant_shipping_group_third_party_stock_active) : self
	{
		$this->merchant_shipping_group_third_party_stock_active = $merchant_shipping_group_third_party_stock_active;
		return $this;
	}

	public function getMerchantShippingGroupThirdPartyStockName():  ?string
	{
		return $this->merchant_shipping_group_third_party_stock_name;
	}

	public function setMerchantShippingGroupThirdPartyStockName(string $merchant_shipping_group_third_party_stock_name) : self
	{
		$this->merchant_shipping_group_third_party_stock_name = $merchant_shipping_group_third_party_stock_name;
		return $this;
	}

	public function getTemplateActive():  ?string
	{
		return $this->template_active;
	}

	public function setTemplateActive(string $template_active) : self
	{
		$this->template_active = $template_active;
		return $this;
	}

	public function getTemplateName():  ?string
	{
		return $this->template_name;
	}

	public function setTemplateName(string $template_name) : self
	{
		$this->template_name = $template_name;
		return $this;
	}

	public function getEbayPoliciesActive():  ?string
	{
		return $this->ebay_policies_active;
	}

	public function setEbayPoliciesActive(string $ebay_policies_active) : self
	{
		$this->ebay_policies_active = $ebay_policies_active;
		return $this;
	}

	public function getEbayShippingPolicy():  ?string
	{
		return $this->ebay_shipping_policy;
	}

	public function setEbayShippingPolicy(string $ebay_shipping_policy) : self
	{
		$this->ebay_shipping_policy = $ebay_shipping_policy;
		return $this;
	}

	public function getEbayReturnPolicy():  ?string
	{
		return $this->ebay_return_policy;
	}

	public function setEbayReturnPolicy(string $ebay_return_policy) : self
	{
		$this->ebay_return_policy = $ebay_return_policy;
		return $this;
	}

	public function getEbayPaymentPolicy():  ?string
	{
		return $this->ebay_payment_policy;
	}

	public function setEbayPaymentPolicy(string $ebay_payment_policy) : self
	{
		$this->ebay_payment_policy = $ebay_payment_policy;
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