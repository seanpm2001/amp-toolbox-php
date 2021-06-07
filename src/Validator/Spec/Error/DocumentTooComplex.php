<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Error;

use AmpProject\Validator\Spec\Error;
use AmpProject\Validator\Spec\SpecRule;

final class DocumentTooComplex extends Error
{
    /**
     * Code of the error.
     *
     * @var string
     */
    const CODE = 'DOCUMENT_TOO_COMPLEX';

    /**
     * Array of spec data.
     *
     * @var array<array>
     */
    const SPEC = [
        SpecRule::FORMAT => 'The document is too complex.',
        SpecRule::SPECIFICITY => 107,
    ];
}