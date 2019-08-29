<?php

namespace SymfonyLab\DoctrineOrmPoint\Model;

/**
 * Class Point
 */
class Point
{
    /**
     * @var float
     */
    protected $latitude;

    /**
     * @var float
     */
    protected $longitude;

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return sprintf('POINT(%f %f)', $this->latitude, $this->longitude);
    }
}
