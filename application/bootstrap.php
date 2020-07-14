<?php

use Noodlehaus\Config;
use Slim\App;

/**
 * Class Bootstrap
 * アプリケーションの起動処理を行うクラス
 */
class Bootstrap
{

    /** @var App */
    private $app;

    /**
     * Bootstrap constructor.
     */
    public function __construct()
    {
        $this->app = new App();
        $this->initRoute();
        $this->initView();
        $this->initDB();
    }

    /**
     * アプリケーションを起動する
     */
    public function run()
    {
        $this->app->run();
    }

    /**
     * ビューの設定を初期化する
     */
    private function initView()
    {
        $view = new Slim\Views\Smarty(VIEW_DIR . DS . 'templates', [
            'cacheDir' => VIEW_DIR . DS . 'cache',
            'compileDir' => VIEW_DIR . DS . 'compiled',
        ]);

        $c = $this->app->getContainer();
        $c['view'] = $view;
    }

    /**
     * ルーティングを行う
     */
    private function initRoute()
    {
        require_once CONF_DIR . DS . 'routes.php';
        routing($this->app);
    }

    /**
     * DB接続の初期化を行う
     */
    private function initDB()
    {
        ActiveRecord\Config::initialize(function (ActiveRecord\Config $cfg) {
            $configs = Config::load(CONF_DIR . DS . sprintf('config.%s.json', APPLICATION_ENV));
            $databases = $configs['databases'];
            $connections = [];
            foreach ($databases as $db) {
                if ($db['password']) {
                    $connections[$db['label']] = "mysql://{$db['username']}:{$db['password']}@{$db['host']}/{$db['schema']};charset={$db['charset']}";
                } else {
                    $connections[$db['label']] = "mysql://{$db['username']}@{$db['host']}/{$db['schema']};charset={$db['charset']}";
                }
            }
            $cfg->set_connections($connections);
            $cfg->set_default_connection($databases[0]['label']);
        });
    }
}
