<?php
// 各種定義
define('DS', DIRECTORY_SEPARATOR);
define('PS', PATH_SEPARATOR);
define('APP_ROOT', __DIR__ . DS . '..' . DS . 'application');

// アプリケーション環境設定
define('APPLICATION_ENV', getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'local');
define('ENV_DEV', APPLICATION_ENV !== 'production');
ENV_DEV ? ini_set('display_errors', 1) : ini_set('display_errors', 1);

// もろもろ変数定義
define('CONF_DIR', APP_ROOT . DS . 'configs');
define('CTR_DIR', APP_ROOT . DS . 'controllers');
define('PKG_DIR', APP_ROOT . DS . 'packages');
define('VIEW_DIR', APP_ROOT . DS . 'views');
define('LIB_DIR', __DIR__ . DS . '..' . DS . 'vendor');

// オートローダの読み込み
require_once LIB_DIR . DS . 'autoload.php';
require_once APP_ROOT . DS . 'autoload.php';
require_once PKG_DIR . DS . 'autoload.php';

// エラー設定
// @see http://www.slimframework.com/docs/v3/handlers/php-error.html
if (ENV_DEV) {
    error_reporting(E_ALL);
    set_error_handler(function ($severity, $message, $file, $line) {
        if (error_reporting() & $severity) {
            throw new ErrorException($message, 0, $severity, $file, $line);
        }
    });
}

// 起動
require_once APP_ROOT . DS . 'bootstrap.php';
$application = new Bootstrap();
$application->run();
