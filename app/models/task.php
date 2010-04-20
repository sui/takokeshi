<?php
class Task extends AppModel{
    var $name = 'Task';
    var $validate = array(
        'title' => array(
            'rule' => array('minLength',1),
        ),
    );
    const STOCK = 0;
    const DOING = 1;
    const COMPLETE = 2;
}
?>