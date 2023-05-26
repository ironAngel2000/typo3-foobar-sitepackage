<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsDescriptionRepository::class)]
#[ORM\Table(name: "products_description")]
class ProductsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_description_id = null;

	#[ORM\Column]
	private ?int $products_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $products_name = null;

	 #[ORM\Column(length: 150)]
	private ?string $products_name_short = null;

	#[ORM\Column(nullable: true)]
	private ?string $products_description = null;

	#[ORM\Column(nullable: true)]
	private ?string $products_description_short = null;

	#[ORM\Column(nullable: true)]
	private ?string $customer_care = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_url = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_link_self = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $sem_keywords1 = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $sem_keywords2 = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $sem_keywords3 = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $sem_keywords4 = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $sem_keywords5 = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $general_keywords1 = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $general_keywords2 = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $seo_title = null;

	#[ORM\Column(nullable: true)]
	private ?string $seo_description = null;

	#[ORM\Column(nullable: true)]
	private ?string $seo_content = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsDescriptionId():  ?int
	{
		return $this->products_description_id;
	}

	public function setProductsDescriptionId(int $products_description_id) : self
	{
		$this->products_description_id = $products_description_id;
		return $this;
	}

	public function getProductsId():  ?int
	{
		return $this->products_id;
	}

	public function setProductsId(int $products_id) : self
	{
		$this->products_id = $products_id;
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

	public function getProductsName():  ?string
	{
		return $this->products_name;
	}

	public function setProductsName(string $products_name) : self
	{
		$this->products_name = $products_name;
		return $this;
	}

	public function getProductsNameShort():  ?string
	{
		return $this->products_name_short;
	}

	public function setProductsNameShort(string $products_name_short) : self
	{
		$this->products_name_short = $products_name_short;
		return $this;
	}

	public function getProductsDescription():  ?string
	{
		return $this->products_description;
	}

	public function setProductsDescription(string $products_description) : self
	{
		$this->products_description = $products_description;
		return $this;
	}

	public function getProductsDescriptionShort():  ?string
	{
		return $this->products_description_short;
	}

	public function setProductsDescriptionShort(string $products_description_short) : self
	{
		$this->products_description_short = $products_description_short;
		return $this;
	}

	public function getCustomerCare():  ?string
	{
		return $this->customer_care;
	}

	public function setCustomerCare(string $customer_care) : self
	{
		$this->customer_care = $customer_care;
		return $this;
	}

	public function getProductsUrl():  ?string
	{
		return $this->products_url;
	}

	public function setProductsUrl(string $products_url) : self
	{
		$this->products_url = $products_url;
		return $this;
	}

	public function getProductsLinkSelf():  ?string
	{
		return $this->products_link_self;
	}

	public function setProductsLinkSelf(string $products_link_self) : self
	{
		$this->products_link_self = $products_link_self;
		return $this;
	}

	public function getSemKeywords1():  ?string
	{
		return $this->sem_keywords1;
	}

	public function setSemKeywords1(string $sem_keywords1) : self
	{
		$this->sem_keywords1 = $sem_keywords1;
		return $this;
	}

	public function getSemKeywords2():  ?string
	{
		return $this->sem_keywords2;
	}

	public function setSemKeywords2(string $sem_keywords2) : self
	{
		$this->sem_keywords2 = $sem_keywords2;
		return $this;
	}

	public function getSemKeywords3():  ?string
	{
		return $this->sem_keywords3;
	}

	public function setSemKeywords3(string $sem_keywords3) : self
	{
		$this->sem_keywords3 = $sem_keywords3;
		return $this;
	}

	public function getSemKeywords4():  ?string
	{
		return $this->sem_keywords4;
	}

	public function setSemKeywords4(string $sem_keywords4) : self
	{
		$this->sem_keywords4 = $sem_keywords4;
		return $this;
	}

	public function getSemKeywords5():  ?string
	{
		return $this->sem_keywords5;
	}

	public function setSemKeywords5(string $sem_keywords5) : self
	{
		$this->sem_keywords5 = $sem_keywords5;
		return $this;
	}

	public function getGeneralKeywords1():  ?string
	{
		return $this->general_keywords1;
	}

	public function setGeneralKeywords1(string $general_keywords1) : self
	{
		$this->general_keywords1 = $general_keywords1;
		return $this;
	}

	public function getGeneralKeywords2():  ?string
	{
		return $this->general_keywords2;
	}

	public function setGeneralKeywords2(string $general_keywords2) : self
	{
		$this->general_keywords2 = $general_keywords2;
		return $this;
	}

	public function getSeoTitle():  ?string
	{
		return $this->seo_title;
	}

	public function setSeoTitle(string $seo_title) : self
	{
		$this->seo_title = $seo_title;
		return $this;
	}

	public function getSeoDescription():  ?string
	{
		return $this->seo_description;
	}

	public function setSeoDescription(string $seo_description) : self
	{
		$this->seo_description = $seo_description;
		return $this;
	}

	public function getSeoContent():  ?string
	{
		return $this->seo_content;
	}

	public function setSeoContent(string $seo_content) : self
	{
		$this->seo_content = $seo_content;
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