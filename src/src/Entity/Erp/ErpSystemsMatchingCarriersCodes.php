<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsMatchingCarriersCodesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsMatchingCarriersCodesRepository::class)]
#[ORM\Table(name: "erp_systems_matching_carriers_codes")]
class ErpSystemsMatchingCarriersCodes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_matching_carriers_codes_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $countries_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shipping_methods_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $groups_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $if_pack_station = null;

	 #[ORM\Column(length: 64)]
	private ?string $erp_carriers_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsMatchingCarriersCodesId():  ?int
	{
		return $this->erp_systems_matching_carriers_codes_id;
	}

	public function setErpSystemsMatchingCarriersCodesId(int $erp_systems_matching_carriers_codes_id) : self
	{
		$this->erp_systems_matching_carriers_codes_id = $erp_systems_matching_carriers_codes_id;
		return $this;
	}

	public function getErpSystemsId():  ?int
	{
		return $this->erp_systems_id;
	}

	public function setErpSystemsId(int $erp_systems_id) : self
	{
		$this->erp_systems_id = $erp_systems_id;
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

	public function getCountriesId():  ?int
	{
		return $this->countries_id;
	}

	public function setCountriesId(int $countries_id) : self
	{
		$this->countries_id = $countries_id;
		return $this;
	}

	public function getShippingMethodsId():  ?int
	{
		return $this->shipping_methods_id;
	}

	public function setShippingMethodsId(int $shipping_methods_id) : self
	{
		$this->shipping_methods_id = $shipping_methods_id;
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

	public function getIfPackStation():  ?string
	{
		return $this->if_pack_station;
	}

	public function setIfPackStation(string $if_pack_station) : self
	{
		$this->if_pack_station = $if_pack_station;
		return $this;
	}

	public function getErpCarriersCode():  ?string
	{
		return $this->erp_carriers_code;
	}

	public function setErpCarriersCode(string $erp_carriers_code) : self
	{
		$this->erp_carriers_code = $erp_carriers_code;
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