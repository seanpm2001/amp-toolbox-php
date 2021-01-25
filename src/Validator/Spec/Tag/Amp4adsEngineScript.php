<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Amp4adsEngineScript extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::SPEC_NAME => 'amp4ads engine script',
        SpecRule::MANDATORY => true,
        SpecRule::UNIQUE => true,
        SpecRule::MANDATORY_PARENT => Element::HEAD,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'src',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'https://cdn.ampproject.org/amp4ads-v0.js',
                ],
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'nonce-attr',
            'amphtml-engine-attrs',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
        SpecRule::CDATA => [
            SpecRule::DISALLOWED_CDATA_REGEX => [
                [
                    'regex' => '.',
                    'errorMessage' => 'contents',
                ],
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4ADS,
        ],
        SpecRule::DESCRIPTIVE_NAME => 'amphtml engine script',
    ];
}
