<?php

namespace AmpProject\CompatibilityFix;

use AmpProject\CompatibilityFix;

/**
 * Backwards compatibility fix for classes that were moved.
 *
 * @package ampproject/amp-toolbox
 */
final class MovedClasses implements CompatibilityFix
{

    /**
     * Mapping of aliases to be registered.
     *
     * @var array<string, string> Associative array of class alias mappings.
     */
    const ALIASES = [
        // v0.9.0 - moving HTML-based utility into a separate `Html` subnamespace.
        'AmpProject\AtRule'             => 'AmpProject\Html\AtRule',
        'AmpProject\Attribute'          => 'AmpProject\Html\Attribute',
        'AmpProject\LengthUnit'         => 'AmpProject\Html\LengthUnit',
        'AmpProject\RequestDestination' => 'AmpProject\Html\RequestDestination',
        'AmpProject\Role'               => 'AmpProject\Html\Role',
        'AmpProject\Tag'                => 'AmpProject\Html\Tag',

        // v0.9.0 - Extracting `Encoding` out of `Dom\Document`, as it is turned into AMP value object.
        'AmpProject\Dom\Document\Encoding' => 'AmpProject\Encoding',

    ];

    /**
     * Register the compatibility fix.
     *
     * @return void
     */
    public static function register()
    {
        foreach (self::ALIASES as $old => $new) {
            if (class_exists($old)) {
                continue;
            }

            class_alias($new, $old, true);
        }
    }
}
