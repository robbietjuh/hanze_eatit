<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * BasketModel.php
 * EatIT
 *
 * This file contains the Basket model definition
 *
 * @author     R. de Vries <r.devries@robbytu.net>
 * @version    1.0.0
 * @date       01/10/14
 * @copyright  2014 RobbytuProjects
 * @license    MIT License
 */

require_once 'DishesModel.php';

class BasketModel extends MvcBaseModel {
    /**
     * @var string Database table name for this model
     */
    protected $tableName = "NULL";

    /**
     * @var string Database table primary key field name for this model
     */
    protected $tablePrimaryKeyField = "NULL";

    public function getContents($withDishObject=true) {
        if(!isset($_SESSION["basket"]))
            $_SESSION["basket"] = array();

        $dishes = new DishesModel($this->MvcInstance);
        $items = array();

        foreach($_SESSION["basket"] as $pk => $item) {
            if($withDishObject) $item['dish'] = $dishes->getDishByPkOr404($pk);
            $items[$pk] = $item;
        }

        return $items;
    }

    public function addToBasket($pk, $amount) {
        $dishes = new DishesModel($this->MvcInstance);
        $dish = $dishes->getDishByPkOr404($pk);

        if($amount > $dish['stock']) return "Er is te weinig voorraad";

        $items = $this->getContents(false);
        $items[$pk] = array('amount' => $amount);
        $_SESSION["basket"] = $items;

        return "Het item is toegevoegd aan uw winkelmandje";
    }

    public function removeFromBasket($pk) {
        $items = $this->getContents(false);
        $keep = array();

        foreach($items as $pkObj => $item)
            if($pkObj != $pk) $keep[$pk] = $item;

        $_SESSION["basket"] = $keep;

        return "Je winkelmandje is geupdate";
    }
}
