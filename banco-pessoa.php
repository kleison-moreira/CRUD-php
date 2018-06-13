<?php


function inserePessoa($conexao, $nome, $email) {
    $query = "insert into pessoa (nome, email) values ('{$nome}','{$email}')";

    return mysqli_query($conexao, $query);
}

 function editaPessoa($conexao, $nome, $email, $id){

 	 mysqli_query($conexao,"UPDATE pessoa SET nome = '$nome', email= '$email'  WHERE id='$id'");

 	 return $conexao; 


 }

 function deletePessoa($conexao, $id){

 	mysqli_query($conexao,"DELETE FROM pessoa WHERE id='$id'");

 	return $conexao;



 }