# Urna-Virtual
Simulador de Urna Eletrônica

<?php
$digito = filter_input(INPUT_GET,'digito');
if (($digito === '13')||($digito === '24')||($digito === '45')){
$arquivo = "voto.txt";
$conteudo = $digito.",";
$abertura = fopen("$arquivo","w+");
$gravacao = fwrite($abertura,$conteudo);

$leitura = fread($abertura,filesize($arquivo));

fclose($abertura);

}

else if (($digito === "branco")){
$arquivo= "votobranco.txt";
$abertura=fopen("$arquivo","r");
$leitura=fread($abertura,filesize($arquivo));
fclose($abertura);
$abertura=fopen("$arquivo","w+");
$contbranco=$leitura+1;
$gravacao=  fwrite($abertura, $contbranco);
fclose($abertura);

}else{

$arquivo= "votonulo.txt";
$abertura=fopen("$arquivo","r");
$leitura=fread($abertura,filesize($arquivo));
fclose($abertura);
$abertura=fopen("$arquivo","w+");
$contnulo=$leitura+1;
$gravacao=  fwrite($abertura, $contnulo);
fclose($abertura);
}
?>

<html>
<head>
<title>Urna Virtual</title>
<meta charset="utf-8">
</head>
<body>
<center>
<form name="ur" method="get">
<input type="text" name="digito" placeholder="Número do canditado"  readonly style="height:100px; width:299px; border: solid black 2px; font-size:42px; text-align:center">
<table border="1">
<tr>
<td>
<input type="button" value="1" onclick="ur.digito.value +='1'"/>
<input type="button" value="2" onClick="ur.digito.value +='2'"/>
<input type="button" value="3" onClick="ur.digito.value +='3'"/>
</td>
</tr>
<tr>
<td>
<input type="button" value="4" onClick="ur.digito.value +='4'"/>
<input type="button" value="5" onClick="ur.digito.value +='5'"/>
<input type="button" value="6" onClick="ur.digito.value +='6'"/>
</td>
</tr>
<tr>
<td>
<input type="button" value="7" onClick="ur.digito.value +='7'"/>
<input type="button" value="8" onClick="ur.digito.value +='8'"/>
<input type="button" value="9" onClick="ur.digito.value +='9'"/>
</td>
</tr>
<tr>
<td>
<input type="button" value="0" onClick="ur.digito.value +='0'"/>
</td>
</tr>
<tr>
<td>
<input type="submit" value="Branco" onClick="ur.digito.value +='branco'" style="background-color: #FFFFF0"/>
<input type="reset" value="Corrige" />
<input type="submit" value="Confirma" />
</td>
</tr>
</center>
</body>
</html>
