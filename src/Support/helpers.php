<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

/**
 * @return \FastD\App
 */
function app () {
    return \FastD\App::$app;
}


/**
 * @param $name
 * @return \FastD\Event\EventDispatcher
 */
function event ($name) {

}

/**
 * @param $name
 */
function store ($name) {

}

function response ($content = '', $statusCode = 200, array $headers = []) {
    return new \FastD\Http\Response($content, $statusCode, $headers);
}