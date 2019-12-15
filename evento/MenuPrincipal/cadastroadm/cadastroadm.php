<?php
    session_start();
    include_once("servidor.php");
    if (!empty($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastrar</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/loginmenu.css">
    <script language="JavaScript" type="text/javascript" src="MascaraValidacao.js"></script>
    <!-- <link rel="stylesheet" href="css/Style.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="ini">
        <div class="barra">
            <a href="../loginAdm/loginmenu.php" class="login">Login</a>
            <a href="#" class="evento">Criar Evento</a>
            <a href="#" class="">Sobre nós</a>
            <a href="#" class="">Duvidas</a>
            <a href="#" class="">Informações</a>
            <a href="../../../Index.html" class="logo" style="float: left"><h1>PageUp</h1></a>
        </div>
    </div>
    </div>
    
                       
<!--                     <div class="login-form">
                        <form action="cadastrar.php" method="GET">
                            <h2 class="text-center">Cadastrar</h2>   
                            <h4>
                              
                            </h4>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="nome" class="form-control" placeholder="Nome" required="required">
                                </div>

                            </div>
                               <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome" required="required">
                                </div>
                                
                            </div>




                             <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="cpf" placeholder="000.000.000-00" maxlength="11" class="form-control" onblur="return verificarCPF(this.value)"/>
                                </div>
                                
                            </div>


                            <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon3"></span>
                                        <input type="text" name="telefone" class="form-control" placeholder="telefone" required="required">
                                    </div>
                                </div>






                            <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon3"></span>
                                        <input type="text" name="login" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="senha"  class="form-control" placeholder="Password" required="required">
                                </div> 
                            </div>       
                            
                            <div class="form-group">
                                
                                <input type="submit" name="enviar" class="bt" value="Cadastrar"> </input>
                                <div>
                                    <p> Já tem cadastro?<a href="../loginAdm/loginmenu.php"> Login</a></p>
                                </div>
                            </div>
                        
                        </form>
                        
                        </div> -->




                    <form class="login-form" name="form1" method="GET" action="cadastrar.php">
                        <div class="container">
                         <h3>Cadastro do Usuario</h3>
                         
                          <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>Nome</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Nome" required="required">
                                    <!-- <input type="text" name="nome" class="form-control" placeholder="Nome"> -->
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Sobrenome</label>
                                    <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome" required="required">
                                    <!-- <input type="text" name="sobrenome" class="form-control" placeholder="Apenas Sobrenome"> -->
                                </div>                                

                            </div>
                            <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label >CPF</label>
                                        <input type="text" name="cpf" required="required" placeholder="000.000.000-00" maxlength="11" class="form-control" onblur="return verificarCPF(this.value)"/>
                                        
                                    </div>                                
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Email</label>
                                    <input type="text" name="login" class="form-control" required="required" placeholder="Email" required="required">
                                    <!-- <input type="email" name="login" class="form-control" id="inputEmail4" placeholder="name@example.com"> -->
                                </div>                                

                                    <div class="form-group col-md-4">
                                        <label>Telefone</label>
                                        <input type="text" name="telefone" required="required" class="form-control" placeholder="(00) 0000-00000">
                                    </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label >CEP</label>
                                    <input type="text" name="cep" required="required" class="form-control" placeholder="00.000-000" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Estado</label>
                                    <input type="text" name="estado" required="required" class="form-control" placeholder="Estado">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Cidade</label>
                                    <input type="text" name="cidade" required="required" class="form-control" placeholder="Cidade">
                                </div>                                
                                    
                            </div>
                            <h3>Formação</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label >Instituição</label>
                                    <input type="text" name="instituicao" required="required" class="form-control" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Curso</label>
                                    <input type="text" name="curso" required="required" class="form-control" placeholder="Curso">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Matricula</label>
                                    <input type="number" name="matricula" required="required" class="form-control" placeholder="Matricula">
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Bloco</label>
                                    <input type="text" name="bloco" required="required" class="form-control" placeholder="Bloco">                                    
                                </div>

                                                                                          
                            </div>
                            
                            <h3>Senha</h3>

                            <script type="text/javascript">
                                function validarSenha() {
                                    var senha1 = document.getElementById("senha");
                                    var senha2 = document.getElementById("senhaTmp");
                                    var s1 = senha1.value;
                                    var s2 = senha2.value;
                                    if (s1 == s2) {
                                        
                                    } else {
                                        alert("Senhas não batem. Verifique o valor digitado.");
                                        return false;
                                    }
                                }
                            </script>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                <label for="senha">Digite sua senha</label>
                                <input type="password" class="form-control" required="required" placeholder="Digite sua senha" name="senha" id="senha">
                                </div>
                            
                            
                                <div class="form-group col-md-4">
                                <label for="senhaTmp">Confirme sua senha</label>
                                <input type="password" name="senhaTmp" id="senhaTmp" required="required" class="form-control" placeholder="Confirme sua senha" onblur="return validarSenha()" />
                                </div>
                            </div>


                        <!--     <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="senha"  class="form-control" placeholder="Password" required="required">
                                </div> 
                            </div> -->
    
                                <div class="form-group col-md-2">
                                <input type="submit" name="enviar" class="bt" value="Cadastrar"> </input>
                            </div>
                            
                        </div>
                                        
                    </form>   
              


        </div>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>