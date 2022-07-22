<?php
namespace webdna\commerce\bundles\events;

use yii\base\Event;

class CompleteBundleOrderEvent extends Event
{
    // Properties
    // =========================================================================

    public $bundle;
	public $order;
	public $lineItem;
}
