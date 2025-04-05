<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Atualização</title>
</head>

<body style="margin:0 auto; background:url(imagens/camboriu.jpg) fixed no-repeat;">
<center>
<div style="width:1000px; background:url(imagens/fundo_titulo.png);" action="atualizar.php" method="post">
Imagem Pequena:<br>
<textarea onclick="this.select();" onMouseOver="this.select();" name="" cols="100" rows="10">

<img src="imagens/slider/<?php echo "". $_POST["foto_p"];?>.jpg" alt="temp-thumb" width="50" height="41" border="0" class="nav-tumb">

</textarea><br>
<br>
Warper:<br>
<textarea onclick="this.select();" onMouseOver="this.select();" name="" cols="100" rows="10">

<div class="wrapper">

<a href="<?php echo "". $_POST["link"];?>" target="_blank">

<img src="imagens/slider/<?php echo "". $_POST["foto_g"];?>.jpg" width="338" height="276" border="0">

</a>

<div class="photo-meta-data">

<h1>

<strong>

<?php echo "". $_POST["area"];?>

</strong>

</h1>

<?php echo "". $_POST["titulo"];?>

</div>

</div>

</textarea><br>
<br>
RSS:<br>
<textarea onclick="this.select();" onMouseOver="this.select();" name="" cols="100" rows="10">

<item>

<title>

<?php echo "". $_POST["titulo"];?>

</title>

<link>

<?php echo "". $_POST["link"];?>

</link>

<pubDate><?php echo $msg = "".date(DATE_RFC822); ?></pubDate>

<dc:creator>

Caio Loureiro

</dc:creator>

<description>

<![CDATA[

<a href="<?php echo "". $_POST["link"];?>" target="_blank">

<img src="http://www.educacao.cidadedecamboriu.sc.gov.br/imagens/slider/<?php echo "". $_POST["foto_g"];?>.jpg" width="338" height="276" border="0">

</a>

<br />

<br />

<?php echo "". $_POST["leading"];?>

]]>

</description>

<guid isPermaLink="false"><?php echo "". $_POST["guid"];?></guid>

</item>

</textarea><br>
<br>
Móvel e Touch:<br>
<textarea onclick="this.select();" onMouseOver="this.select();" name="" cols="100" rows="10">

<div id=celula>

<a href="<?php echo "". $_POST["link"];?>">

<table><tr><td>

<img src="imagens/slider/<?php echo "". $_POST["foto_p"];?>.jpg"width="50" height="41" border="0">

</td><td><font size="-2">

<?php echo "". $_POST["titulo"];?>

</font></td></tr></table>

</a>

</div>

</textarea><br>
<br>
</div>
</center>
</body>
</html>