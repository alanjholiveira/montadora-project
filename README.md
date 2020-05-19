<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>


## Projeto Montadora

##Requisitos
- PHP >= 7.2
- MySQL 5.7.8
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Instalação
First install Composer

1. Clona o projeto
```
git clone https://github.com/alanjholiveira/montadora-project.git
```
2. Entra na pasta do projeto
```
cd montadora-project
```
3. Instalação das depedencias
```
composer install
```

## Assets
Os assets são gerenciados com o Laravel Mix . 
Para trabalhar com assets, você precisa instalar o Node.js , 
na pasta do projeto execute estes comandos:

1. Instala os pacotes npm (será croado a pasta node_modules)
```
npm install
```

2. Compila assets
```
npm run dev OU npm run prod
```

## Configuração

1. Executa comando para configurar o .env
```
php -r "copy('.env.example', '.env');"
```
```
php artisan key:generate
```
2. Abre p arquivo .env e faça as configurações do banco de dados

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=laravel
- DB_USERNAME=root
- DB_PASSWORD=


3. Para propagar o banco de dados deve usar o comando abaixo.
Este comando é útil para reconstruir completamente o banco de dados.

```
php artisan migrate:fresh --seed
```

## Usuário e senha padrão
```
CPF: 12345678900
Senha: 123456789
```
