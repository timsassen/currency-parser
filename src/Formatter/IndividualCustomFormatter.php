<?php

declare(strict_types=1);

namespace Mistralys\CurrencyParser\Formatter;

use Mistralys\CurrencyParser\PriceMatch;

class IndividualCustomFormatter extends BaseLocaleFormatter
{
    public function __construct(PriceMatch $price)
    {
        parent::__construct($price->getLocale());

        $this->workPrice = $price;
    }

    public function getPrice() : PriceMatch
    {
        return $this->workPrice;
    }

    public function format(): string
    {
        return $this->_format($this->workPrice);
    }
}
