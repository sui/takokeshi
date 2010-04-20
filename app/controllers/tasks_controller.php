<?php
class TasksController extends AppController{
    var $name = 'Tasks';
    function index() {
        $this->set('tasks', $this->Task->find('all'));
    }
    
    function add(){
        if(!empty($this->data)){
            if($this->Task->save($this->data)){
            }
        }
        $this->redirect('/tasks');
    }
    
    function complete(){
        if(!isset($this->params["id"])){
	    $this->cakeError('error404');
	    return;
	}
	$this->Task->id = $this->params["id"];
	
	$data = array("status" => Task::COMPLETE,
		      "completed" => date("Y-m-d H:i:s"));
    
	$this->Task->save($data);
        $this->redirect('/tasks');
    }
    
    function week(){
	
	$lastSunday = date("Y-m-d",strtotime("last Sunday"));
	
        $this->set('tasks_complete',
	    $this->Task->find('all',array('conditions' => array('completed >' => $lastSunday)))
	);
	$this->set('tasks_created',
	    $this->Task->find('all',array('conditions' => array('created >' => $lastSunday)))
	);
    }
}
?>