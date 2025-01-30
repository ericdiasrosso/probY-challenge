Gerenciador de Projetos - ProbY Challenge





📌 Sobre o Projeto

Este sistema foi desenvolvido como parte do desafio técnico da ProbY, proporcionando uma plataforma para gerenciamento de projetos, incluindo funcionalidades como criação, edição, exclusão e visualização de projetos com paginação e filtragem de status.

🏗️ Arquitetura e Padrão Utilizado

O projeto segue a arquitetura MVC (Model-View-Controller), garantindo uma separação clara entre as camadas:

Modelos (app/Models): Contém as representações dos dados e regras de negócio.

Controladores (app/Http/Controllers): Manipulam as requisições HTTP e se comunicam com os modelos.

Views (resources/views): Responsáveis pela apresentação dos dados usando Blade templates.

📋 Tecnologias Utilizadas

Laravel 10 (Framework principal)

PHP 8.2 (Linguagem de programação)

MySQL 8 (Banco de dados relacional)

Blade Templates (Motor de templates do Laravel)

Tailwind CSS (Estilização do frontend)

🚀 Como Rodar o Projeto

📂 1. Clonar o Repositório

 git clone https://github.com/seu-usuario/proby-challenge.git
 cd proby-challenge

🔧 2. Instalar as Dependências

composer install
npm install

🔑 3. Configurar o Banco de Dados

Crie um banco de dados MySQL chamado proby_db.

Copie o arquivo .env.example para .env e edite as configurações:

DB_DATABASE=proby_db
DB_USERNAME=root
DB_PASSWORD=senha

🔄 4. Rodar as Migrações e Seeders

php artisan migrate --seed

Isso cria as tabelas e adiciona projetos de exemplo no banco.

⚡ 5. Iniciar o Servidor

php artisan serve --port=8080

O sistema estará acessível em http://127.0.0.1:8080

📌 Funcionalidades Implementadas

✅ Autenticação de Usuários ✅ Cadastro, edição e exclusão de projetos ✅ Listagem paginada ✅ Design responsivo utilizando Tailwind CSS ✅ Seeders para popular o banco de dados automaticamente

📜 Estrutura do Projeto

proby-challenge/
│── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── ProjectController.php
│   │   │   ├── AuthController.php
│   ├── Models/
│   │   ├── Project.php
│── database/
│   ├── migrations/
│   ├── seeders/
│   │   ├── ProjectSeeder.php
│── resources/
│   ├── views/
│   │   ├── projetos/
│   │   │   ├── index.blade.php
│   │   │   ├── create.blade.php
│   │   │   ├── edit.blade.php
│── routes/
│   ├── web.php
│── .env.example
│── composer.json
│── package.json
│── README.md

📝 Como Contribuir

Faça um fork do projeto

Crie uma branch: git checkout -b minha-feature

Faça suas alterações e commite: git commit -m 'Nova funcionalidade'

Envie para o repositório remoto: git push origin minha-feature

Abra um Pull Request

🏆 Contato

✉️ [Éric Rosso](mailto:ericdiasrosso@gmail.com)
💼 [Meu LinkedIn](https://www.linkedin.com/in/%C3%A9ric-d-62905a134/)

Desenvolvido por [Éric Rosso] 🚀

