<?php

namespace App\Entity\Shipping;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shipping\ShippingModesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShippingModesRepository::class)]
#[ORM\Table(name: "shipping_modes")]
class ShippingModes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shipping_modes_id = null;

	 #[ORM\Column(length: 32)]
	private ?string $shipping_name = null;

	#[ORM\Column]
	private ?string $default_shipping = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShippingModesId():  ?int
	{
		return $this->shipping_modes_id;
	}

	public function setShippingModesId(int $shipping_modes_id) : self
	{
		$this->shipping_modes_id = $shipping_modes_id;
		return $this;
	}

	public function getShippingName():  ?string
	{
		return $this->shipping_name;
	}

	public function setShippingName(string $shipping_name) : self
	{
		$this->shipping_name = $shipping_name;
		return $this;
	}

	public function getDefaultShipping():  ?string
	{
		return $this->default_shipping;
	}

	public function setDefaultShipping(string $default_shipping) : self
	{
		$this->default_shipping = $default_shipping;
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