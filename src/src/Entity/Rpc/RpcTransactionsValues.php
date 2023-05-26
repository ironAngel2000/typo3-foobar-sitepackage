<?php

namespace App\Entity\Rpc;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Rpc\RpcTransactionsValuesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: RpcTransactionsValuesRepository::class)]
#[ORM\Table(name: "rpc_transactions_values")]
class RpcTransactionsValues
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $rpc_transactions_values_id = null;

	#[ORM\Column]
	private ?int $rpc_transactions_id = null;

	 #[ORM\Column(length: 100)]
	private ?string $transactions_key = null;

	 #[ORM\Column(length: 100)]
	private ?string $transactions_value_new = null;

	 #[ORM\Column(length: 100)]
	private ?string $transactions_value_old = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getRpcTransactionsValuesId():  ?int
	{
		return $this->rpc_transactions_values_id;
	}

	public function setRpcTransactionsValuesId(int $rpc_transactions_values_id) : self
	{
		$this->rpc_transactions_values_id = $rpc_transactions_values_id;
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

	public function getTransactionsKey():  ?string
	{
		return $this->transactions_key;
	}

	public function setTransactionsKey(string $transactions_key) : self
	{
		$this->transactions_key = $transactions_key;
		return $this;
	}

	public function getTransactionsValueNew():  ?string
	{
		return $this->transactions_value_new;
	}

	public function setTransactionsValueNew(string $transactions_value_new) : self
	{
		$this->transactions_value_new = $transactions_value_new;
		return $this;
	}

	public function getTransactionsValueOld():  ?string
	{
		return $this->transactions_value_old;
	}

	public function setTransactionsValueOld(string $transactions_value_old) : self
	{
		$this->transactions_value_old = $transactions_value_old;
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