# Sistema de Gestão de Eventos

Sistema destinado para gestão de eventos divididos em 3 módulos: Atividades; Inscrições; Certificados; e em cada módulo contém pré-requisitos funcionais do Sistema. 

## Começando

Essas instruções fornecerão uma cópia do projeto em execução em sua máquina local para fins de desenvolvimento e teste. Consulte ao time de desenvolvimento para obter notas sobre como implantar o projeto em um sistema ativo.

## Pré-requisitos

### Módulo	de	Atividades

* Controle	atividades	por	data,	hora	e	sala
* Organize	a	programação	do	seu	evento
* Crie	cupons	de	desconto	para	as	atividades
* Determine	atividades	gratuitas	ou	pagas
* Emita	um	certificado	para	cada	atividade
* Defina	limite	de	atividades	por	participante
* Permita	condições	de	inscrição	nas	atividades
* Gerencie	o	choque	de	horário	dos	participantes
* Defina	carga	horária	para	cada	atividade

### Módulo	de	Inscrições

* Diferencie	os	valores	por	categoria
* Determine	valores	de	acordo	com	a	data
* Notifique	os	participantes	por	e-mail
* Faça	controle	de	vagas	por	tipo	de	inscrição
* Crie	cupons	de	desconto
* Limite	os	cupons	por	data	e	quantidade
* Defina	termos	e	condições	de	inscrição
* Visualize	os	pagamentos	em	tempo	real
* Gere	relatórios	personalizados	em	Excel/PDF
* Validação	de	e-mail	e	CPF (única inscrição)
* Definir	valor	das	inscrições

### Módulo	de	Certificados
* Gere	certificados com	qualidade	para	impressão
* Código	de	autenticidade	para	evitar	fraudes
* Os	participantes	podem	baixá-los	sozinhos
* Liberação	automática	após	o	evento
* Diferentes	certificados	para	diferentes	atividades
* Crie	certificados	para	comissão,	palestrantes	e	prêmios
* Certificados	mediante	à	pesquisa	de	satisfação (opcional)

#### Módulo	de	Credenciamento	(Opcional)

* Controle	de	entrega	de	material
* Sistema	de	busca	rápida	e	eficiente
* Opção	de	impressão	de	lista	de	presença
* Configurador	de	etiqueta	com	opção	de	escolha	de	tamanhos	e	campos
* Impressão	de	etiquetas	com	código	de	barras	e	QR-code,	unitária	ou	em	lote
* Controle	de	entrada	em	atividades	pagas	ou	com	acesso	restrito
* Impressão	de	recibo	e	certificado
* Emissão	de	etiquetas	para	identificação	de	visitantes	e	congressistas
* Acompanhamento	do	andamento	em	tempo	real

### Funcionalidades do sistema (product backlog)
  * 	Pagina de Login
  * 	Pagina com informações
  * 	Pagina para se inscrever no evento
  * 	Pagina para inscrições nas atividades já existentes
  * 	Pagina para tirar dúvidas (Basicamente enviar um e-mail para a organização do evento)
  *   Criação de menu
  
#####   Menu inicial para administradores (com direcionamento para os itens abaixo)
     
  * 	Pagina para status do evento
  * 	Pagina para inscrição de atividades
  * 	Pagina inscrever convidados
  * 	Página de inscrição de locais
  * 	Pagina para definição de cupons de desconto
  * 	Pagina de configuração (definir datas de inscrições, máximo de atividades por participante)


## Construído com 

* [BootsTrap](https://getbootstrap.com.br/docs/4.1/getting-started/introduction/) - O framework web usado
* [Maven](https://maven.apache.org/) - Gerenciamento de Dependências 
* [MySql](https://www.mysql.com) - Usado para armazenamento de dados  
* [Django Rest](https://www.django-rest-framework.org) - Framework usado para Back-end   

## Contribuindo

Por favor leia [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426)  para obter detalhes sobre nosso código de conduta e o processo para enviar solicitações pull para nós.

## Versionamento

nós usamos [GitHub](http://github.com/) para versionamento. Para as versões disponiveis,consulte [tags nesse repositório](https://github.com/junior-ux/projetoEngenharia). 

## Autores

* **Alcemir Rodrigues ** - *Product Owner* - [Perfil](https://github.com/alcemirsantos)
* **Fábbio Borges ** - *Product Owner* - [Perfil](https://github.com/fabbioSborges)
* **Narciso Júnior ** - *Scrum Master* - [Perfil](https://github.com/junior-ux)

Veja também a lista de [Desenvolvedores](https://github.com/junior-ux/projetoEngenharia/graphs/contributors) que participaram deste projeto.

## Agradecimentos 

* Equipe de Professores Da Uespi
* Youtube 
* Udemy
