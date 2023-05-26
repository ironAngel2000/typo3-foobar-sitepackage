<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsMatchingPaymentMethodsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsMatchingPaymentMethodsRepository::class)]
#[ORM\Table(name: "shops_matching_payment_methods")]
class ShopsMatchingPaymentMethods
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_matching_payment_methods_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $payment_methods_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $shops_payment_methods_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsMatchingPaymentMethodsId():  ?int
	{
		return $this->shops_matching_payment_methods_id;
	}

	public function setShopsMatchingPaymentMethodsId(int $shops_matching_payment_methods_id) : self
	{
		$this->shops_matching_payment_methods_id = $shops_matching_payment_methods_id;
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

	public function getPaymentMethodsId():  ?int
	{
		return $this->payment_methods_id;
	}

	public function setPaymentMethodsId(int $payment_methods_id) : self
	{
		$this->payment_methods_id = $payment_methods_id;
		return $this;
	}

	public function getShopsPaymentMethodsCode():  ?string
	{
		return $this->shops_payment_methods_code;
	}

	public function setShopsPaymentMethodsCode(string $shops_payment_methods_code) : self
	{
		$this->shops_payment_methods_code = $shops_payment_methods_code;
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