<?php
/**
 * Bundles plugin for Craft Commerce
 *
 * @link      https://webdna.co.uk
 * @copyright Copyright (c) 2022 webdna
 */

namespace webdna\commerce\bundles\records;

use webdna\commerce\bundles\Bundles;

use craft\db\ActiveRecord;

use yii\db\ActiveQueryInterface;

/**
 * @author   webdna
 * @package   Bundles
 * @since     2.0.0
 */
class BundlePurchasableRecord extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%bundles_purchasables}}';
    }
}
