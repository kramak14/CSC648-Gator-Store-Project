<!DOCTYPE HTML>  
<html>
<?php
use Cake\Datasource\ConnectionManager;

    try {
        $connection = ConnectionManager::get('default');
        $connected = $connection->connect();
	echo('connection successful');
    } catch (Exception $connectionError) {
        //Couldn't connect
	echo('connection failed');
    }

echo $this->Form->create('post');

echo $this->Form->input('name');

echo $this->Form->end('Add');
?>
</html>
