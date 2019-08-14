<?php
/**
 * CraftMimi plugin for Craft CMS 3.x
 *
 * Generate share images with preview
 *
 * @link      https://xn--hriga-mra.com/
 * @copyright Copyright (c) 2019 Haariga
 */

namespace haariga\mimi\models;

use haariga\mimi\CraftMimi;

use Craft;
use craft\base\Model;

/**
 * CraftMimi Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Haariga
 * @package   CraftMimi
 * @since     0.0.1
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some field model attribute
     *
     * @var string
     */
    public $defaultWatermarkImageWidth = '100';
    public $defaultWatermarkImageHeight = '100';
    public $defaultWatermarkImageOpacity = '1';
    public $defaultWatermarkImagePosition = 'right/bottom';
    public $defaultWatermarkImageOffsetXAxis = '32';
    public $defaultWatermarkImageOffsetYAxis = '32';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['defaultWatermarkImageWidth', 'default', 'value' => '100'],
            ['defaultWatermarkImageOpacity', 'number', 'min' => '0'],

            ['defaultWatermarkImageHeight', 'default', 'value' => '100'],
            ['defaultWatermarkImageHeight', 'number', 'min' => '0'],

            ['defaultWatermarkImageOpacity', 'default', 'value' => '1', ],
            ['defaultWatermarkImageOpacity', 'number', 'min' => '0', 'max' => '1'],

            ['defaultWatermarkImagePosition', 'string'],
            ['defaultWatermarkImagePosition', 'default', 'value' => 'right/bottom'],

            ['defaultWatermarkImageOffsetXAxis', 'default', 'value' => '32'],
            ['defaultWatermarkImageOffsetXAxis', 'number', 'min' => '0'],

            ['defaultWatermarkImageOffsetYAxis', 'default', 'value' => '32'],
            ['defaultWatermarkImageOffsetYAxis', 'number', 'min' => '0'],
        ];
    }
}
