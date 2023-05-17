# Information

**Disciplina:** Códigos de Alta Perfomance Web

**Integrantes:** [Lucas Campolim](https://github.com/lucascampolimm) e [Tharlis David](https://github.com/tharlisdavid)

**Tema:** Sistema de Quiz

# Requirements

- PHP 8.0
- Microsoft Visual C++ 2015-2022 Redistributable (x86)
- Microsoft Visual C++ 2015-2022 Redistributable (x64)
- Microsoft Visual C++ 2013 Redistributable (x86)
- Microsoft Visual C++ 2013 Redistributable (x64)

# Support Links

- XAMPP: https://www.apachefriends.org/pt_br/index.html
- Composer: https://getcomposer.org/
- Laravel: https://laravel.com/
- Node.js: https://nodejs.org/pt-br/
- Visual Studio Code: https://code.visualstudio.com/
- Visual C++ Redistributable: https://learn.microsoft.com/pt-br/cpp/windows/latest-supported-vc-redist/

# Manipulate

0 - Execute o script start-xampp para iniciar o serviço Apache e MySQL.
- .\start-xampp.ps1

1 - Execute o script create-database para criar um usuário no servidor do MySQL com privilégios necessários e criar a base de dados com a codificação correta.
- .\create-database.ps1

2 - Configure o .env.

3 - Execute o script start-laravel para instalar as dependências do projeto, gerar nova chave para o Laravel, migrar as tabelas para base de dados e iniciar o servidor.
- .\start-laravel.ps1

4 - Acesse o projeto atráves do localhost:
- http://127.0.0.1:8000/
