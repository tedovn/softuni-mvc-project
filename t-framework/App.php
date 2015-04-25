<?php

namespace TF;
class App {

	private static $_instance = null;

	// @return \GF\App
	public static function 	getInstance(){
		if(self::$_instance == null) {
			self::$_instance = new \TF\App();
		}
		return self::$_instance;
	}
}