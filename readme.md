## Recuperar dados da tela inicial do Youtube

A ideia do projeto é realizar a extração das informações dos videos presentes na tela inicial do Youtube.<br>
O retorno devera conter os dados dos videos extraidos.
<br><br>

## Para rodar o projeto

É necessario ter o PHP instalado em sua maquina e configurado nas variaveis de ambiente.<br>
Faça um git clone do projeto, depois utilize o comando "<strong>php -S localhost:5000</strong>" (sem as aspas "") no diretorio clonado para subir o servidor.<br>
Caso deseje utilizar seu proprio input, basta entrar no youtube, na tela inicial utilizar o control+a e control+c, criar um arquivo.txt no diretorio do projeto e dar um control+v.<br>
Depois é so passar o nome do arquivo.txt na função <strong>youtube_data("arquivo.txt")</strong>.
<br><br>

## Tecnologias utilizadas

Nesse projeto foi utilizado PHP, com as funções fopen e fread para a leitura do arquivo, e funções regex para a busca dos dados.