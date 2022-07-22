<?php
namespace webdna\commerce\bundles\fields;

use webdna\commerce\bundles\elements\Bundle;

use Craft;
use craft\fields\BaseRelationField;

class Bundles extends BaseRelationField
{
    // Public Methods
    // =========================================================================

    public static function displayName(): string
    {
        return Craft::t('commerce-bundles', 'Bundles');
    }

    public static function elementType(): string
    {
        return Bundle::class;
    }

    public static function defaultSelectionLabel(): string
    {
        return Craft::t('commerce-bundles', 'Add a bundle');
    }
}