
## DESAFIO API 

O nosso desafio consiste na criação de um sistema de controle de clientes e suas respectivas placas de carro.
Você precisará construir uma base de dados com os seguintes campos:

	ID;
	Nome;
	Telefone;
	CPF;
	Placa do Carro. 

Para o gerenciamento dessa base, você construirá uma API REST contendo os seguintes endpoints:

	Método	Endpoint	Descrição
	POST	/cliente	Cadastro de novo cliente. 
	PUT	/cliente/{id}	Edição de um cliente já existente.
	DELETE	/cliente/{id}	Remoção de um cliente existente.
	GET	/cliente/{id}	Consulta de dados de um cliente.
	GET	/consulta/final-placa/{numero}	Consulta de todos os clientes cadastrados na base, onde o último número da placa do carro é igual ao informado.


## REGRAS 

Você deve construir o seu ambiente utilizando o docker e docker-compose (você pode utilizar uma receita de ambiente pronta, encontrada na internet);
Você deve utilizar um framework PHP de sua escolha;
Você será avaliado pela lógica e leitura do seu código, seguindo os princípios SOLID e PSR.

Após o final do desenvolvimento, crie um repositório público do GIT, hospede o seu código e nos envie o endereço do repositório.


## INSTRUÇÕES DE USO  

Clonar o desafio

git clone https://github.com/raphamendoncabhz/app-desafio-api.git desafio-raphael

cd desafio-raphael

Copiar arquivo .env  
	cp .env.example .env

composer install

php artisan key:generate

docker-compose up -d


Opcional (O banco já esta carregado com alguns registros)
	Realizar as migrações
	Acesse o container com o seguinte comando: 

	Windows: 	winpty docker exec -it shouts-laravel-app bash
	Linux: 		docker exec -it shouts-laravel-app bash

	Execute o seguinte comando dentro do container:
	php artisan migrate:fresh --seed
	(Elimina todas as tabelas e as constroi novamente alimentando com a Factorie do laravel.)



## ENDPOINTS

Rota com o nome da API
Método: GET
http://localhost/api


Listagem dos usuários 
Método: GET
http://localhost/api/users
Rota para recuperar dados para o login. (Não requer autorização)


Rota de login para obtenção do token
Método: POST
HEADER: 
       Content Type  : application/json
       Accept        : application/json

Usuário admin:
{
       "email": "admin@admin.com",
       "password": "admin"
}



Rota para cadastro de clientes
Método: POST
HEADER: 
       Content Type  : application/json
       Accept        : application/json
TOKEN: (tocken obtido no login) informar na aba beaver       

http://localhost/api/v1/clientes 
{

       "name": "RAPHAEL OLIVEIRA",
       "phone": "(31) 9 8694-0042",
       "cpf": "05890466674"
}



Rota para Update de clientes
Método: PUT
HEADER: 
       Content Type  : application/json
       Accept        : application/json
TOKEN: (tocken obtido no login) informar na aba beaver  
http://localhost/api/v1/clientes/2
{

       "name": "RAPHAEL MENDONCA DE OLIVEIRA",
       "phone": "(31) 9 8694-0042",
       "cpf": "05890466674"
}



Rota para Exclusão de um cliente
Método: DELETE
HEADER: 
       Content Type  : application/json
       Accept        : application/json
TOKEN: (tocken obtido no login) informar na aba beaver  
http://localhost/api/v1/clientes/2 
Selecione o Id do cliente



Rota para exibição de um cliente específico
http://localhost/api/v1/clientes/2
(Alterar o id de cliente caso necessário)
Método: GET
HEADER: 
       Content Type  : application/json
       Accept        : application/json
TOKEN: (tocken obtido no login) informar na aba beaver  


Rota para Listagem dos clientes
http://localhost/api/v1/consulta/final-placa/5
Informar o numero final da placa
Método: GET
HEADER: 
       Content Type  : application/json
       Accept        : application/json
TOKEN: (tocken obtido no login) informar na aba beaver  



Rota para Listagem dos clientes
http://localhost/api/v1/clientes
Método: GET
HEADER: 
       Content Type  : application/json
       Accept        : application/json
TOKEN: (tocken obtido no login) informar na aba beaver  












