# login-php

Projeto de estudos para desenvolver o conhecimento em PHP com ligação a um Banco de Dados Relacional (MySQL).

## 📌 Descrição
Este projeto consiste em um sistema de login simples, onde usuários podem se cadastrar e acessar uma área restrita. O sistema utiliza PHP para processamento no servidor e MySQL para armazenamento de credenciais.

## 🏗️ Estrutura do Projeto

- **`index.php`** - Página inicial com formulário de login.
- **`cadastro.php`** - Página com formulário para cadastro de novos usuários.
- **`cadastrar.php`** - Script responsável por processar os cadastros e armazenar os dados no banco.
- **`config.php`** - Arquivo de configuração do banco de dados.
- **`site.php`** - Pode conter configurações gerais do site.
- **`style.css`** - Folha de estilos para a interface da aplicação.

## 🗄️ Configuração do Banco de Dados

### 1 - Criar o Banco de Dados
Utilize os seguintes comandos SQL para criar o banco de dados e a tabela de usuários:

```sql
CREATE DATABASE formularioteste;

USE formularioteste;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL
);
```

## 🚀 Como Executar o Projeto

1. **Clonar o repositório**
   ```sh
   git clone https://github.com/jonathanmenezesm/login-php.git
   ```

2. **Configurar o banco de dados**
   - Crie o banco e a tabela conforme os comandos SQL acima.
   - Edite o arquivo `config.php` e insira suas credenciais do MySQL.

3. **Rodar o projeto em um servidor local**
   - Utilize o XAMPP, WAMP ou um servidor PHP integrado.
   ```sh
   php -S localhost:8000
   ```
   Acesse no navegador: `http://localhost:8000`

## 🛠️ Tecnologias Utilizadas
- PHP
- MySQL
- HTML
- CSS

## 📌 Melhorias Futuras
- Implementação de hash seguro para senhas.
- Validação de entrada de dados.
- Integração com autenticação via tokens.

---
📌 *Projeto desenvolvido para fins de aprendizado.*

