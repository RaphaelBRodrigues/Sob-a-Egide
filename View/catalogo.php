<?php

include("templates/nav.php");
if($_GET['status'] == 'fail'){
        //parâmetro passado pelo model usuário no momento do login
    echo "<script>alert('Falha ao realizar a compra')</script>";
    unset($_GET['status']); 
}
if($_GET['status'] == 'failDeletar'){
    //parâmetro passado pelo model usuário no momento do login
echo "<script>alert('Falha ao deletar o livro')</script>";
unset($_GET['status']); 
}
?>
<head>
    <meta charset='utf-8'> 


    <link rel="stylesheet" href="css/catalogo.css">
</head>
<body>
    


<center>

<a href="adicionarLivro.php"><button class='botao' id='adicionar'>Adicionar um novo livro</button></a>


<!--     
    <div class='fileira-bloco' >
        <center>
            <h1 class='fileira-titulo'>Fahrenheit 451  
             <br>    
            <small id='fi'>Ray Bradbury</small>
            <hr>
            </h1>
            <img src='https://images-na.ssl-images-amazon.com/images/I/71OFqSRFDgL.jpg' id='fileira-livro1' class='fileira-img'   alt="">

            <br><br>         
               <h2>R$50,00</h2>

              <button class='button'> <i class='material-icons'>shopping_cart</i> </button>

        </center>
    </div>

     -->

     <?php
     require '../Model/Livro.php';

     $livros = new Livro();
     $livros->Consultar();
     
     ?>
    
  
    



    </center>
</body>
<?php
include("templates/footer.php");
?>
