<?php

namespace MSergeev\Packages\Alipack\Tables;

use MSergeev\Core\Lib\DataManager;
use MSergeev\Core\Entity;
use MSergeev\Core\Lib\TableHelper;

class OrderStatusTable extends DataManager
{
	public static function getTableName ()
	{
		return 'ms_alipack_order_status';
	}

	public static function getTableTitle ()
	{
		return 'Статусы заказа';
	}

	public static function getMap ()
	{
		return array(
			TableHelper::primaryField(),
			TableHelper::sortField(),
			new Entity\StringField('NAME',array(
				'required' => true,
				'title' => 'Название статуса'
			)),
			new Entity\StringField('CODE',array(
				'required' => true,
				'title' => 'Код статуса'
			))
		);
	}

	public static function getArrayDefaultValues ()
	{
		return array(
			array(
				'SORT' => 50,
				'NAME' => 'В корзине (на обдумывании)',
				'CODE' => 'cart'
			),
			array(
				'SORT' => 100,
				'NAME' => 'Оплачен, в ожидании отправки',
				'CODE' => 'paid'
			),
			array(
				'SORT' => 150,
				'NAME' => 'Отправлен',
				'CODE' => 'send'
			),
			array(
				'SORT' => 200,
				'NAME' => 'Прибыл в Россию',
				'CODE' => 'arrival-rus'
			),
			array(
				'SORT' => 250,
				'NAME' => 'Прибыл на почту',
				'CODE' => 'arrival-post'
			),
			array(
				'SORT' => 300,
				'NAME' => 'Получен (и нет претензий)',
				'CODE' => 'received'
			),
			array(
				'SORT' => 350,
				'NAME' => 'Открыт спор',
				'CODE' => 'dispute'
			),
			array(
				'SORT' => 400,
				'NAME' => 'Окончен спор (ожидание результата)',
				'CODE' => 'back'
			),
			array(
				'SORT' => 450,
				'NAME' => 'Закрытие по завершению спора',
				'CODE' => 'close'
			),
			array(
				'SORT' => 490,
				'NAME' => 'Отмена заказа',
				'CODE' => 'cancel'
			)
		);
	}
}