<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 09.11.13
 * Time: 15:30
 *
 * @package    Conpago-Database-Doctrine-Contract
 * @subpackage Base
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Database\Doctrine\Contract;

use Doctrine\ORM\EntityManagerInterface;

/**
 * Provides base functionality for Doctrine2 based Dao objects.
 */
interface IDoctrineDao
{

    /**
     * Get full name of model class.
     *
     * @param string $shortClassName Short name of model class (without namespace).
     *
     * @return string Returns full name of model class (without namespace).
     */
    public function getModelClassName(string $shortClassName): string;

    /**
     * Get Doctrine2 EntityManager.
     *
     * @return EntityManagerInterface Returns Doctrine2 EntityManager.
     */
    public function getEntityManager(): EntityManagerInterface;
}
