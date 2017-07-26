<?php

namespace MSergeev\Packages\Alipack\Tables;

use MSergeev\Core\Entity;
use MSergeev\Core\Lib\DataManager;
use MSergeev\Core\Lib\TableHelper;

class OrdersTable extends DataManager
{
	public static function getTableName ()
	{
		return 'ms_alipack_orders';
	}

	public static function getTableTitle ()
	{
		return 'Заказы';
	}

	public static function getTableLinks ()
	{
		return array(
			'ID' => array(
				'alipack_products' => 'ORDER_ID'
			)
		);
	}

	public static function getMap ()
	{
		return array(
			TableHelper::primaryField(),
			new Entity\StringField('NAME',array(
				'required' => true,
				'title' => 'Название заказа'
			)),
			new Entity\BooleanField('IMPORTANT',array(
				'required' => true,
				'default_value' => false,
				'title' => 'Флаг важного заказа'
			)),
			new Entity\FloatField('COST',array(
				'required' => true,
				'default_value' => 0,
				'title' => 'Стоимость заказа'
			)),
			new Entity\StringField('SHOP_NAME',array(
				'title' => 'Название продавца'
			)),
			new Entity\StringField('SHOP_LINK',array(
				'title' => 'Ссылка на магазин продавца'
			)),
			new Entity\StringField('NOTICE',array(
				'title' => 'Примечание'
			)),
			new Entity\StringField('ALI_ORDER_NUMBER',array(
				'title' => 'Номер заказа на Али'
			)),
			new Entity\StringField('ORDER_STATUS',array(
				'title' => 'Статус заказа'
			)),
			new Entity\DateField('DATE_CART_STATUS',array(
				'title' => 'Дата добавления в корзину'
			)),
			new Entity\DateField('DATE_PAY_STATUS',array(
				'title' => 'Дата оплаты заказа'
			)),
			new Entity\DateField('DATE_SEND_STATUS',array(
				'title' => 'Дата отправки заказа'
			)),
			new Entity\DateField('DATE_ARRIVAL_RUS',array(
				'title' => 'Дата прибытия в Россию'
			)),
			new Entity\DateField('DATE_ARRIVAL_POST',array(
				'title' => 'Дата прибытия на почту'
			)),
			new Entity\DateField('DATE_RECEIVING_STATUS',array(
				'title' => 'Дата получения заказа'
			)),
			new Entity\DateField('DATE_OPEN_DISPUTE_STATUS',array(
				'title' => 'Дата открытия спора'
			)),
			new Entity\DateField('DATE_CLOSE_DISPUTE_STATUS',array(
				'title' => 'Дата окончания спора'
			)),
			new Entity\DateField('DATE_ORDER_CLOSE_STATUS',array(
				'title' => 'Дата закрытия заказа'
			)),
			new Entity\DateField('DATE_ORDER_CANCEL',array(
				'title' => 'Дата отмены заказа'
			)),
			new Entity\DateField('DATE_PROTECTION_EXPIRES',array(
				'title' => 'Дата истечения защиты покупателя'
			)),
			new Entity\StringField('TRANSPORT_COMPANY',array(
				'title' => 'Транспортная компания'
			)),
			new Entity\StringField('TRACK_CODE',array(
				'title' => 'Трек-код'
			)),
			new Entity\FloatField('WEIGHT',array(
				'title' => 'Вес посылки'
			)),
			new Entity\TextField('HISTORY',array(
				'title' => 'Движение посылки'
			))
		);
	}
}