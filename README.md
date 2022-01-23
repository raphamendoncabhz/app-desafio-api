
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

docker-compose up -d

## MIGRAÇÕES 
	Realizar as migrações
	Acesse o container com o seguinte comando: 

	Windows: 	winpty docker exec -it desafio-laravel-app bash
	Linux: 		docker exec -it desafio-laravel-app bash

	Execute o seguinte comando dentro do container:
    
	php artisan migrate:fresh --seed



## ENDPOINTS

Rota com o nome da API</br>
Método: GET</br>
http://localhost/api</br>


Listagem dos usuários </br>
Método: GET</br>
http://localhost/api/users</br>
Rota para recuperar dados para o login. (Não requer autorização)</br>


Rota de login para obtenção do token</br>
Método: POST</br>
HEADER: </br>
       Content Type  : application/json</br>
       Accept        : application/json</br>

Usuário admin:</br>
{
       "email": "admin@admin.com",
       "password": "admin"
}



Rota para cadastro de clientes</br>
Método: POST</br>
HEADER: </br>
       Content Type  : application/json</br>
       Accept        : application/json
TOKEN: (tocken obtido no login) informar na aba beaver   </br>    

http://localhost/api/v1/clientes </br>
{

       "name": "RAPHAEL OLIVEIRA",
       "phone": "(31) 9 8694-0042",
       "cpf": "05890466674"
}



Rota para Update de clientes</br>
Método: PUT</br>
HEADER: </br>
       Content Type  : application/json</br>
       Accept        : application/json</br>
TOKEN: (tocken obtido no login) informar na aba beaver  </br>
http://localhost/api/v1/clientes/2
{

       "name": "RAPHAEL MENDONCA DE OLIVEIRA",
       "phone": "(31) 9 0000-0000",
       "cpf": "0000000000"
}



Rota para Exclusão de um cliente</br>
Método: DELETE</br>
HEADER: </br>
       Content Type  : application/json</br>
       Accept        : application/json</br>
TOKEN: (tocken obtido no login) informar na aba beaver  </br>
http://localhost/api/v1/clientes/2 </br>
Selecione o Id do cliente</br>



Rota para exibição de um cliente específico</br>
http://localhost/api/v1/clientes/2</br>
(Alterar o id de cliente caso necessário)</br>
Método: GET</br>
HEADER: </br>
       Content Type  : application/json</br>
       Accept        : application/json</br>
TOKEN: (tocken obtido no login) informar na aba beaver  </br>


Rota para Listagem dos clientes</br>
http://localhost/api/v1/consulta/final-placa/5</br>
Informar o numero final da placa</br>
Método: GET</br>
HEADER: </br>
       Content Type  : application/json</br>
       Accept        : application/json</br>
TOKEN: (tocken obtido no login) informar na aba beaver  </br>



Rota para Listagem dos clientes</br>
http://localhost/api/v1/clientes</br>
Método: GET</br>
HEADER: </br>
       Content Type  : application/json</br>
       Accept        : application/json</br>
TOKEN: (tocken obtido no login) informar na aba beaver  </br>










