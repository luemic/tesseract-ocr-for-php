<?php
namespace Tesseract\Tests;

use Tesseract\TesseractOCR;

/**
 *
 * @author: michael.luehr <michael.luehr@gmail.com>
 */
/**
 * Wrapping TesseractOCR class to be able to unit test some functionality.
 */
class WrapTesseractOCR extends TesseractOCR
{
    /**
     * Exposing 'buildCommand' method by making it public, without changing
     * its implementation, just to be able invoke it from the unit tests.
     */
    public function buildCommand()
    {
        return parent::buildCommand();
    }
}