<?php

namespace Search\Service\Search\Entity\Search;

class OrderBy
{
    const ASC = 'ASC';
    const DESC = 'DESC';

    /**
     * @var string
     */
    private $field;

    /**
     * @var string
     */
    private $direction = OrderBy::ASC;

    /**
     * Gets the value of field.
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets the value of field.
     *
     * @param string $field the field
     *
     * @return self
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Gets the value of direction.
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Sets the value of direction.
     *
     * @param string $direction the direction
     *
     * @return self
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }
}
