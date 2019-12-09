function MascaraCPF(cpf){
        if(mascaraInteiro(cpf)==false){
                event.returnValue = false;
        }       
        return formataCampo(cpf, '000.000.000-00', event);
}


//arquivo funcoes_cpf.js
// validador CPF
function verificarCPF(c){
    var i;
    s = c;
    var c = s.substr(0,9);
    var dv = s.substr(9,2);
    var d1 = 0;
    var v = false;
 
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(10-i);
    }
    if (d1 == 0){
        alert("CPF Inválido")
        v = true;
        return false;
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(0) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }
 
    d1 *= 2;
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(11-i);
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(1) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }
    if (!v) {
        // alert(c + " CPF Válido")
    }
}











// function ValidarCPF(Objcpf) {
//         var Soma;
//         var Resto;
//         Soma = 0;
//         //strCPF = RetiraCaracteresInvalidos(strCPF,11);
//         if (strCPF == "00000000000")
//                 return false;
//         for (i=1; i<=9; i++)
//                 Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
//                 Resto = (Soma * 10) % 11;
// if ((Resto == 10) || (Resto == 11))
// Resto = 0;
// if (Resto != parseInt(strCPF.substring(9, 10)) )
// return false;
// Soma = 0;
// for (i = 1; i <= 10; i++)
// Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
// Resto = (Soma * 10) % 11;
// if ((Resto == 10) || (Resto == 11))
// Resto = 0;
// if (Resto != parseInt(strCPF.substring(10, 11) ) )
// return false;
// return true;
// }














 // function ValidarCPF($Objcpf){
 //                $cpf = preg_replace("/[^0-9]/","", $cpf);
 //                $digitoum = 0;
 //                $digitodois = 0;


 //                for($i = 0, $x = 10; $i <= 8; $i++, $x--){
 //                        $digitoum += $cpf[$i] * $x;

 //                }

 //                for($i = 0, $x = 11; $i <= 9; $i++, $x--){
 //                        if(str_repeat($i, 11)==$cpf){
 //                                return false;
 //                        }

 //                        $digitodois += $cpf[$i] * $x;

 //                }

 //                $calculoum = (($digitoum%11) < 2) ? 0 : 11-($digitoum%11);

 //                $calculodois = (($digitodois%11) < 2) ? 0 : 11-($digitodois%11);

 //                if($calculoum <> $cpf[9] || $calculodois <> $cpf[10]){
 //                        return false;
 //                }
 //                return true;
 //        }



// function ValidarCPF(Objcpf){






//         var cpf = Objcpf.value;
//         exp = /\.|\-/g
//         cpf = cpf.toString().replace( exp, "" ); 
//         var digitoDigitado = eval(cpf.charAt(9)+cpf.charAt(10));
//         var soma1=0, soma2=0;
//         var vlr =11;

//         for(i=0;i<9;i++){
//                 soma1+=eval(cpf.charAt(i)*(vlr-1));
//                 soma2+=eval(cpf.charAt(i)*vlr);
//                 vlr--;
//         }       
//         soma1 = (((soma1*10)%11)==10 ? 0:((soma1*10)%11));
//         soma2=(((soma2+(2*soma1))*10)%11);

//         var digitoGerado=(soma1*10)+soma2;
//         if(digitoGerado!=digitoDigitado)        
//                 alert('CPF Invalido!');         
// }