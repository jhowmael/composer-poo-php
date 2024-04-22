<?php 

require __DIR__ . '../vendor/autoload.php';

use App\Users;

$users = new Users();


$users->addUser("João", "joao123", "senha123", "joao@gmail.com", "22", "M");
$users->addUser("Maria", "maria123", "maria123", "maria@gmail.com", "23", "F");

?>

<h1> Dados do Usuário:</h1>
<?php foreach ($users->getUsers() as $user): ?>
    <p>Nome: <?= $user->name ?></p>
    <p>Login: <?= $user->login ?></p>
    <p>Email: <?= $user->email ?></p>
    <p>Idade: <?= $user->year ?></p>
    <p>Gênero: <?= $user->gender ?></p>
<?php endforeach; ?>

