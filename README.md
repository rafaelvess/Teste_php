# Rafael Car 🚗

### Descrição

O Rafael Car é um sistema de gestão de carros projetado para facilitar o cadastro, edição e monitoramento de informações sobre veículos. Com uma interface intuitiva, os usuários podem gerenciar dados de carros, acessar relatórios visuais e obter insights sobre os valores e características dos veículos cadastrados.  

---

## 🎯 Funcionalidades Principais

### 1. Entrar   

---

### 2. Cadastro de Carros  
- Descrição: Após acessar o sistema, o usuário é levado diretamente para a página de Cadastro de Carros.
- Funcionalidades:
  - Adicionar novos veículos com detalhes como:
    - Modelo.
    - Marca.
    - Ano.
    - Preço.
    - Outras informações relevantes.
  - Interface limpa e intuitiva para facilitar o processo de cadastro.
  - Validações para garantir que os dados inseridos sejam consistentes.

---

### 3. Tabela de Carros
- Descrição: A seção Tabela de Carros exibe todos os veículos cadastrados de forma organizada e detalhada.
- Funcionalidades:
  - Listagem de todos os carros cadastrados com as informações principais.
  - Ferramenta de busca para localizar veículos específicos rapidamente.
  - Opção de edição para atualizar informações de veículos existentes.
  - Possibilidade de exclusão de carros do sistema, com confirmação de ação.

---

### 4. Gráficos de Carros  
- Descrição: A seção Gráficos de Carros fornece uma visão analítica e visual sobre os dados cadastrados.
- Funcionalidades:
  - Visualizar gráficos relacionados ao preço, quantidade e outros dados estatísticos dos veículos.
  - Filtros interativos para análise específica:
    - Comparação de preços por marcas.
    - Quantidade de veículos por ano.
    - Outras métricas relevantes.
  - Design interativo para facilitar a compreensão e análise dos dados.

---

## 📂 Estrutura do Projeto

- **/Entrar**: Contém a lógica de autenticação do usuário.
- **/cadastro**: Gerencia as operações de cadastro e validação de novos carros.
- **/tabela**: Exibe a listagem de veículos e permite edição e exclusão.
- **/graficos**: Implementa os gráficos interativos para visualização de dados.

---

## 🚀 Como Configurar o Projeto

### Pré-requisitos  
1. **Servidor Local**: Instale o [XAMPP](https://www.apachefriends.org/) ou outro servidor PHP.  
2. **Banco de Dados**: Certifique-se de que o MySQL está ativo.

### Configuração do Banco de Dados  
1. Crie um banco de dados chamado rafaelcarros.  
2. Importe o arquivo rafaelcarros.sql (localizado no diretório raiz do projeto) para configurar as tabelas necessárias.  

### Configuração do Projeto  
1. Clone o repositório:  
   bash
   git clone https://github.com/rafaelvess.
   
2. Instale as dependências (se aplicável).  
3. Configure as credenciais do banco de dados no arquivo config.php:  
   php
   $host = 'localhost';
   $dbname = 'rafael_car';
   $username = 'seu_usuario';
   $password = 'sua_senha';
   
4. Inicie o servidor local e acesse o sistema pelo navegador em http://localhost/loja-de-carros-Rafael.

---

## 🛠 Tecnologias Utilizadas

- **Frontend**:
  - HTML5, CSS3, Bootstrap.
- **Backend**:
  - PHP com PDO para interações com o banco de dados.
- **Banco de Dados**:
  - MySQL.

---

*Contribuições são bem-vindas!*  
Se você tiver ideias ou melhorias, sinta-se à vontade para abrir uma issue ou enviar um pull request.  

---


