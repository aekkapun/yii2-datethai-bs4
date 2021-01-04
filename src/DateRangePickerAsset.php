<?php
/**
 * @copyright Copyright (c) 2018 Akaranan Naree
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace aekkapun\datepicker;

use yii\web\AssetBundle;

/**
 * DateRangePickerAsset
 *
 * @author Akaranan Naree
 * @package karatae99\datepicker
 */
class DateRangePickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/aekkapun/yii2-date-picker-thai-widget/src/assets';

    public $css = [
        'css/bootstrap-daterangepicker.css'
    ];

    public $depends = [
        'aekkapun\datepicker\DatePickerAsset'
    ];

}
