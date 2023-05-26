<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfViewsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfViewsRepository::class)]
#[ORM\Table(name: "bf_views")]
class BfViews
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_views_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $bf_views_identifier = null;

	#[ORM\Column(nullable: true)]
	private ?string $bf_views_value = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfViewsId():  ?int
	{
		return $this->bf_views_id;
	}

	public function setBfViewsId(int $bf_views_id) : self
	{
		$this->bf_views_id = $bf_views_id;
		return $this;
	}

	public function getBfViewsIdentifier():  ?string
	{
		return $this->bf_views_identifier;
	}

	public function setBfViewsIdentifier(string $bf_views_identifier) : self
	{
		$this->bf_views_identifier = $bf_views_identifier;
		return $this;
	}

	public function getBfViewsValue():  ?string
	{
		return $this->bf_views_value;
	}

	public function setBfViewsValue(string $bf_views_value) : self
	{
		$this->bf_views_value = $bf_views_value;
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