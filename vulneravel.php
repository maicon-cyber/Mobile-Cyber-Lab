<?php
$id = $_GET['id'];
$db = new SQLite3('teste.db');
// ISSO É VULNERÁVEL DE PROPÓSITO:
$result = $db->query("SELECT name FROM users WHERE id = $id");
while ($row = $result->fetchArray()) {
	    echo "Usuário: " . $row['name'];
	    }
	    ?>
	    
}
