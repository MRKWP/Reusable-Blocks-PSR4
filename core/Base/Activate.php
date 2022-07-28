<?php
/**
 * @package Domain_Core
 */
namespace Domain_Core\Base;

class Activate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}