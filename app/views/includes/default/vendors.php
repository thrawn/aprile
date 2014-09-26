<?php
// You can put this code into /app/routes.php for testing

/*
 * Form::selectOpt()
 *
 * Parameters:
 *   $collection    A I\S\Collection instance
 *   $name          The HTML "name"
 *   $groupBy       Field by which options are grouped
 *   $labelBy       Field to use as an option label  (default="name")
 *   $valueBy       Field to use as option's value (default="id")
 *   $value         Value of selected item or items
 *   $attributes    An array of additional HTML attributes
 */
Form::macro('selectOpt', function(ArrayAccess $collection, $name, $groupBy, $labelBy = 'name', $valueBy = 'id', $value = null, $attributes = array()) {
    $select_optgroup_arr = [];
    foreach ($collection as $item)
    {
        $select_optgroup_arr[$item->$groupBy][$item->$valueBy] = $item->$labelBy;
    }
    return Form::select($name, $select_optgroup_arr, $value, array('class' => 'form-control')); //$attributes);
});

/*
 * Form::selectOptMulti()
 *
 * A shortcut for Form::selectOpt with multiple selection
 */
Form::macro('selectOptMulti', function(ArrayAccess $collection, $name, $groupBy, $labelBy = 'name', $valueBy = 'id', $value = null, $attributes = array()) {
    $attributes = array_merge($attributes, ['multiple' => true]);
    return Form::selectOpt($collection, $name, $groupBy, $labelBy, $valueBy, $value, $attributes);
});

//return Form::selectOpt(Product::all(), 'product_id', 'category', 'name', 'id');

