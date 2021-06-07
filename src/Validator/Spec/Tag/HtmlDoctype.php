<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class HtmlDoctype extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'html doctype';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::_DOCTYPE,
        SpecRule::SPEC_NAME => 'html doctype',
        SpecRule::MANDATORY => true,
        SpecRule::UNIQUE => true,
        SpecRule::MANDATORY_PARENT => '$ROOT',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::HTML,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::LANG,
                SpecRule::DEPRECATION => 'html',
                SpecRule::DEPRECATION_URL => 'https://github.com/ampproject/amphtml/issues/25926',
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4EMAIL,
        ],
        SpecRule::EXPLICIT_ATTRS_ONLY => true,
        SpecRule::DESCRIPTIVE_NAME => 'html !doctype',
    ];
}