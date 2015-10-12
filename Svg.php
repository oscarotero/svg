<?php
class Svg {
	public static function square($name, $class = null)
	{
		return self::getSvg("{$name}/square", $class);
	}

	public static function logo($name, $class = null)
	{
		return self::getSvg("{$name}/logo", $class);
	}

	protected static function getSvg($file, $class)
	{
		$svg = file_get_contents(__DIR__."/src/{$file}.svg");

		if (empty($class)) {
			return $svg;
		}

		return preg_replace('/class="(svg-[^"]+)"/', 'class="$1 '.trim($class).'"', $svg);
	}
}
