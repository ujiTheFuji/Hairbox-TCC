<h1>Hairbox</h1>
<br/>
<p align="justify"> A Hairbox é um projeto desenvolvido de um website responsivo e-commerce voltado para produto para cabelo, no qual foi demonstrado no trabalho de conclusão de curso (TCC) da escola ETEC de Santa Isabel </p> <br/>

<h2> Requisitos para serem instalados </h2> <br/>
  <ol>
    <li> Composer </li>
    <li> NPM (node package module) </li>
    <li> XAMPP </li>
  </ol>
<h2> Demonstrando o projeto passo a passo </h2> <br/>
<ol>
  <li> Depois que tiver instalado todos os requisitos, crie um database chamado "hairbox" em seu SGBD </li>
   <li> Após o download do repositório, use o comando "npm install" para que possa instalar todos os módulos que o Laravel fornece (node_modules)</li>
  <li> Em seguida, no mesmo diretório do repositório, use os seguintes comandos: 
    <ul>
      <li> php artisan migrate </li>
      <li> php artisan db:seed </li>
      <li> php artisan storage:link </li>
      <li> php artisan serve </li>
    </ul>
  </li>
  <li> E finalmente, você poderá acessar o site na URL: "localhost:8000" </li>
</ol>
<br/>
<h2> Observações </h2>
<br/>
<ol>
  <li> Caso seu banco de dados tenha alguma senha para poder acessa-lo, terá que alterar no arquivo ".ENV" e colocar a senha em "DB_PASSWORD=" </li> 
  <li> No site há uma conta para a administração, no qual é acessado pelo mesmo local de login que os usúarios normais, segue os dados da conta administrador:
      <ul>
        <li><b>Email:</b>hairbox@gmail.com</li>
        <li><b>Senha:</b>fejuluma</li>
      </ul>
  </li>
</ol>
