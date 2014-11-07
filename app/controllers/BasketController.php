<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * BasketController.php
 * EatIT
 *
 * Controller that will handle requests made to the homepage urldef
 *
 * @author     R. de Vries <r.devries@robbytu.net>
 * @version    1.0.0
 * @date       01/10/14
 * @copyright  2014 RobbytuProjects
 * @license    MIT License
 */

session_start();

class BasketController extends MvcBaseController {
    public function renderBasket($args) {
        $basket = $this->loadModel("BasketModel");

        $this->data['title'] = 'Winkelmandje';
        $this->data['basket'] = $basket->getContents();

        $this->renderView("base/header");
        $this->renderView("basket_contents");
        $this->renderView("base/footer");
    }

    public function addToBasket($args) {
        $basket = $this->loadModel("BasketModel");
        $this->data['message'] = $basket->addToBasket($args['pk'], 1);

        $this->renderBasket($args);
    }
}

