<?php

declare(strict_types=1);

namespace App;

class Users extends People
{
    public string $name;
    public string $login;
    private string $password;
    public string $email;
    public array $users = [];

    public function __construct(
        string $name = null,
        string $login = null,
        string $password = null,
        string $email = null,
        string $year = null,
        string $gender = null
    ) {
        parent::__construct($year, $gender);

        if (isset($name)) {
            $this->name = $name;
        }
        if (isset($login)) {
            $this->login = $login;
        }
        if (isset($password)) {
            $this->password = $password;
        }
        if (isset($email)) {
            $this->email = $email;
        }
    }

    public function displayData(): array
    {
        return [
            'name' => $this->name,
            'login' => $this->login,
            'password' => $this->password,
            'email' => $this->email,
            'year' => $this->getYear(), // Obtém a idade usando o método getYear() da classe People
            'gender' => $this->getGender(), // Obtém o gênero usando o método getGender() da classe People
        ];
    }

    public function addUser(string $name, string $login, string $password, string $email, string $year = null, string $gender = null)
    {
        $user = new Users($name, $login, $password, $email, $year, $gender);
        $this->users[] = $user;
    }

    public function getUsers(): array
    {
        return $this->users;
    }
}