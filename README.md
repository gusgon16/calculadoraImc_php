#Calculadora de IMC com PHP

Este é um código HTML e PHP para criar uma calculadora de Índice de Massa Corporal (IMC). O IMC é uma medida que utiliza o peso e altura de uma pessoa para avaliar se ela está com o peso ideal, abaixo ou acima do recomendado.

Funcionamento
Ao abrir o arquivo HTML em um navegador, será exibido um formulário para inserir os dados do usuário: nome, peso em quilogramas e altura em centímetros. Ao clicar no botão "Enviar dados", os dados serão enviados para o arquivo PHP que irá calcular o IMC e salvar as informações em um arquivo CSV.

Após o envio dos dados, o usuário é redirecionado para uma página de sucesso, onde pode baixar o resultado em formato CSV ou calcular novamente.

Arquivos
index.html: arquivo HTML que contém o formulário de inserção de dados.
calculadora.php: arquivo PHP que realiza o cálculo do IMC e salva as informações em um arquivo CSV.
sucesso.html: arquivo HTML exibido após o envio dos dados com um link para baixar o resultado em formato CSV e um botão para calcular novamente.
style.css: arquivo CSS com as definições de estilo para o layout das páginas.
Funcionalidades adicionais
O código possui algumas funcionalidades adicionais, como:

A estilização do formulário e da página de sucesso com CSS.
A criação de um ID único para cada linha do arquivo CSV a partir do peso e altura do usuário.
A utilização da função file_put_contents() para salvar as informações em um arquivo CSV.
O uso da função header() para redirecionar o usuário para a página de sucesso após o envio dos dados.
