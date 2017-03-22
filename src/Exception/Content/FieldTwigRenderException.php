<?php

namespace Bolt\Exception\Content;

use Twig_Error as TwigError;

/**
 * Failed to render Twig for field.
 */
class FieldTwigRenderException extends FieldRenderException
{
    /** @var TwigError */
    protected $twigError;

    /**
     * Constructor.
     *
     * @param TwigError   $twigError
     * @param string      $fieldName
     * @param string|null $source
     * @param string      $message
     */
    public function __construct(TwigError $twigError, $fieldName, $source = null, $message = 'Failed to render Twig content for field: "%s"')
    {
        parent::__construct($fieldName, $source, $message, $twigError);
        $this->twigError = $twigError;
    }

    /**
     * @return TwigError
     */
    public function getTwigError()
    {
        return $this->twigError;
    }
}
