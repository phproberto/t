<?php

/*
 * This file is part of Exchanger.
 *
 * (c) Florian Voutzinos <florian@voutzinos.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Exchanger;

use Exchanger\Contract\ExchangeRate as ExchangeRateContract;

/**
 * Represents a rate.
 *
 * @author Florian Voutzinos <florian@voutzinos.com>
 */
final class ExchangeRate implements ExchangeRateContract
{
    private $value;

    private $date;

    /**
     * Creates a new rate.
     *
     * @param string                  $value The rate value
     * @param \DateTimeInterface|null $date  The date at which this rate was calculated
     */
    public function __construct($value, \DateTimeInterface $date = null)
    {
        $this->value = (string) $value;
        $this->date = $date ?: new \DateTime();
    }

    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * {@inheritdoc}
     */
    public function getDate()
    {
        return $this->date;
    }
}
