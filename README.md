# API Jump Park

Teste realizado para a empresa Jump Park, sobre o desenvolvimento de uma API REST com os métodos de listagem e criação. 
Framework escolhido foi o Laravel.

### Passo a Passo 

1. Criação do projeto e da configuração do banco de dados de acordo com o arquivo SQL enviado;
2. Criação das **Migrations** para as tabelas de `users` e `service_orders`;
3. Criação das **Models**: `User` e `ServiceOrder`, além de seus respectivos relacionamentos;
4. Ajustei e usei de a classe `DatabaseSeeder` para popular dados no banco por parte dos usuários;
5. Criação da **Controller** `ServiceOrderController`, e dos métodos *index* e *store*;
6. Criação das rotas da API, para os métodos *index* e *store*;
7. Criação das **Resources** das **Models** existentes com o intuito de manipular e mapear os dados para uso;
8. Criação do **FormRequest** para a validação dos dados externos no método *store* do `ServiceOrderController`, de acordo com as infomações passadas na tabela;
9. Adicionei a validação e a lógica necessária no método *store*, para o cadastro do serviço, e realizei testes via **Postman**;
10. Adicionei a lógica necessária ao método de listagem (*index*) para que existisse a paginação e o filtro por placas de veículos. Novamente testei no **Postman**, passando os filtros na URL.
11. Movi a lógica do **Controller** para uma classe **Repository**;
12. Revisei todos os arquivos alterados e criados no projeto, afim de verificar se as boas práticas estavam sendo seguidas;
13. Subi o projeto para o GitHub. 

*Feito por: Pedro Henrique Roratto*
