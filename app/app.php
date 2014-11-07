<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * app.php
 * EatIT
 *
 * Contains the application settings.
 *
 * @author     R. de Vries <r.devries@robbytu.net>
 * @version    1.0.0
 * @date       01/10/14
 * @copyright  2014 RobbytuProjects
 * @license    MIT License
 */

require_once "mvc/MvcApplication.php";

class app extends MvcApplication {
    /**
     * @var string Name of the application
     */
    public $appName = "Eat-IT";

    /**
     * @var string Version of the application
     */
    public $appVersion = "1.0.0";

    /**
     * @var string Base URL of the application, could come in handy when used in combination with Apache's mod_user
     */
    public $appBaseUrl = "";

    /**
     * @var bool Wether or not the enable detailed debug information
     */
    public $debug = true;

    /**
     * @var array Database connection configuration.
     *
     * Should at least contain:
     *      - Host
     *      - Username
     *      - Password
     *      - Database
     */
    protected $database = array(
        'host'      => '127.0.0.1',
        'username'  => 'hanze',
        'password'  => '%v;_:X=S8ZN.X6_31=!X;-:=|.Q+|K',
        'database'  => 'hanze_eatit'
    );

    /**
     * @var array Configured URLs for the application.
     *
     * Should be in a format as follows:
     *      '${Regex URL matcher}' => ['${Controller}', '${Function}']
     *
     * The controllername should match the filename and classname of the controller
     * you want to dispatch to. The functionname is called on the controller.
     */
    protected $urls = array(
        '{^$}' => array('HomepageController', 'renderHomepage'),
        '{^dish/(?P<pk>[\d]+)$}' => array('DishDetailController', 'renderDetails'),
        '{^basket$}' => array('BasketController', 'renderBasket'),
        '{^basket/add/(?P<pk>[\d]+)$}' => array('BasketController', 'addToBasket'),
        '{^basket/remove/(?P<pk>[\d]+)$}' => array('BasketController', 'removeFromBasket'),
        '{^basket/update$}' => array('BasketController', 'updateBasket'),
    );
}