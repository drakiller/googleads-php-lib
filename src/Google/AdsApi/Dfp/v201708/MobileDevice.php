<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileDevice extends \Google\AdsApi\Dfp\v201708\Technology
{

    /**
     * @var int $manufacturerCriterionId
     */
    protected $manufacturerCriterionId = null;

    /**
     * @param int $id
     * @param string $name
     * @param int $manufacturerCriterionId
     */
    public function __construct($id = null, $name = null, $manufacturerCriterionId = null)
    {
      parent::__construct($id, $name);
      $this->manufacturerCriterionId = $manufacturerCriterionId;
    }

    /**
     * @return int
     */
    public function getManufacturerCriterionId()
    {
      return $this->manufacturerCriterionId;
    }

    /**
     * @param int $manufacturerCriterionId
     * @return \Google\AdsApi\Dfp\v201708\MobileDevice
     */
    public function setManufacturerCriterionId($manufacturerCriterionId)
    {
      $this->manufacturerCriterionId = (PHP_INT_SIZE === 4)
          ? floatval($manufacturerCriterionId) : $manufacturerCriterionId;
      return $this;
    }

}