<?php
namespace webdna\commerce\bundles\events;

use yii\base\Event;

class CustomizeBundleSnapshotFieldsEvent extends Event
{
    // Properties
    // =========================================================================

    public $bundle;
    public $fields;
}
