# Gerenciador de Discografia da dupla Tião Carreiro e Pardinho

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

## Instalação

- Ferramentas necessárias:
    - composer;
    - PHP 8+;
    - banco de dados Mysql;

Primeiramente faça o clone deste projeto:
```
https://github.com/Mauricios73/discografia-backend.git
```
### <b>Back-End</b><br>
Navege até a pasta ```/Discografia-back```, onde será necessário iniciar o composer:
```
composer install
```
Depois, vá até o arquivo ```.env.example```, crie uma cópia e renomeie apenas para ```.env``` e abra-o:

Procure a seção do ```.env``` contendo os dados de acesso ao banco, e informe as credenciais do seu banco:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
Feito isto, basta iniciar o servidor através do comando, na pasta raiz do back-end:
```
php artisan serve
```
Pronto, o backend da aplicação estará funcionando!

