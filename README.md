# svg

Collection of well formed svg, with classes to change the colors with css.

## Css classes

* `is-color` The main color
* `is-black` Black color
* `is-white` White color

## Usage

With php:

```html
<styles>
    /* Change the color to gray */
	svg .is-color {
        fill: #999;
    }
</styles>

<p>
	Follow me on twitter:
	<a href="https://twitter.com/misteroom">
        <?= file_get_contents('svg/dist/twitter-square.svg'); ?>
	</a>
</p>
```