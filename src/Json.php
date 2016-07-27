<?php
namespace phptestsoft100;

class Json
{
	public static function encode($data)
	{
		return json_encode($data);
	}
	/**
	 *  第二个参数指返回数据类型，默认false则返回对象，true则返回数组。
	 */
	public static function decode($jsonData)
	{
		return json_decode($jsonData, true);
	}
}