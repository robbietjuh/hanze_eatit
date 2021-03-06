<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * IngredientModel.php
 * EatIT
 *
 * This file contains the Ingredient model definition
 *
 * @author     R. de Vries <r.devries@robbytu.net>
 * @version    1.0.0
 * @date       01/10/14
 * @copyright  2014 RobbytuProjects
 * @license    MIT License
 */

class IngredientModel extends MvcBaseModel {
    /**
     * @var string Database table name for this model
     */
    protected $tableName = "ingredient";

    /**
     * @var string Database table primary key field name for this model
     */
    protected $tablePrimaryKeyField = "id";
}