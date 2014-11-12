<?php
	/**
	 * Created by PhpStorm.
	 * User: Bartosz Gołek
	 * Date: 09.11.13
	 * Time: 15:30
	 */

	namespace Saigon\Conpago\Database\Doctrine\Contract;

	use Doctrine\ORM\EntityManagerInterface;
	use Saigon\Conpago\Database\Doctrine\Contract\IDoctrineConfig;

	interface IDoctrineDao
	{
		/**
		 * @param $shortClassName
		 *
		 * @return string
		 */
		public function getModelClassName($shortClassName);

		/**
		 * @return \Doctrine\ORM\EntityManagerInterface
		 */
		public function getEntityManager();
	}