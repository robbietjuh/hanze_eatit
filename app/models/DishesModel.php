<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * DishesModel.php
 * EatIT
 *
 * This file contains the Dishes model definition
 *
 * @author     R. de Vries <r.devries@robbytu.net>
 * @version    1.0.0
 * @date       01/10/14
 * @copyright  2014 RobbytuProjects
 * @license    MIT License
 */

class DishesModel extends MvcBaseModel {
    /**
     * @var string Database table name for this model
     */
    protected $tableName = "dishes";

    /**
     * @var string Database table primary key field name for this model
     */
    protected $tablePrimaryKeyField = "id";

    public function getDishesInStock($type='dish') {
        if($type != 'dish' && $type != 'sideorder')
            return $this->MvcInstance->dieWithDebugMessageOr404("Type should be one of: dish, sideorder");

        require_once 'DishesIngredientModel.php';
        require_once 'IngredientModel.php';

        $ingredientModel = new IngredientModel($this->MvcInstance);
        $dishesIngredientModel = new DishesIngredientModel($this->MvcInstance);

        $dishes_in_stock = array();
        $dishes = $this->allObjectsWithQuery("WHERE type = '$type'");

        foreach($dishes as $dish) {
            $amountInStock = -1;
            $ingredients = $dishesIngredientModel->allObjectsWithQuery("WHERE dish_id = {$dish['pk']}");
            foreach($ingredients as $ingredient) {
                $ingredientObj = $ingredientModel->getObjectByPk($ingredient['ingredient_id']);
                if($amountInStock == -1 || $ingredientObj['stock'] < $amountInStock) $amountInStock = $ingredientObj['stock'];
            }

            if($amountInStock > 0) {
                $dish['stock'] = $amountInStock;
                $dishes_in_stock[] = $dish;
            }
        }

        return $dishes_in_stock;
    }
}
