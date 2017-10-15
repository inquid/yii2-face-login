<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 10/15/17
 * Time: 5:53 PM
 */
namespace inquid\facelogin;
use yii\web\AssetBundle;
class FaceLoginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/inquid/yii2-face-login/assets/';
    public $js = ['capture.js'];
    public $css = ['main.css'];
}