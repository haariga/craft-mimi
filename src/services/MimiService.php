<?php
/**
 * Mimi plugin for Craft CMS 3.x
 *
 * Generate share images with preview
 *
 * @link      https://xn--hriga-mra.com/
 * @copyright Copyright (c) 2019 Haariga
 */

namespace haarigamimi\mimi\services;

use haarigamimi\mimi\Mimi;

use Craft;
use craft\base\Component;

/**
 * MimiService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Haariga
 * @package   Mimi
 * @since     0.0.1
 */
class MimiService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Mimi::$plugin->mimiService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (Mimi::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
