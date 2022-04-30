<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Engine\Functions;

use PhpOffice\PhpSpreadsheet\Calculation\Category;
use PhpOffice\PhpSpreadsheet\Calculation\Engine\XlFunctionAbstract;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Angle;

/**
 * @inheritDoc
 */
class XlDegrees extends XlFunctionAbstract
{
    /**
     * @var string
     */
    protected $name = 'DEGREES';

    /**
     * @var string
     */
    protected $category = Category::CATEGORY_MATH_AND_TRIG;

    /**
     * @var callable
     */
    protected $functionCall = [Angle::class, 'toDegrees'];

    /**
     * @var string
     */
    protected $argumentCount = '1';
}