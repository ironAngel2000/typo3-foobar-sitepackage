<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfApplicationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfApplicationsRepository::class)]
#[ORM\Table(name: "bf_applications")]
class BfApplications
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_applications_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $bf_applications_code = null;

	 #[ORM\Column(length: 255)]
	private ?string $bf_applications_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfApplicationsId():  ?int
	{
		return $this->bf_applications_id;
	}

	public function setBfApplicationsId(int $bf_applications_id) : self
	{
		$this->bf_applications_id = $bf_applications_id;
		return $this;
	}

	public function getBfApplicationsCode():  ?string
	{
		return $this->bf_applications_code;
	}

	public function setBfApplicationsCode(string $bf_applications_code) : self
	{
		$this->bf_applications_code = $bf_applications_code;
		return $this;
	}

	public function getBfApplicationsName():  ?string
	{
		return $this->bf_applications_name;
	}

	public function setBfApplicationsName(string $bf_applications_name) : self
	{
		$this->bf_applications_name = $bf_applications_name;
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