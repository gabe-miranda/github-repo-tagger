## Desafio

Criar um sistema próprio para etiquetar repositórios do Github.

Utilizar a API oficial do Github para criar um sistema que possibilite a busca de repositórios por termos e a opção de que cada usuário crie e associe as suas próprias etiquetas (tags) a cada item dos resultados das pesquisas.

Vale ressaltar que cada usuário poderá visualizar apenas suas próprias etiquetas (tags).

## Requisitos
### Backend
- [x] PHP 7.x com Laravel 6+. (Usando PHP 7.4 com Laravel 7.x)
- [ ] Model
- [ ] View
- [ ] Controller
- [ ] Service (Regras de negócio)
- [ ] Factory
- [ ] Dependency Injection
- [ ] Hexagonal **(Opcional)**
- [ ] DDD **(Opcional)**

### Frontend
- [ ] HTML5
- [ ] CSS3
- [ ] Javascript
- [ ] Templates com Blade **(Opcional)**

## Especificações Técnicas
### Busca
- [ ] Utilizar a [API de busca do Github para Repositórios](https://docs.github.com/en/free-pro-team@latest/rest/reference/search#search-repositories).
- [ ] Permitir buscar repositórios por termo.
- [ ] Exibir resultados da busca de repositórios em formato de lista.
- [ ] Permitir que cada usuário logado possa associar as suas etiquetas (tags) aos repositórios listados.
- [ ] Permitir ordenar resultados por estrelas ou data (ASC / DESC).
- [ ] Utilizar paginação.
- [ ] Filtrar por linguagem de programação. **(Opcional)**
- [ ] Utilizar paginação infinita - Infinite Scroll. **(Opcional)**

### Usuário
- [ ] Desenvolver seu sistema de usuários (Não utilizar o do Github).
- [ ] Disponibilizar área de login.
- [ ] Permitir adicionar, remover, editar e listar etiquetas (tags) por usuário.
- [ ] Exibir relatório de repositórios por etiquetas (tags) do usuário.
- [ ] Permitir registrar usuário.
- [ ] Permitir editar dados do usuário. **(Opcional)**

### Dashboard **(Opcional)**
- [ ] Exibir top 30 buscas por mês.
- [ ] Exibir top 30 etiquetas (tags) com mais repositórios por mês.
- [ ] Exibir histograma de novos usuários por dia.

## Desenvolvimento/Publicação
- [x] Criar um repositório para o projeto no Github.
- [ ] Criar um README com instruções de execução do projeto, bem como informações que julgar relevantes.
- [ ] Utilizar Git Flow. **(Opcional)**
- [x] Utilizar Docker. **(Opcional)**
- [ ] Publicar em um servidor externo com url a aberta. **(Opcional)**


## Rodando o projeto
### Requisitos
``docker e docker-compose``

### Iniciando a aplicação
Na raiz do projeto, rodar o comando ``docker-compose up -d --build site``.

A aplicação vai estar disponível [aqui](localhost:8080).
