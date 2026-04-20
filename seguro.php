<?php
// 1. Pegamos o ID
$id = $_GET['id'];

// 2. Conectamos ao banco
$db = new SQLite3('teste.db');

// 3. BLINDAGEM: Preparamos a consulta com um "placeholder" (:id)
$stmt = $db->prepare('SELECT name FROM users WHERE id = :id');

// 4. Vinculamos o valor garantindo que ele seja tratado como INTEIRO (Segurança)
$stmt->bindValue(':id', $id, SQLITE3_INTEGER);

// 5. Executamos de forma segura
$result = $stmt->execute();

while ($row = $result->fetchArray()) {
    echo "Usuário: " . $row['name'];
}
?>
