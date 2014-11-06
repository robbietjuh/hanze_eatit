<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * HomepageController.php
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

class HomepageController extends MvcBaseController {
    public function renderHomepage($args) {
        $this->data['title'] = 'Home';

        $this->data['articles'] = $this->loadModel("DishesModel")->getDishesInStock();

        $this->renderView("base/header");
        $this->renderView("list_dishes");
        $this->renderView("base/footer");
    }
}

