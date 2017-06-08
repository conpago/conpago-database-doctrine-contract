<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 2014-06-24
 * Time: 20:53
 *
 * @package    Conpago-Database-Doctrine-Contract
 * @subpackage Base
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Database\Doctrine\Contract;

/**
 * Provides configuration for Doctrine2 database access.
 */
interface IDoctrineConfig
{

    /**
     * Check Doctrine2 is working in Dev mode.
     *
     * @return boolean Returns true if Doctrine2 works in Dev mode, otherwise false.
     */
    public function isInDevMode(): bool;

    /**
     * Get path to model classes directory.
     *
     * @return string Returns path to model classes directory.
     */
    public function getModelPath(): string;

    /**
     * Get model classes namespace.
     *
     * @return string Returns model classes namespace.
     */
    public function getModelNamespace(): string;
}
