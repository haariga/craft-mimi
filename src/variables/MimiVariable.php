<?php
/**
 * Mimi plugin for Craft CMS 3.x
 *
 * Generate share images with preview
 *
 * @link      https://xn--hriga-mra.com/
 * @copyright Copyright (c) 2019 Haariga
 */

namespace haariga\mimi\variables;

use haariga\mimi\Mimi;

use Craft;

/**
 * Mimi Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.mimi }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Haariga
 * @package   Mimi
 * @since     0.0.1
 */
class MimiVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.mimi.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.mimi.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
