<?php include 'Svg.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SVG</title>

        <style type="text/css">
        <?= Svg::css() ?>

        svg {
            margin: 2em;
        }

        svg.is-reversed {
            margin: 1em;
            padding: 1em;
        }
        </style>
    </head>

    <body>
        <div>
            <?php
            foreach (Svg::all() as $name) {
                if (Svg::exists($name, 'square')) {
                    echo Svg::square($name);
                }
            }
            ?>
        </div>

        <div>
            <?php
            foreach (Svg::all() as $name) {
                if (Svg::exists($name, 'square')) {
                    echo Svg::square($name, 'is-reversed');
                }
            }
            ?>
        </div>

        <div>
            <?php
            foreach (Svg::all() as $name) {
                if (Svg::exists($name, 'logo')) {
                    echo Svg::logo($name);
                }
            }
            ?>
        </div>

        <div>
            <?php
            foreach (Svg::all() as $name) {
                if (Svg::exists($name, 'logo')) {
                    echo Svg::logo($name, 'is-reversed');
                }
            }
            ?>
        </div>
    </body>
</html>
