<?php

namespace mimicreative\assets;

class Html5ShivAsset extends \yii\web\AssetBundle {
  
  /**
  * @inherit
  */
  public $sourcePath = '@bower/html5shiv';
  
  /**
  * @inherit
  */
  public $js = [
    'dist/html5shiv.min.js',
  ];
  
  public $jsOptions = [
    'condition' => 'lte IE9',
    'position' => \yii\web\View::POS_HEAD
  ];
  
  /**
  * Initializes the bundle.
  * Set publish options to copy only necessary files (in this case css and font folders)
  */
  public function init()
  {
     parent::init();

     $this->publishOptions['beforeCopy'] = function ($from, $to) {
         return preg_match('%(/|\\\\)dist%', $from);
     };
  }
}

