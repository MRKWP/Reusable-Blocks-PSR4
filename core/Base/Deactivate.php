<?php
/**
 * @package Domain_Core
 */
namespace Domain_Core\Base;

class Deactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}