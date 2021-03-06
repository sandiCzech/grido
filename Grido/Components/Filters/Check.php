<?php

/**
 * This file is part of the Grido (http://grido.bugyik.cz)
 *
 * Copyright (c) 2011 Petr Bugyík (http://petr.bugyik.cz)
 *
 * For the full copyright and license information, please view
 * the file LICENSE.md that was distributed with this source code.
 */

namespace Grido\Components\Filters;

/**
 * Check box filter.
 *
 * @package     Grido
 * @subpackage  Components\Filters
 * @author      Petr Bugyík
 */
class Check extends Filter
{
    /* representation TRUE in URI */
    const TRUE = '✓';

    /** @var string */
    protected $condition = 'IS NOT NULL';

    /**
     * @return \Nette\Forms\Controls\Checkbox
     */
    protected function getFormControl()
    {
        return new \Nette\Forms\Controls\Checkbox($this->label);
    }

    /**
     * @internal - Do not call directly.
     * @param string $value
     * @return array
     */
    public function __getCondition($value)
    {
        $value = $value == self::TRUE
            ? TRUE
            : FALSE;

        return parent::__getCondition($value);
    }

    /**
     * @internal - Do not call directly.
     * @param bool $value
     * @return NULL
     */
    public function formatValue($value)
    {
        return NULL;
    }

    /**
     * @internal - Do not call directly.
     * @param bool $value
     * @return string
     */
    public function changeValue($value)
    {
        return $value === TRUE
            ? self::TRUE
            : $value;
    }
}
