<?php

/*
 * Scrutinizer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-scrutinizer
 * @package   hidev-scrutinizer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\scrutinizer\controllers;

/**
 * Goal for .scrutinizer.yml config file.
 * For the moment PHP projects only.
 */
class ScrutinizerYamlController extends \hidev\controllers\FileController
{
    protected $_file = '.scrutinizer.yml';

    /**
     * Adds defaults.
     */
    public function actionLoad()
    {
        $this->setItems([
            'tools' => [
                'php_code_coverage' => [
                    'enabled' => true,
                ],
                'external_code_coverage' => [
                    'timeout' => 600,
                ],
            ],
        ]);
        parent::actionLoad();
    }
}
