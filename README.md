# Cadastro de Clientes

Sistema web de cadastro de clientes desenvolvido como teste técnico para avaliação de conhecimentos em **Front-end, Back-end e Banco de Dados**.

## Objetivo

A aplicação permite realizar operações completas de CRUD (Create, Read, Update, Delete) em clientes, persistindo os dados em banco de dados MySQL.

## Tecnologias Utilizadas

### Front-end

* HTML5
* CSS3
* JavaScript

### Back-end

* PHP

### Banco de Dados

* MySQL

### Servidor Local

* XAMPP (Apache + MySQL)

---

# Funcionalidades

O sistema possui as seguintes operações:

## Inserir Cliente

Permite cadastrar um novo cliente com:

* Nome
* E-mail
* Telefone

Os dados são enviados para o backend via JavaScript utilizando `fetch()`.

---

## Listar Clientes

Ao abrir o sistema, os clientes cadastrados são carregados automaticamente do banco de dados e exibidos em tabela.

---

## Editar Cliente

Ao clicar em **Editar**, os dados são carregados novamente no formulário para alteração.

---

## Excluir Cliente

Ao clicar em **Excluir**, o sistema remove o cliente do banco de dados.

---

# Estrutura do Projeto

```bash
cadastro_clientes/
│
├── index.php
│
├── css/
│   └── style.css
│
├── js/
│   └── script.js
│
├── php/
│   ├── conexao.php
│   ├── inserir.php
│   ├── listar.php
│   ├── editar.php
│   └── excluir.php
│
└── database.sql
```

---

# Como o sistema funciona

O fluxo do sistema segue esta lógica:

```text
Usuário preenche formulário
↓
JavaScript captura os dados
↓
JavaScript envia para PHP via fetch()
↓
PHP processa os dados
↓
MySQL salva/consulta/altera/exclui
↓
PHP retorna resposta em JSON
↓
JavaScript atualiza a interface
```

---

# Explicação dos arquivos

## index.php

Responsável pela estrutura visual do sistema:

* Formulário de cadastro
* Tabela de listagem
* Integração com CSS e JavaScript

---

## style.css

Responsável pela estilização:

* Layout
* Botões
* Tabela
* Inputs

---

## script.js

Responsável pela lógica de interação:

* Captura envio do formulário
* Envia dados para o backend
* Atualiza tabela dinamicamente
* Controla edição
* Controla exclusão

Sem ele, o sistema não teria comportamento dinâmico.

---

## conexao.php

Responsável por conectar o sistema ao banco de dados MySQL.

---

## inserir.php

Insere novos clientes no banco.

---

## listar.php

Busca todos os clientes cadastrados.

---

## editar.php

Atualiza clientes existentes.

---

## excluir.php

Remove clientes do banco.

---

# Como executar o projeto em qualquer máquina

## Requisitos

Ter instalado:

* XAMPP
* PHP
* MySQL

---

## Passo 1 - Clonar o repositório

```bash
git clone https://github.com/CarlosEduardo-01/Cadastro-de-Cliente.git
```

---

## Passo 2 - Colocar dentro do htdocs

Mover para:

```bash
C:\xampp\htdocs\cadastro_clientes
```

Ou criar link simbólico:

```bash
mklink /D "C:\xampp\htdocs\cadastro_clientes" "CAMINHO_DO_PROJETO"
```

---

## Passo 3 - Iniciar XAMPP

Iniciar:

* Apache
* MySQL

---

## Passo 4 - Criar banco de dados

Abrir:

```text
http://localhost/phpmyadmin
```

Importar o arquivo:

```bash
database.sql
```

Isso criará:

* Banco `cadastro_clientes`
* Tabela `clientes`

---

## Passo 5 - Configurar conexão

No arquivo:

```bash
php/conexao.php
```

Configurar:

```php
$host
$usuario
$senha
$banco
$porta
```

de acordo com a máquina.

---

## Passo 6 - Executar

Abrir no navegador:

```text
http://localhost/cadastro_clientes/
```

---

# Observações

O sistema utiliza:

* AJAX com Fetch API
* PHP com Prepared Statements
* MySQL com persistência real
* Atualização dinâmica sem recarregar página

Esse projeto foi desenvolvido com foco em organização, separação de responsabilidades e boas práticas básicas de CRUD.

---


