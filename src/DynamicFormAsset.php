<?php
/**
 * @link      https://github.com/wbraganca/yii2-dynamicform
 * @copyright Copyright (c) 2014 Wanderson Bragança
 * @license   https://github.com/wbraganca/yii2-dynamicform/blob/master/LICENSE
 */

namespace wbraganca\dynamicform;

/**
 * Asset bundle for dynamicform Widget
 *
 * @author Wanderson Bragança <wanderson.wbc@gmail.com>
 */
class DynamicFormAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\widgets\ActiveFormAsset'
    ];

    public $sourcePath = __DIR__.'/assets';

    public $js = [
        'yii2-dynamic-form.js',
    ];
}
