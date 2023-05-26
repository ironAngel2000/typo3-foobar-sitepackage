<?php

namespace App\Entity\Languages;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Languages\LanguagesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: LanguagesRepository::class)]
#[ORM\Table(name: "languages")]
class Languages
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $code = null;

	#[ORM\Column]
	private ?string $iso6392 = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
		return $this;
	}

	public function getCode():  ?string
	{
		return $this->code;
	}

	public function setCode(string $code) : self
	{
		$this->code = $code;
		return $this;
	}

	public function getIso6392():  ?string
	{
		return $this->iso6392;
	}

	public function setIso6392(string $iso6392) : self
	{
		$this->iso6392 = $iso6392;
		return $this;
	}

	public function getName():  ?string
	{
		return $this->name;
	}

	public function setName(string $name) : self
	{
		$this->name = $name;
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