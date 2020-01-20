<?php   

    include_once("conexao.php");
    $html = '<table border=1';  
    $html .= '<thead>';
    $html .= '<tr>';
    $html .= '<th>Nome da Atividade</th>';
    $html .= '<th>Data da Atividade</th>';
    $html .= '<th>Horario da Atividade</th>';
    $html .= '<th>Carga Horaria</th>';
    $html .= '<th>Quantidade de vagas</th>';
    $html .= '<th>Valor da Atividade</th>';


    $html .= '</tr>';
    $html .= '</thead>';
    $html .= '<tbody>';

  
    
    $result_transacoes = "SELECT * FROM ta_atividade_test";
    $resultado_trasacoes = mysqli_query($conexao, $result_transacoes);
    while($row_transacoes = mysqli_fetch_assoc($resultado_trasacoes)){

        $html .= '<tr><td>'.$row_transacoes['nome'] . "</td>";
        $html .= '<td>'.$row_transacoes['dia'] . "</td>";
        $html .= '<td>'.$row_transacoes['horaini'] ."</td>";
        $html .= '<td>'.$row_transacoes['carga'] . "</td>";
        $html .= '<td>'.$row_transacoes['vagas'] . "</td>";
        $html .= '<td>'.$row_transacoes['valor'] . "</td></tr>";
     
    }
    $html .= '</tbody>';
    $html .= '</table';
   
    
    //referenciar o DomPDF com namespace
     use Dompdf\Dompdf;

    // // include autoloader
    require_once("dompdf/autoload.inc.php");

    // //Criando a Instancia
     $dompdf = new DOMPDF();
    
    // // Carrega seu HTML
    $dompdf->load_html('
            <h1 style="text-align: center;">Lista de Atividades do evento</h1>
            '. $html .'
         ');

    // //Renderizar o html
    $dompdf->render();

    // //Exibibir a página
    $dompdf->stream(
        "Atividade.pdf", 
        array(
            "Attachment" => false //Para realizar o download somente alterar para true
        )
    );
?>