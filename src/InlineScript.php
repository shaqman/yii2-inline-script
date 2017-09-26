<?php

/**
 * @author Syakur Rahman <shaqman2004@yahoo.com>
 */

namespace shaqman\widgets\inlinescript;

use yii\base\Widget;
use yii\web\View;
use yii\base\Exception;

class InlineScript extends Widget {

    public $position;
    public $key;

    public function init() {
        parent::init();
        ob_start();
    }

    public function run() {
        $this->position = empty($this->position) ? View::POS_READY : $this->position;
        $this->key = empty($this->key) ? null : $this->key;

        $content = ob_get_clean();

        $scripts = null;
        if (preg_match('/<script.*?>(.*)<\/script>/s', $content, $scripts)) {
            $this->view->registerJs(trim($scripts[1]), $this->position, $this->key);
        } else {
            throw new Exception("No script was found. You need to include your script between the <script> tags.");
        }
    }

}
