<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersAdviceMethodsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersAdviceMethodsDescriptionRepository::class)]
#[ORM\Table(name: "suppliers_advice_methods_description")]
class SuppliersAdviceMethodsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_advice_methods_description_id = null;

	#[ORM\Column]
	private ?int $suppliers_advice_methods_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $suppliers_advice_methods_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getSuppliersAdviceMethodsDescriptionId():  ?int
	{
		return $this->suppliers_advice_methods_description_id;
	}

	public function setSuppliersAdviceMethodsDescriptionId(int $suppliers_advice_methods_description_id) : self
	{
		$this->suppliers_advice_methods_description_id = $suppliers_advice_methods_description_id;
		return $this;
	}

	public function getSuppliersAdviceMethodsId():  ?int
	{
		return $this->suppliers_advice_methods_id;
	}

	public function setSuppliersAdviceMethodsId(int $suppliers_advice_methods_id) : self
	{
		$this->suppliers_advice_methods_id = $suppliers_advice_methods_id;
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

	public function getSuppliersAdviceMethodsName():  ?string
	{
		return $this->suppliers_advice_methods_name;
	}

	public function setSuppliersAdviceMethodsName(string $suppliers_advice_methods_name) : self
	{
		$this->suppliers_advice_methods_name = $suppliers_advice_methods_name;
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