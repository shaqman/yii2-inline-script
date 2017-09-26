# shaqman/yii2-inline-script
Use inline javascripts inside view normally.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist shaqman/yii2-inline-script
```

or add

```json
"shaqman/yii2-inline-script": "*"
```

## Usage

In your view:

```
use shaqman\widgets\inlinescript\InlineScript

... view ...

<?php InlineScript::begin([
        'position' => View::POS_HEAD, // yii\web\view\registerJs parameter (optional)
        'key' => 'tmp-script' // yii\web\view\registerJs parameter (optional)
    ]);
?>

<script>

    $("#btn-submit").click(function () {
        alert('hi');
    });

</script>

<?php InlineScript::end(); ?>

... view ...
```