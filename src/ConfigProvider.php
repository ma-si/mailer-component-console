<?php

/**
 * Mailer Console Component (http://mateuszsitek.com/projects/mailer-component-console)
 *
 * @copyright Copyright (c) 2017 DIGITAL WOLVES LTD (http://digitalwolves.ltd) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Aist\Mailer\Component\Console;

/**
 * ConfigProvider for Mailer Console Component
 */
class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencies(),
            'console' => [
                'commands' => $this->getCommands(),
                'helpers' => $this->getHelpers(),
            ],
        ];
    }

    /**
     * Returns the commands array
     *
     * @return array
     */
    public function getCommands()
    {
        return [
        ];
    }

    /**
     * Returns the helpers array
     *
     * @return array
     */
    public function getHelpers()
    {
        return [
        ];
    }

    /**
     * Returns the container dependencies
     *
     * @return array
     */
    public function getDependencies()
    {
        return [
            'invokables' => [
            ],
            'factories'  => [
            ],
        ];
    }
}
