# API Jump Park

Teste realizado para a empresa Jump Park, sobre o desenvolvimento de uma API REST com os métodos de listagem e criação

### Passo a Passo 

1. Criação do projeto e da configuração do banco de dados de acordo com o arquivo sql enviado;
2. Criação das migrations para as tabelas de users e service_orders;
3. Criação das Models User e ServiceOrder, e seus respectivos relacionamentos;
4. Ajustei e usei de o seeder DatabaseSeeder para a população no banco pela parte dos usuários;
5. Criação da Controller ServiceOrderController, e dos métodos index e store;
6. Criação das rotas da api, para os métodos index e store;
7. Criação das Resources das Models existentes, para a melhor manipulação dos dados;
8. Criação do Form Request para a validação dos dados no método store do meu controller, de acordo com as infomações passadas na tabela;
9. Adicionei a validação e a lógica necessária no meu método store, para o cadastro do serviço, e testei no Postman;
10. Adicionei a lógica necessária ao meu método de listagem (index) para que existisse a paginação e o filtro por placas de veículos. Novamente testei no Postman, passando os filtros na URL.
11. Movi a lógica do Controller para um Repository;
12. Revisei todos os arquivos alterados e criados no projeto, afim de verificar se as boas práticas estavam sendo seguidas;
13. Subi o projeto para o github. 
