<?php

require_once __DIR__.'/../../libs/SimpleXLSX.php';

class ExcelRowsIterator  implements Iterator
{

    public function __construct($pathToExcelFile)
    {
        if ($xlsx = SimpleXLSX::parse($pathToExcelFile)) {

        }

    }

    public function current()
    {
        // TODO: Implement current() method.
    }

    public function next()
    {
        // TODO: Implement next() method.
    }

    public function key()
    {
        // TODO: Implement key() method.
    }

    public function valid()
    {
        // TODO: Implement valid() method.
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
    }
}