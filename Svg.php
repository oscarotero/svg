<?php

class Svg
{
    /**
     * Returns the css code of one or all svg.
     * 
     * @param string $name The svg name
     * 
     * @return string
     */
    public static function css($name = null)
    {
        if ($name === null) {
            return file_get_contents(self::path('/all.css'));
        }

        return file_get_contents(self::path("/{$name}/styles.css"));
    }

    /**
     * Returns the square version of a logo.
     * 
     * @param string $name  The svg name
     * @param class  $class Additional classes added to svg (for example, is-reversed)
     * 
     * @return string
     */
    public static function square($name, $class = null)
    {
        return self::getSvg("/{$name}/square.svg", $class);
    }

    /**
     * Returns a logo.
     * 
     * @param string $name  The svg name
     * @param class  $class Additional classes added to svg (for example, is-reversed)
     * 
     * @return string
     */
    public static function logo($name, $class = null)
    {
        return self::getSvg("/{$name}/logo.svg", $class);
    }

    /**
     * Returns whether a svg exist or not.
     * 
     * @param string      $name The svg name
     * @param string|null $file The svg file name
     * 
     * @return bool
     */
    public static function exists($name, $file = null)
    {
        if ($name[0] === '.' || !is_dir(self::path("/{$name}"))) {
            return false;
        }

        if ($file !== null && !is_file(self::path("/{$name}/{$file}.svg"))) {
            return false;
        }

        return true;
    }

    /**
     * Returns all svg names.
     * 
     * @return array
     */
    public static function all()
    {
        return array_filter(scandir(self::path()), function ($name) {
            return ($name[0] !== '.' && is_dir(self::path("/{$name}")));
        });
    }

    /**
     * Reads a svg file and returns its code.
     * 
     * @param string $file  The file name
     * @param class  $class Additional classes added to svg code (for example, is-reversed)
     * 
     * @return string
     */
    private static function getSvg($file, $class)
    {
        $svg = file_get_contents(self::path($file));

        if (empty($class)) {
            return $svg;
        }

        return preg_replace('/class="(svg-[^"]+)"/', 'class="$1 '.trim($class).'"', $svg);
    }

    /**
     * Returns the full path of a file.
     * 
     * @param string $name The file name
     * 
     * @return string
     */
    private static function path($name = '')
    {
        return __DIR__."/dist{$name}";
    }
}
