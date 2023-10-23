# Repositório criado na disciplina de PDS (Equipe 4) para o desenvolvimento da aplicação MatEduca

## Preparando o ambiente
Primeiramente, instale as dependências do projeto. No diretório raiz, execute o comando:
```shell
composer install
```
Execute as migrations para que o Laravel crie toda a estrutura do banco de dados:
```shell
php artisan migrate
```
Agora rode o comando para o Laravel popular as tabelas com os registros necessários:
```shell
php artisan db:seed
```
Em seguida, acesse o diretório `FrontVue` e em seguida, instale as dependências do front:
```shell
cd FrontVue
sudo npm i
```

Rode o frontend com o comando (no diretório `FrontVue`):
```shell
sudo npm run serve
```

Rode o backend com o comando (no diretório raiz):
```shell
php artisan serve
```

Agora abra um browser e acesse o `localhost:8080`