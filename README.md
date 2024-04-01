<<<<<<< HEAD
# Gerenciador de Discografia da dupla Tião Carreiro e Pardinho -

## Desenvolvido em Laravel 10

# Gerenciamentos

* Visualizar os álbuns e suas faixas de músicas.
* Buscar por palavras chaves os álbuns.
* Adicionar um álbum e faixas a essa álbum.
* Removes álbuns e faixas.

#

## 👨‍💻 Tecnologias

#### Este sistema foi desenvolvido com as seguintes tecnologias e bibliotecas:

- **Linguagem:** [PHP](https://www.php.net/)
- **Framework:** [Laravel](https://laravel.com/)
- **Banco de dados:** [MySQL](https://www.mysql.com/)

#

## instalação

- ferramentas necessárias:
    - composer;
    - PHP 8+;
    - banco de dados Mysql;
    - nodeJS;

primeiramente faça o clone deste projeto, o mesmo já possui o front e o back no mesmo repósitório:
```
https://github.com/Mauricios73/Discografia-back.git
```
### <b>Back-End</b><br>
navege até a pasta ```/Discografia-back```, onde será necessário iniciar o composer:
```
composer install
```
depois, vá até o arquivo ```.env.example```, crie uma cópia e renomeie apenas para ```.env``` e abra-o:

procure a seção do ```.env``` contendo os dados de acesso ao banco, e informe as credenciais do seu banco:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
feito isto, basta iniciar o servidor através do comando, na pasta raiz do back-end:
```
php artisan serve
```
pronto, o backend da aplicação estará funcionando!
=======
# discografia-backend
>>>>>>> a35cd995b06461a34f22505775fd52363150cc0c
