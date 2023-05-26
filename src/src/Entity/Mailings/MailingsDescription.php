<?php

namespace App\Entity\Mailings;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Mailings\MailingsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: MailingsDescriptionRepository::class)]
#[ORM\Table(name: "mailings_description")]
class MailingsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $mailings_description_id = null;

	#[ORM\Column]
	private ?int $mailings_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $mailings_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getMailingsDescriptionId():  ?int
	{
		return $this->mailings_description_id;
	}

	public function setMailingsDescriptionId(int $mailings_description_id) : self
	{
		$this->mailings_description_id = $mailings_description_id;
		return $this;
	}

	public function getMailingsId():  ?int
	{
		return $this->mailings_id;
	}

	public function setMailingsId(int $mailings_id) : self
	{
		$this->mailings_id = $mailings_id;
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

	public function getMailingsName():  ?string
	{
		return $this->mailings_name;
	}

	public function setMailingsName(string $mailings_name) : self
	{
		$this->mailings_name = $mailings_name;
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