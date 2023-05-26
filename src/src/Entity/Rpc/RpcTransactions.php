<?php

namespace App\Entity\Rpc;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Rpc\RpcTransactionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: RpcTransactionsRepository::class)]
#[ORM\Table(name: "rpc_transactions")]
class RpcTransactions
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $rpc_transactions_id = null;

	 #[ORM\Column(length: 75)]
	private ?string $remote_function_name = null;

	 #[ORM\Column(length: 255)]
	private ?string $relationship_key = null;

	#[ORM\Column]
	private ?int $relationship_value = null;

	#[ORM\Column(nullable: true)]
	private ?string $rpc_transactions_success = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getRpcTransactionsId():  ?int
	{
		return $this->rpc_transactions_id;
	}

	public function setRpcTransactionsId(int $rpc_transactions_id) : self
	{
		$this->rpc_transactions_id = $rpc_transactions_id;
		return $this;
	}

	public function getRemoteFunctionName():  ?string
	{
		return $this->remote_function_name;
	}

	public function setRemoteFunctionName(string $remote_function_name) : self
	{
		$this->remote_function_name = $remote_function_name;
		return $this;
	}

	public function getRelationshipKey():  ?string
	{
		return $this->relationship_key;
	}

	public function setRelationshipKey(string $relationship_key) : self
	{
		$this->relationship_key = $relationship_key;
		return $this;
	}

	public function getRelationshipValue():  ?int
	{
		return $this->relationship_value;
	}

	public function setRelationshipValue(int $relationship_value) : self
	{
		$this->relationship_value = $relationship_value;
		return $this;
	}

	public function getRpcTransactionsSuccess():  ?string
	{
		return $this->rpc_transactions_success;
	}

	public function setRpcTransactionsSuccess(string $rpc_transactions_success) : self
	{
		$this->rpc_transactions_success = $rpc_transactions_success;
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