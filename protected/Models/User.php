<?php
	
	
	namespace App\Models;
	
	
	use T4\Orm\Model;
	
	/**
	 * Class User
	 * @package App\Models
	 * @property $name
	 * @property $email
	 */
	class User
		extends Model
	{
		protected static $schema = [
			'columns' => [
				'name'      => ['type' => 'string'],
				'email'     => ['type' => 'string'],
				'password'  => ['type' => 'string'],
				'level'     => ['type' => 'string']
			]
		];
	}