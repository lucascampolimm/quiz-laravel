# Information

**Disciplina:** Códigos de Alta Perfomance Web

**Integrantes:** [Lucas Campolim](https://github.com/lucascampolimm) e [Tharlis David](https://github.com/tharlisdavid)

**Tema:** Desempenho de Alunos

# Software

**Softwares que estamos utilizando nesse projeto:**
- XAMPP: https://www.apachefriends.org/download.html
- Composer: https://getcomposer.org/download/
- Laravel: https://laravel.com/docs/9.x/installation/
- NodeJS: https://nodejs.org/pt-br/download/current/
- Visual Studio Code: https://code.visualstudio.com/download/

# Requirements

- PHP 8.0 ou superior.
- Extensões PHP necessárias habilitadas (JSON, OpenSSL, PDO, Mbstring, Tokenizer, XML).
- Extensões opcionais do PHP recomendadas (BCMath, Ctype, Fileinfo, GMP, Imagick, Intl, LDAP, Memcached, PCRE, Redis, SQLite3, Xdebug).
- Servidor web compatível (Apache, Nginx, etc.).
- Banco de dados compatível (MySQL, Postgres, SQLite, SQL Server, Oracle).
- Composer (gerenciador de pacotes para PHP).

# Manipulate

0 - Instale as dependências do composer atráves do comando:
- composer update

1 - Configure o .env de acordo com sua necessidade.

2 - Gere uma nova chave para o Laravel com o comando:
- php artisan key:generate

3 - Migre as tabelas para a base de dados com o comando:
- php artisan migrate --force

4 - Inicie o servidor atráves do comando:
- php artisan serve

5 - Acesse o projeto atráves do link:
- http://127.0.0.1:8000/
