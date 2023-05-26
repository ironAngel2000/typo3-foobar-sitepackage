<?php

namespace App\Entity\Rpc;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Rpc\RpcErrorsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: RpcErrorsDescriptionRepository::class)]
#[ORM\Table(name: "rpc_errors_description")]
class RpcErrorsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $rpc_errors_description_id = null;

	#[ORM\Column]
	private ?int $rpc_errors_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $rpc_errors_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getRpcErrorsDescriptionId():  ?int
	{
		return $this->rpc_errors_description_id;
	}

	public function setRpcErrorsDescriptionId(int $rpc_errors_description_id) : self
	{
		$this->rpc_errors_description_id = $rpc_errors_description_id;
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

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
		return $this;
	}

	public function getRpcErrorsName():  ?string
	{
		return $this->rpc_errors_name;
	}

	public function setRpcErrorsName(string $rpc_errors_name) : self
	{
		$this->rpc_errors_name = $rpc_errors_name;
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