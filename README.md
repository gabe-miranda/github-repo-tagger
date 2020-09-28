## Desafio

Criar um sistema próprio para etiquetar repositórios do Github.

Utilizar a API oficial do Github para criar um sistema que possibilite a busca de repositórios por termos e a opção de que cada usuário crie e associe as suas próprias etiquetas (tags) a cada item dos resultados das pesquisas.

Vale ressaltar que cada usuário poderá visualizar apenas suas próprias etiquetas (tags).

## Requisitos
### Backend
- [x] PHP 7.x com Laravel 6+. (Usando PHP 7.4 com Laravel 7.x)
- [x] Model
- [x] View
- [x] Controller
- [x] Service (Regras de negócio) (Handlers)
- [ ] Factory
- [ ] Dependency Injection
- [ ] Hexagonal **(Opcional)**
- [ ] DDD **(Opcional)**

### Frontend
- [x] HTML5
- [x] CSS3
- [x] Javascript (Usando scaffolding do Vue)
- [x] Templates com Blade **(Opcional)**

## Especificações Técnicas
### Busca
- [x] Utilizar a [API de busca do Github para Repositórios](https://docs.github.com/en/free-pro-team@latest/rest/reference/search#search-repositories).
- [x] Permitir buscar repositórios por termo.
- [x] Exibir resultados da busca de repositórios em formato de lista.
- [ ] Permitir que cada usuário logado possa associar as suas etiquetas (tags) aos repositórios listados.
- [x] Permitir ordenar resultados por estrelas ou data (ASC / DESC).
- [ ] Utilizar paginação.
- [x] Filtrar por linguagem de programação. **(Opcional)**
- [ ] Utilizar paginação infinita - Infinite Scroll. **(Opcional)**

### Usuário
- [x] Desenvolver seu sistema de usuários (Não utilizar o do Github).
- [x] Disponibilizar área de login.
- [x] Permitir adicionar, remover, editar e listar etiquetas (tags) por usuário.
- [ ] Exibir relatório de repositórios por etiquetas (tags) do usuário.
- [x] Permitir registrar usuário.
- [ ] Permitir editar dados do usuário. **(Opcional)**

### Dashboard **(Opcional)**
- [ ] Exibir top 30 buscas por mês.
- [ ] Exibir top 30 etiquetas (tags) com mais repositórios por mês.
- [ ] Exibir histograma de novos usuários por dia.

## Desenvolvimento/Publicação
- [x] Criar um repositório para o projeto no Github.
- [x] Criar um README com instruções de execução do projeto, bem como informações que julgar relevantes.
- [ ] Utilizar Git Flow. **(Opcional)**
- [x] Utilizar Docker. **(Opcional)**
- [x] Publicar em um servidor externo com url a aberta. **(Opcional)** (http://142.93.126.193/)


## Rodando o projeto
### Requisitos
``docker e docker-compose``

### Iniciando a aplicação
Na raiz do projeto, rodar os seguintes comandos:
1. ``docker-compose up -d --build site``.
2. ``docker-compose run --rm composer install``.
3. ``cp src/.env.example src/.env``
4. ``docker-compose run --rm artisan migrate``.
5. ``docker-compose run --rm artisan key:generate``.

A aplicação vai estar disponível [aqui](http://localhost:8080).
