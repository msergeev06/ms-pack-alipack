<?php

namespace MSergeev\Packages\Alipack\Tables;

use MSergeev\Core\Lib\DataManager;
use MSergeev\Core\Entity;
use MSergeev\Core\Lib\TableHelper;

class ProductsTable extends DataManager
{
	public static function getTableName ()
	{
		return 'ms_alipack_products';
	}

	public static function getTableTitle ()
	{
		return 'Товары';
	}

	public static function getMap ()
	{
		return array(
			TableHelper::primaryField(),
			new Entity\IntegerField('ORDER_ID',array(
				'required' => true,
				'link' => 'ms_alipack_orders.ID',
				'title' => 'ID заказа'
			)),
			new Entity\StringField('NAME',array(
				'required' => true,
				'title' => 'Название товара'
			)),
			new Entity\StringField('ORIGINAL_NAME',array(
				'title' => 'Название товара на Али'
			)),
			new Entity\StringField('LINK',array(
				'title' => 'Ссылка на Али'
			)),
			new Entity\FloatField('COST',array(
				'title' => 'Стоимость на момент добавления'
			)),
			new Entity\StringField('LINK_IMG',array(
				'title' => 'Ссылка на изображение'
			)),
			new Entity\StringField('LINK_SCREENSHOT',array(
				'title' => 'Ссылка на скриншот товара при заказе'
			)),
			new Entity\StringField('NOTICE',array(
				'title' => 'Примечание'
			))
		);
	}
}