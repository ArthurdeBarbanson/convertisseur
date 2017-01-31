<?php

namespace AppBundle\Entity;

/**
 * TpWebservice
 */
class TpWebservice
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $monnaie;

    /**
     * @var int
     */
    private $value;

    /**
     * @var \DateTime
     */
    private $maj;


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
     * Set monnaie
     *
     * @param string $monnaie
     *
     * @return TpWebservice
     */
    public function setMonnaie($monnaie)
    {
        $this->monnaie = $monnaie;

        return $this;
    }

    /**
     * Get monnaie
     *
     * @return string
     */
    public function getMonnaie()
    {
        return $this->monnaie;
    }

    /**
     * Set value
     *
     * @param integer $value
     *
     * @return TpWebservice
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set maj
     *
     * @param \DateTime $maj
     *
     * @return TpWebservice
     */
    public function setMaj($maj)
    {
        $this->maj = $maj;

        return $this;
    }

    /**
     * Get maj
     *
     * @return \DateTime
     */
    public function getMaj()
    {
        return $this->maj;
    }
}

