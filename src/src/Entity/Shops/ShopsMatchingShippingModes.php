<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsMatchingShippingModesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsMatchingShippingModesRepository::class)]
#[ORM\Table(name: "shops_matching_shipping_modes")]
class ShopsMatchingShippingModes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_matching_shipping_modes_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shipping_modes_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $shops_shipping_modes_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsMatchingShippingModesId():  ?int
	{
		return $this->shops_matching_shipping_modes_id;
	}

	public function setShopsMatchingShippingModesId(int $shops_matching_shipping_modes_id) : self
	{
		$this->shops_matching_shipping_modes_id = $shops_matching_shipping_modes_id;
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

	public function getShippingModesId():  ?int
	{
		return $this->shipping_modes_id;
	}

	public function setShippingModesId(int $shipping_modes_id) : self
	{
		$this->shipping_modes_id = $shipping_modes_id;
		return $this;
	}

	public function getShopsShippingModesCode():  ?string
	{
		return $this->shops_shipping_modes_code;
	}

	public function setShopsShippingModesCode(string $shops_shipping_modes_code) : self
	{
		$this->shops_shipping_modes_code = $shops_shipping_modes_code;
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