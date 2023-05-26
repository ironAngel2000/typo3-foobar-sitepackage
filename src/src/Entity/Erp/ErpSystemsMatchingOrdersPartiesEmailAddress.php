<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsMatchingOrdersPartiesEmailAddressRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsMatchingOrdersPartiesEmailAddressRepository::class)]
#[ORM\Table(name: "erp_systems_matching_orders_parties_email_address")]
class ErpSystemsMatchingOrdersPartiesEmailAddress
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_matching_orders_parties_email_address_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	 #[ORM\Column(length: 128)]
	private ?string $email_address = null;

	 #[ORM\Column(length: 255)]
	private ?string $erp_email_address = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsMatchingOrdersPartiesEmailAddressId():  ?int
	{
		return $this->erp_systems_matching_orders_parties_email_address_id;
	}

	public function setErpSystemsMatchingOrdersPartiesEmailAddressId(int $erp_systems_matching_orders_parties_email_address_id) : self
	{
		$this->erp_systems_matching_orders_parties_email_address_id = $erp_systems_matching_orders_parties_email_address_id;
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

	public function getEmailAddress():  ?string
	{
		return $this->email_address;
	}

	public function setEmailAddress(string $email_address) : self
	{
		$this->email_address = $email_address;
		return $this;
	}

	public function getErpEmailAddress():  ?string
	{
		return $this->erp_email_address;
	}

	public function setErpEmailAddress(string $erp_email_address) : self
	{
		$this->erp_email_address = $erp_email_address;
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