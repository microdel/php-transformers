<?php

namespace Saritasa\Transformers\Exceptions;

use Saritasa\Transformers\IDataTransformer;
use Throwable;

/**
 * Thrown by class, implementing IDataTransformer
 * (which is intended to transform input data to a certain format),
 * when it gets input, inappropriate for transformation
 */
class TransformException extends \Exception
{
    /**
     * Thrown by class, implementing IDataTransformer
     * (which is intended to transform input data to a certain format),
     * when it gets input, inappropriate for transformation
     *
     * @param IDataTransformer $transformer Originator of message
     * @param string $message Error message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(IDataTransformer $transformer, $message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct(get_class($transformer).": ".$message, $code, $previous);
    }
}
