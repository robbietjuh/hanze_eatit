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

class DishDetailController extends MvcBaseController {
    public function renderDetails($args) {
        $this->data['article'] = $this->loadModel("DishesModel")->getDishByPkOr404($args['pk']);

        $this->data['title'] = $this->data['article']['name'];

        $this->renderView("base/header");
        $this->renderView("dish_details");
        $this->renderView("base/footer");
    }
}

