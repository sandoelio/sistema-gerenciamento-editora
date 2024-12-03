# Sistema de gerenciamento para editora

## 📋 Sobre o Projeto

Este é um **CRUD (Create, Read, Update, Delete)** desenvolvido com **Laravel** para gerenciar dados de uma editora. O sistema permite cadastrar, listar, editar e excluir informações relacionadas a livros, autores, e outros dados essenciais para o gerenciamento de uma editora.

O projeto foi estruturado para ser modular e escalável, utilizando **Laravel** como base para backend e as boas práticas do framework.

## 🌟 Por que Laravel?

O Laravel é uma das ferramentas mais poderosas e flexíveis para desenvolver sistemas modernos, escaláveis e com ótimas práticas. Este projeto foi pensado para explorar o melhor do framework, desde sua estrutura robusta até os recursos como validações, Blade e Eloquent ORM.

---

## ✨ Funcionalidades

- **Gerenciamento de Livros:**
  - Cadastro, edição, exclusão e listagem de livros.
- **Gerenciamento de Autores:**
  - Adição e vinculação de autores aos livros.
- **Validação de Dados:**
  - Utiliza validações do Laravel para garantir a integridade das informações.
- **Design Simples e Funcional:**
  - Interface intuitiva para facilitar o uso.

---

## 🛠️ Tecnologias Utilizadas

- **Laravel 10:** Framework PHP para o backend.
- **MySQL:** Banco de dados para armazenamento de informações.
- **Blade:** Sistema de templates para renderização de páginas.
- **PHP 8+:** Linguagem principal.
- **Docker:** Para execução e gerenciamento do ambiente de desenvolvimento.
- **Composer:** Gerenciador de dependências PHP.

---
# 🚀 Como Executar o Projeto

## Pré-requisitos
* PHP 8+
* Composer
* MySQL (ou qualquer banco de dados compatível com Laravel)
* Servidor local (como Laragon, XAMPP, ou Docker)
  
---
## Passo a Passo
1. Clone o repositório:
   ```
     git clone https://github.com/sandoelio/sistema-gerenciamento-editora.git
   ```
2. Instale as dependências do Laravel:
   ```
    composer install
   ```
3. Configure o arquivo .env:
   ```
   cp .env.example .env
   ```
4. Atualize as informações do banco de dados:
   ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=crud_editora
    DB_USERNAME=root
    DB_PASSWORD=senha
   ```
5. Gere a chave da aplicação:
   ```
   php artisan key:generate
   ```
6. Execute as migrations para criar as tabelas no banco de dados:
   ````
   php artisan migrate
   ````
7. Inicie o servidor local do Laravel:
   ```
   php artisan serve 
   ```
8. Acesse no navegador:
   ```
   http://localhost:8000
   ```
# 🚀 Como Executar o Projeto com Docker

## Pré-requisitos
* Docker instalado em sua máquina.
* Docker Compose configurado.
  
### 🐳 Estrutura do Docker Compose
O docker-compose.yml configura os seguintes serviços:

* app: Container para a aplicação Laravel.
* db: Container para o banco de dados MySQL.

**docker-compose.yml**

```
version: '3.8'

services:
  app:
    build:
      context: .
      dockerfile: Dockerfile
    container_name: laravel-app
    ports:
      - "8000:8000"
    volumes:
      - .:/var/www/html
    networks:
      - laravel-network
    depends_on:
      - db

  db:
    image: mysql:8.0
    container_name: laravel-db
    ports:
      - "3306:3306"
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: crud_editora
      MYSQL_USER: root
      MYSQL_PASSWORD: root
    networks:
      - laravel-network

networks:
  laravel-network:
    driver: bridge
```
**Dockerfile**
```
FROM php:8.1-fpm

# Instalações necessárias
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip curl \
    && docker-php-ext-install pdo pdo_mysql zip \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configuração do diretório de trabalho
WORKDIR /var/www/html
```
## Passo a Passo
Depois de executar os seguintes passos:
1. Clone o repositório:
2. Acesse o diretório do projeto:
3. Configure o arquivo .env:
4. Suba os containers com Docker Compose:
   ```
   docker-compose up -d
   ```
5. Instale as dependências do Laravel:
   ```
   docker exec -it app composer install
   ```
6. Execute as migrations para configurar o banco de dados:
   ```
   docker exec -it app php artisan migrate
   ```
7. Inicie o servidor Laravel:
```
docker exec -it app php artisan serve
```
# 📧 Contato
* Autor: Sandoelio Silva
* Email: sandoelio@hotmail.com
* LinkedIn: [Sandoelio Silva](https://www.linkedin.com/in/sandoelio-silva/)

   
