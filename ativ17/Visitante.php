<?php 

echo "<span style='color:red;'><h3><b>*****************************pagina visitante***********************</b><h3></span><br>";
session_name('VariavelNomeIdade');
session_start();

echo "Nome: ".$_SESSION['NomeAluno']."<br>";
echo "Idade: ".$_SESSION['IdadeAluno'];

//outra forma

$nome=$_SESSION['NomeAluno'];
$idade=$_SESSION['IdadeAluno'];
echo "<br><br>";
echo "Nome: ".$nome."<br>";
echo "Idade: ".$idade."<br>";

/* apagar sessao
unset($_SESSION['NomeAluno']);
unset($_SESSION['IdadeAluno']);

session_destroy();

*/
echo "<a href='Formulario.html'><h5><b>Voltar</b></h5></a>";
echo "<a href='Principal.php'><h5><b>Princial</b></h5></a>";
echo "<a href='PrincipalCom_Isset_e_Empty.php'><h5><b>Princial com isset</b></h5></a>";
 ?>