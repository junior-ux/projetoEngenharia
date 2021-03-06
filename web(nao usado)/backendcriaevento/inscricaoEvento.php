<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Configuração do evento </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/configuraevento.css">
    
    <!-- <link rel="stylesheet" href="css/check.css"> -->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">


            <h1>PageUp Eventos</h1>
            <h2>Seu gerenciador seus eventos</h2>
            <p> "A gente não pensou duas vezes e optou pela Plataforma Gerenciador de Eventos, justamente por ela fazer todo o processo, desde o início do evento até a entrega de certificados. Foi um investimento que valeu a pena, pois é compatível com o
                que a plataforma entrega." </p>

        </div>
        <div class="main_content">
            <div class="header">


                <nav class=" menu">
                    <ul>
                        <li id=>
                            <a href="#">Criar Evento </a>
                        </li>
                        <li>
                            <a href="#">Meus Eventos</a>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-btn" href="#">Área do organizador</a>
                            <div class="dropdown-menu">
                                <a href="#">Área do participante</a> <a href="#">Área do Organizador</a> <a href="#">Área de Credenciamento</a>
                                <div class="nome">
                                    <li>
                                        <a href="#">(Nome do ADM)</a>
                                    </li>
                                    <li class="sair">

                                        <a href="index.html">Sair</a>
                                    </li>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>

                <!-- Formulario evento -->




            </div>
            <div class="evento">
                <div class="form-row">
                    <div class="form-group col-md-11 control-label">
                        <p class="help-block">
                            <h11>(*)</h11> Campo Obrigatório
                        </p>
                    </div>
                </div>

                <form name="inscricao" action="processamento.php" method="POST" action="">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="formGroupExampleInput">Titulo do Evento<h11>*</h11></label>
                            <input type="text"  name="titulo" class="form-control" id="formGroupExampleInput" placeholder="Evento">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputEmail4">Link do evento<h11>*</h11></label>
                            <h6>(https://pageupeventos.com/435366)</h6>
                            <input type="link" name="link" class="form-control" id="inputEmail4" placeholder="Link">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2.1">
                            <label for="exampleFormControlSelect1">Inicio do Evento<h11>*</h11></label>

                            <input id="dtnasc" name="dataI" placeholder="DD/MM/AAAA" class="form-control input-md" required="required" type="date" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </div>

                        <div class="form-group col-md-1.5">
                            <label for="exampleFormControlSelect1">Horas<h11>*</h11></label>
                            <input id="dtnasc" type ="time" name="horaI" placeholder="00:00" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </div>

                        <div class="form-group col-md-2.1">
                            <label for="exampleFormControlSelect1">Fim do evento<h11>*</h11></label>
                            <input id="dtnasc" name="dataT" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="date" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </div>

                        <div class="form-group col-md-1.5">
                            <label for="exampleFormControlSelect1">Horas<h11>*</h11></label>
                            <input id="dtnasc" type="time" name="hotaT" placeholder="00:00" class="form-control input-md" required="required" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </div>

                    </div>

                   
                        
                    <div class="form-row">
                    <div class="form-group col-md-2">
                            <label for="exampleFormControlSelect1">Cep<h11>*</h11></label>

                            <input id="cep" name="cep" placeholder="00000-000" class="form-control input-md" required="required" type="cep" maxlength="15" >
                        </div>

                        <div class="form-group col-md-6">
                            <label for="formGroupExampleInput">Rua<h11>*</h11></label>
                            <input type="text"  name="local" class="form-control" id="formGroupExampleInput" placeholder="">
                        </div>
                        
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="formGroupExampleInput">Estado</label>
                            <div class="col-md-">
                                <select required id="Estado" name="estado" class="form-control">
                                        <option value="">Selecione</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espirito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                      </select>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleFormControlSelect1">Cidade</label>
                            <input id="dtnasc" name="cidade" placeholder="" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="exampleFormControlSelect1">Responsavel</label>
                            <input id="dtnasc" name="responsavel" placeholder="" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Telefone</label>
                            <input type="numero"  name="telefone"  placeholder="(xx) xxxxx-xxxx" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        </div>



                    </div>

                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="exampleFormControlTextarea1">Descrição do evento</label>
                            <textarea class="form-control"  name="descricao" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>


                    </div>

               
                    <div class="form-group">

                        
                    </div>
                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Carga Horaria</label>
                            <input type="numero"  name="cargaHoraria" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">total participante</label>
                            <input type="numero"  name="totalParticipante" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="formGroupExampleInput">Tipo do evento</label>
                            <div class="col-md-">
                                <select required id="tipoEvento" name="tipoEvento" class="form-control">
                                        <option value="">Selecione</option>
                                        <option value="AC">Acadêmico-Seminário/Jornada</option>
                                        <option value="AL">Científico-Congresso/Simpósio</option>
                                        <option value="AP">Corporativo-Empresarial</option>
                                        <option value="AP">Curso-Workshop/Palestra</option>
                                        <option value="AP">Entretenimento-Show/Festa</option>
                                        <option value="AP">Outro</option>
                                        
                                        
                                      </select>
                            </div>
                        </div>
                    </div>

                    <button class="bt bt-vd" type= "submit" name="excluir" onclick="alert('Deseja excluir permanentemente esse evento ?')">Excluir evento
        </button>
        <button class="bt bt-vd" type= "submit" name= "enviar" onclick="alert('Informações salvas com sucesso !')">Salvar informações 
        </button>

            </div>
            </form>
        </div>
    </div>
    </div>
    </form>
    </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>