# Pacote para Implementar ACL no Laravel 6

Usando roles, permissions, trait, middleware, provider, etc

## Testado em

- Windows 7
- Linux Mint 20

### Criar um novo aplicativo com laravel 6
```bash
laravel new acl --auth

ou
composer create-project laravel/laravel="6.*" acl

cd acl
composer require laravel/ui "^1.0" --dev
php artisan ui bootstrap --auth
npm install && npm run dev

```

### Criar e configurar o banco

.env

## Instalar o pacote ribafs/laravel6-acl
```bash
composer require ribafs/laravel6-acl
```
## Publicar
```bash
php artisan vendor:publish --provider="Ribafs\Laravel6Acl\Laravel6AclServiceProvider"
```
## Copiar alguns arquivos existentes

- DatabaseSeeder.php
- routes/web.php
- views/welcome.blade.php
- views/layouts/app.blade.php

### Executar
```bash
php artisan copy:files
```
Agora todos os arquivos do pacote já estão em seu aplicativo: migrations, seeders, Models, middleware, provider, etc

### Ajustar o título do aplicativo (opcional)
Editar o .env e mudar a linha com APP_NAME, para algo como: APP_NAME='ACL to Laravel 6'

## Executar

Após adicionar seu CRUD, execute e teste o ACL no controle do acesso do seu aplicativo.
```bash
php artisan migrate --seed
php artisan serve
localhost:8000/login
```
### Use como exemplo:

- super@gmail.com
- 123456

Depois teste com os demais: admin, manager e user

## Documentação

As informações acima e muito mais informações de como tirar o máximo proveito deste pacote no site abaixo:

[https://ribafs.github.io/laravel6-acl/](https://ribafs.github.io/laravel6-acl/)

## Versão para o Laravel 8 com aplicactivos existentes

Se deseja um pacote para usar com a versão 8 do laravel com aplicativo existente, clique abaixo:

[https://github.com/ribafs/laravel-acl-exist](https://github.com/ribafs/laravel-acl-exist)

## Versão para o Laravel 8

Se deseja um pacote para usar com a versão 8 do laravel, clique abaixo:

[https://github.com/ribafs/laravel-acl](https://github.com/ribafs/laravel-acl)

## Versão para o Laravel 7

Se deseja um pacote para usar com a versão 7 do laravel, clique abaixo:

[https://github.com/ribafs/laravel7-acl](https://github.com/ribafs/laravel7-acl)

## Versão para o Laravel 5.8

Se deseja um pacote para usar com a versão 5.8 do laravel, clique abaixo:

[https://github.com/ribafs/laravel58-acl](https://github.com/ribafs/laravel58-acl)

