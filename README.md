# svg

Collection of well formed svg, styled with css

## Naming convention

### Base names:

* `square.svg` Square version (24x24)
* `logo.svg` Normal version (24px height)

### Name suffixes:

* `*-large` Large version

### Css classes

* `svg-*` Base class
* `is-large` Large version
* `is-square` Square version
* `is-reversed` Reverse version
* `is-color1` Main color
* `is-color2` Secondary color
* `is-black` Black color (or equivalent)
* `is-white` White color (or equivalent)

## Usage

With php:

```html
<styles>
	<?= Svg::css() ?>
</styles>

<p>
	Follow me on twitter:
	<a href="https://twitter.com/misteroom">
		<?= Svg::square('twitter') ?>
	</a>
</p>
```