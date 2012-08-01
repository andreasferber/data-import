<?php

namespace Ddeboer\DataImport\Reader;

/**
 * Iterator that reads data to be imported
 *
 * @author David de Boer <david@ddeboer.nl>
 */
interface ReaderInterface extends \Iterator, \Countable
{
    /**
     * Get the field (column, property) names
     *
     * @return array
     */
    function getFields();

    /**
     * Get the total number of data items
     *
     * @return int
     */
    function count();
}