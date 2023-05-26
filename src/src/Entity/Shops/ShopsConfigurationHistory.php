<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsConfigurationHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsConfigurationHistoryRepository::class)]
#[ORM\Table(name: "shops_configuration_history")]
class ShopsConfigurationHistory
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_configuration_history_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	 #[ORM\Column(length: 100)]
	private ?string $shops_configuration_key = null;

	#[ORM\Column(nullable: true)]
	private ?string $old_value = null;

	#[ORM\Column(nullable: true)]
	private ?string $new_value = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsConfigurationHistoryId():  ?int
	{
		return $this->shops_configuration_history_id;
	}

	public function setShopsConfigurationHistoryId(int $shops_configuration_history_id) : self
	{
		$this->shops_configuration_history_id = $shops_configuration_history_id;
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

	public function getShopsConfigurationKey():  ?string
	{
		return $this->shops_configuration_key;
	}

	public function setShopsConfigurationKey(string $shops_configuration_key) : self
	{
		$this->shops_configuration_key = $shops_configuration_key;
		return $this;
	}

	public function getOldValue():  ?string
	{
		return $this->old_value;
	}

	public function setOldValue(string $old_value) : self
	{
		$this->old_value = $old_value;
		return $this;
	}

	public function getNewValue():  ?string
	{
		return $this->new_value;
	}

	public function setNewValue(string $new_value) : self
	{
		$this->new_value = $new_value;
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