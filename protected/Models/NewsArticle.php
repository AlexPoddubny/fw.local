<?php
	

	namespace App\Models;

	
	use T4\Orm\Model;
	
	/**
	 * Class NewsArticle
	 * @package App\Models
	 * @property $title
	 * @property $lead
	 */
	class NewsArticle
		extends Model
	{
		protected static $schema = [
			'table' => 'news',
			'columns' => [
				'title' => ['type' => 'string'],
				'lead' => ['type' => 'text']
			],
			'relations' => [
				'author' => [
					'type' => self::BELONGS_TO,
					'model' => Author::class]
			]
		];
	}