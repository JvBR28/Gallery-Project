# Projeto de Galeria de Imagens no WordPress

Uma galeria de imagens dinâmica para WordPress com integração ao banco de dados e interface moderna em Tailwind CSS.

## Índice
- [Visão Geral do Projeto](#visão-geral-do-projeto)
- [Demonstração](#demonstração)
- [Recursos](#recursos)
- [Instalação e Configuração](#instalação-e-configuração)
- [Como Usar](#como-usar)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)

## Visão Geral do Projeto

Este projeto é uma galeria de imagens dinâmica para WordPress, onde os usuários podem adicionar e visualizar imagens diretamente a partir da página principal. A página é construída com Tailwind CSS para uma interface moderna e responsiva e utiliza o banco de dados do WordPress para armazenamento das URLs das imagens.

### Objetivo: 
Oferecer uma solução simples para sites que necessitam de uma galeria de imagens customizável e fácil de usar.

## Demonstração

![Print 1 - Visualização Desktop](/.github/Preview1.png)
*Visualização desktop da galeria*

![Print 2 - Adicionando Nova Imagem](/.github/Preview2.png)
*Interface de adição de nova imagem*

![Print 3 - Visualização Tablet](/.github/Preview3.png)
*Visualização tablet da galeria*

![Print 4 - Visualização Mobile](/.github/Preview4.png)
*Visualização mobile da galeria*


## Recursos

- **Galeria Dinâmica**: Imagens são carregadas dinamicamente do banco de dados.
- **Responsividade Completa**: Layout que se adapta a diferentes tamanhos de tela (desktop, tablet e mobile).
- **Design Moderno**: Interface estilizada com Tailwind CSS.
- **Adição de Imagens com um Clique**: Função de inserção de novas imagens com botão e atualização automática.
- **Integração com Banco de Dados**: Imagens são salvas e recuperadas diretamente do banco de dados do WordPress.

## Instalação e Configuração

### Pré-requisitos:
Certifique-se de ter uma instalação WordPress e acesso ao banco de dados.

### Clonar o Repositório:
```bash
git clone https://github.com/JvBR28/Gallery-Project.git 
```

### Mover Arquivos

1. **Criar Tema**: Crie um tema chamado `gallery` na pasta `wp-content/themes` e mova o código do projeto para o diretório desse tema. Alternativamente, você pode pegar o conteúdo da pasta `wp-content` deste projeto e inseri-lo em uma instalação limpa do WordPress.

2. **Instalar Tailwind CSS**: Acesse o diretório do tema `gallery` no terminal bash e execute o seguinte comando para instalar o Tailwind CSS e suas dependências:

```bash
   npm install
```

### Banco de Dados
Crie uma tabela no banco de dados da sua instalação wordpress para armazenar as URLs das imagens (a tabela se chama `ga_gallery_images`). Você pode executar a seguinte query no seu banco de dados para criar a tabela:

```sql
CREATE TABLE ga_gallery_images (
    id INT NOT NULL AUTO_INCREMENT,
    url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);
```

### Configuração de Permissões
Certifique-se de que a pasta de uploads do WordPress tenha permissões adequadas para salvar novas imagens.

### Iniciar o Projeto
Para iniciar o servidor de desenvolvimento, use o seguinte comando:

```bash
php -S localhost:8080
```
Você pode substituir `8080` pela porta de sua preferência.

### Desenvolvimento com Tailwind CSS
Caso queira fazer ajustes no Tailwind CSS enquanto desenvolve, entre na pasta do tema (`gallery`) em um console bash e execute:

```bash
npm run dev
```

## Como Usar

### Acessar o Projeto
Abra a página onde a galeria foi configurada.

### Adicionar Imagens
Clique no botão "Adicionar Nova Imagem" para inserir uma imagem diretamente na galeria.

### Visualizar Imagens
A galeria exibe as imagens salvas no banco de dados em uma grade responsiva.

## Tecnologias Utilizadas

- **WordPress**: CMS base do projeto.
- **PHP**: Linguagem usada para desenvolver as funcionalidades da galeria.
- **MySQL**: Banco de dados para armazenar as URLs das imagens.
- **Tailwind CSS**: Framework CSS utilizado para estilização responsiva e moderna.
- **JavaScript (Fetch API)**: Utilizado para chamadas AJAX, permitindo a adição de novas imagens sem recarregar a página.