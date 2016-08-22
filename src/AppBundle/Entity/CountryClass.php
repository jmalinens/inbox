<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CountryClass
 *
 * @ORM\Table(name="country_class")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CountryClassRepository")
 */
class CountryClass
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="bronze_count", type="integer")
     */
    private $bronzeCount;

    /**
     * @var string
     *
     * @ORM\Column(name="country_name", type="string", length=255)
     */
    private $countryName;

    /**
     * @var int
     *
     * @ORM\Column(name="gold_count", type="integer")
     */
    private $goldCount;

    /**
     * @var string
     *
     * @ORM\Column(name="id_country", type="string", length=255, unique=true)
     */
    private $idCountry;

    /**
     * @var int
     *
     * @ORM\Column(name="place", type="integer")
     */
    private $place;

    /**
     * @var int
     *
     * @ORM\Column(name="silver_count", type="integer")
     */
    private $silverCount;

    /**
     * @var int
     *
     * @ORM\Column(name="total_count", type="integer")
     */
    private $totalCount;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set bronzeCount
     *
     * @param integer $bronzeCount
     *
     * @return CountryClass
     */
    public function setBronzeCount($bronzeCount)
    {
        $this->bronzeCount = $bronzeCount;

        return $this;
    }

    /**
     * Get bronzeCount
     *
     * @return int
     */
    public function getBronzeCount()
    {
        return $this->bronzeCount;
    }

    /**
     * Set countryName
     *
     * @param string $countryName
     *
     * @return CountryClass
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * Get countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Set goldCount
     *
     * @param integer $goldCount
     *
     * @return CountryClass
     */
    public function setGoldCount($goldCount)
    {
        $this->goldCount = $goldCount;

        return $this;
    }

    /**
     * Get goldCount
     *
     * @return int
     */
    public function getGoldCount()
    {
        return $this->goldCount;
    }

    /**
     * Set idCountry
     *
     * @param string $idCountry
     *
     * @return CountryClass
     */
    public function setIdCountry($idCountry)
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    /**
     * Get idCountry
     *
     * @return string
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }

    /**
     * Set place
     *
     * @param integer $place
     *
     * @return CountryClass
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return int
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set silverCount
     *
     * @param integer $silverCount
     *
     * @return CountryClass
     */
    public function setSilverCount($silverCount)
    {
        $this->silverCount = $silverCount;

        return $this;
    }

    /**
     * Get silverCount
     *
     * @return int
     */
    public function getSilverCount()
    {
        return $this->silverCount;
    }

    /**
     * Set totalCount
     *
     * @param integer $totalCount
     *
     * @return CountryClass
     */
    public function setTotalCount($totalCount)
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get totalCount
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }
}

