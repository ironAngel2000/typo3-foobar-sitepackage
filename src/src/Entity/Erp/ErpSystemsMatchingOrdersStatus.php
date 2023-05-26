<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsMatchingOrdersStatusRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsMatchingOrdersStatusRepository::class)]
#[ORM\Table(name: "erp_systems_matching_orders_status")]
class ErpSystemsMatchingOrdersStatus
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_matching_orders_status_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column]
	private ?int $orders_status_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $erp_orders_status = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $description = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsMatchingOrdersStatusId():  ?int
	{
		return $this->erp_systems_matching_orders_status_id;
	}

	public function setErpSystemsMatchingOrdersStatusId(int $erp_systems_matching_orders_status_id) : self
	{
		$this->erp_systems_matching_orders_status_id = $erp_systems_matching_orders_status_id;
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

	public function getOrdersStatusId():  ?int
	{
		return $this->orders_status_id;
	}

	public function setOrdersStatusId(int $orders_status_id) : self
	{
		$this->orders_status_id = $orders_status_id;
		return $this;
	}

	public function getErpOrdersStatus():  ?string
	{
		return $this->erp_orders_status;
	}

	public function setErpOrdersStatus(string $erp_orders_status) : self
	{
		$this->erp_orders_status = $erp_orders_status;
		return $this;
	}

	public function getDescription():  ?string
	{
		return $this->description;
	}

	public function setDescription(string $description) : self
	{
		$this->description = $description;
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