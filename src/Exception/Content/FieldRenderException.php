<?php

namespace Bolt\Exception\Content;

/**
 * Failed to render a field's value.
 */
class FieldRenderException extends \Exception implements ContentExceptionInterface
{
    /** @var string */
    protected $fieldName;
    /** @var string */
    protected $source;

    /**
     * Constructor.
     *
     * @param string                     $fieldName
     * @param string|null                $source
     * @param string                     $message
     * @param \Exception|\Throwable|null $previous
     */
    public function __construct($fieldName, $source = null, $message = 'Failed to render content for field: "%s"', $previous = null)
    {
        $message = sprintf($message, $fieldName);
        parent::__construct($message, 0, $previous);
        $this->fieldName = $fieldName;
        $this->source = $source;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string|null $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }
}
