# 🚀 Sistema de Gerenciamento de Projetos - Desafio ProbY  

Aplicação web desenvolvida em Laravel para o gerenciamento de projetos, permitindo a criação, edição e exclusão de registros de forma intuitiva. O sistema conta com autenticação de usuários, API REST, paginação e um design moderno utilizando Tailwind CSS/Bootstrap.  

## 📌 Tecnologias Utilizadas  
- **Back-end**: Laravel 10, PHP 8  
- **Banco de Dados**: MySQL/PostgreSQL  
- **Front-end**: Blade, Tailwind CSS / Bootstrap  
- **Autenticação**: Laravel Breeze / Laravel UI  
- **Outras Ferramentas**: Git, Seeders & Factories  

## 🔑 Funcionalidades  
✅ Cadastro e autenticação de usuários  
✅ CRUD completo de projetos (Criar, Ler, Atualizar, Deletar)  
✅ API REST para integração externa  
✅ Paginação na listagem de projetos  
✅ Seeders e Factories para popular o banco de dados  
✅ Interface responsiva e estilizada  

## 📂 Como Rodar o Projeto  
1. Clone este repositório:  
   ```sh  
   git clone https://github.com/ericdiasrosso/probY-challenge.git  
   cd probY-challenge  
   ```  
2. Instale as dependências:  
   ```sh  
   composer install  
   npm install && npm run dev  
   ```  
3. Configure o arquivo `.env` e gere a chave da aplicação:  
   ```sh  
   cp .env.example .env  
   php artisan key:generate  
   ```  
4. Configure o banco de dados e rode as migrações:  
   ```sh  
   php artisan migrate --seed  
   ```  
5. Inicie o servidor:  
   ```sh  
   php artisan serve  
   ```  
6. Acesse no navegador: **http://127.0.0.1:8000**  

