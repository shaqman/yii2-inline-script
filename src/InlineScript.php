<?php

/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 * @author Syakur Rahman <shaqman2004@yahoo.com>
 */

namespace shaqman\widgets\inlinescript;

use yii\base\Widget;

class InlineScript extends Widget {

    public function init() {
        parent::init();
        ob_start();
    }

    public function run() {
        $content = ob_get_clean();
        return Html::encode($content);
    }

}
