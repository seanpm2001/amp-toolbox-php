<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class RadialgradientStop extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'radialgradient > stop';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::STOP,
        SpecRule::SPEC_NAME => 'radialgradient > stop',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::OFFSET,
            ],
            [
                SpecRule::NAME => Attribute::STOP_COLOR,
            ],
            [
                SpecRule::NAME => Attribute::STOP_OPACITY,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\SvgStyleAttr::ID,
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
        SpecRule::MANDATORY_ANCESTOR => Element::RADIALGRADIENT,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}