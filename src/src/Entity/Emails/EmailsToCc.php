<?php

namespace App\Entity\Emails;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Emails\EmailsToCcRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: EmailsToCcRepository::class)]
#[ORM\Table(name: "emails_to_cc")]
class EmailsToCc
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $emails_to_cc_id = null;

	#[ORM\Column]
	private ?int $emails_to_id = null;

	#[ORM\Column]
	private ?int $emails_to_cc_emails_to_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getEmailsToCcId():  ?int
	{
		return $this->emails_to_cc_id;
	}

	public function setEmailsToCcId(int $emails_to_cc_id) : self
	{
		$this->emails_to_cc_id = $emails_to_cc_id;
		return $this;
	}

	public function getEmailsToId():  ?int
	{
		return $this->emails_to_id;
	}

	public function setEmailsToId(int $emails_to_id) : self
	{
		$this->emails_to_id = $emails_to_id;
		return $this;
	}

	public function getEmailsToCcEmailsToId():  ?int
	{
		return $this->emails_to_cc_emails_to_id;
	}

	public function setEmailsToCcEmailsToId(int $emails_to_cc_emails_to_id) : self
	{
		$this->emails_to_cc_emails_to_id = $emails_to_cc_emails_to_id;
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