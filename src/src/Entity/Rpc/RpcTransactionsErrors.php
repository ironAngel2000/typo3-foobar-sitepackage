<?php

namespace App\Entity\Rpc;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Rpc\RpcTransactionsErrorsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: RpcTransactionsErrorsRepository::class)]
#[ORM\Table(name: "rpc_transactions_errors")]
class RpcTransactionsErrors
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $rpc_transactions_errors_id = null;

	#[ORM\Column]
	private ?int $rpc_transactions_id = null;

	#[ORM\Column]
	private ?int $rpc_errors_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getRpcTransactionsErrorsId():  ?int
	{
		return $this->rpc_transactions_errors_id;
	}

	public function setRpcTransactionsErrorsId(int $rpc_transactions_errors_id) : self
	{
		$this->rpc_transactions_errors_id = $rpc_transactions_errors_id;
		return $this;
	}

	public function getRpcTransactionsId():  ?int
	{
		return $this->rpc_transactions_id;
	}

	public function setRpcTransactionsId(int $rpc_transactions_id) : self
	{
		$this->rpc_transactions_id = $rpc_transactions_id;
		return $this;
	}

	public function getRpcErrorsId():  ?int
	{
		return $this->rpc_errors_id;
	}

	public function setRpcErrorsId(int $rpc_errors_id) : self
	{
		$this->rpc_errors_id = $rpc_errors_id;
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