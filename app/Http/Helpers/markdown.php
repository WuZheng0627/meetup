<?php
/**
 * Created by PhpStorm.
 * User: WZ
 * Date: 2019/10/9
 * Time: 19:49
 */
use GrahamCampbell\Markdown\Facades\Markdown;

/**
 * @param $str
 * @return mixed
 */
function markdown($str)
{
    return Markdown::convertToHtml($str);

}