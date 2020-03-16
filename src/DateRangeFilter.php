<?php

namespace Ampeco\Filters;

use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

abstract class DateRangeFilter extends Filter
{
    public $component = 'date-range-filter';

    public function __construct()
    {
        $this->dateFormat('Y-m-d');
        $this->firstDayOfWeek(0);
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function options(Request $request)
    {
        //
    }

    /**
     * Set the dateFormat.
     *
     * @param string $format
     * @return $this
     */
    public function dateFormat($format)
    {
        return $this->withMeta([__FUNCTION__ => $format]);
    }

    /**
     * Set the placeholder text.
     *
     * @param string $placeholder
     * @return $this
     */
    public function placeholder($placeholder)
    {
        return $this->withMeta([__FUNCTION__ => $placeholder]);
    }

    /**
     * Set the first day of the week.
     *
     * @param int $day
     * @return $this
     */
    public function firstDayOfWeek($day)
    {
        return $this->withMeta([__FUNCTION__ => $day]);
    }
}
