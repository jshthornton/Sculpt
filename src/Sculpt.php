<?php namespace Sculpt;
 
class Sculpt {
	public static $EXTENSION = '.tpl.php';

	public static function parse($__path, $__data = array()) {
		return self::render($__path, $__data, false);
	}

	public static function render($__path, $__data = array(), $__echo = true) {
		ob_start();
		extract($__data);
		require $__path . self::$EXTENSION;
 
		$__out = ob_get_clean();
		if($__echo === true) {
			echo $__out;
		} else {
			return $__out;
		}
	}
}