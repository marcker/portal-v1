<table width="630px" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td align="left"><img src="/images/setona.jpg" width="30" height="30" /><? $id = $_GET[id];

if($id=='')

$id = $url_parts[1];

	$sql5 = mysql_query("SELECT * FROM tb_galerias WHERE id='$id'");

	$dados5=mysql_fetch_array($sql5);

	$dt = explode("-", $dados5[data1]);

$data = "$dt[2]/$dt[1]/$dt[0]";



	?>

    <? 







	echo "<font size='6' color='#1E4B7A' face='Trebuchet MS'>$dados5[nome]</font>"; ?></td>

  </tr>

  <tr>

    <td><? echo "<font size='2' face='Trebuchet MS'>Local: $dados5[local]</font>"; ?><br/><? echo "<font size='2' face='Trebuchet MS'>Data: $data</font>"; ?><br/> 
    <br/>
	<? echo "<font size='2' face='Trebuchet MS'>$dados5[descricao]</font>"; ?> </td>


  </tr>

  <tr>

    <td>&nbsp;</td>

  </tr>

  <tr> 

    <td align="center">


  <div id="page">



			<div id="container">



		  <div id="gallery" class="content">



					<div id="controls" class="controls"></div>



					<div class="slideshow-container">



						<div id="loading" class="loader"></div>



						<div id="slideshow" class="slideshow"></div>



					</div>



				</div>



				<div id="thumbs" class="navigation">



					<ul class="thumbs noscript">



<?php 



$id = $_GET[id];

$id = trim($url_parts[1]);	

if($id=='')

$id = $url_parts[1];

$tabela1 = "tb_galerias";



$imgDir = "images/galerias/$id/"; 



$thumbDir = "images/galerias/$id/"; 



$images = scandir($imgDir);



$thumbs = scandir($thumbDir);



$ignore = array( ".", ".." );







for($i = 0; $i < count($images); $i++) {



    if(count($thumbs) > $i) {



        if(!in_array($images[$i], $ignore) && !in_array($thumbs[$i], $ignore)) {







 ?>



						<li>



           <?php echo "<a class='thumb' href=\"/img.php?img=images/galerias/$id/{$images[$i]}&x=490&y=364&corta=0\"><img src=\"/images/galerias/$id/{$thumbs[$i]}\" alt=\"\" width='45' height='40' /></a>"; ?></li>



                         <?php  



} 



}



}



?>



				  </ul>



				</div>



			</div>



		</div>



		<script type="text/javascript">



            // We only want these styles applied when javascript is enabled



            jQuery('div.navigation').css({'width' : '620px', 'float' : 'left', 'margin' : '0'});



            jQuery('div.content').css('display', 'block');







            // Initially set opacity on thumbs and add



            // additional styling for hover effect on thumbs



            var onMouseOutOpacity = 0.67;



            jQuery('#thumbs ul.thumbs li').css('opacity', onMouseOutOpacity)



                .hover(



                    function () {



                        jQuery(this).not('.selected').fadeTo('fast', 1.0);



                    }, 



                    function () {



                        jQuery(this).not('.selected').fadeTo('fast', onMouseOutOpacity);



                    }



                );











            jQuery(document).ready(function() {



                // Initialize Advanced Galleriffic Gallery



                var galleryAdv = jQuery('#gallery').galleriffic('#thumbs', {



                    delay:                  2000,



                    numThumbs:             22,



                    preloadAhead:           10,



                    enableTopPager:         true,



                    enableBottomPager:      true,



                    imageContainerSel:      '#slideshow',



                    controlsContainerSel:   '#controls',



                    captionContainerSel:    '#caption',



                    loadingContainerSel:    '#loading',



                    renderSSControls:       true,



                    renderNavControls:      true,



                    playLinkText:           'Iniciar Slideshow',



                    pauseLinkText:          'Pausar Slideshow',



                   prevLinkText:              '&lsaquo; Foto Anterior',



					nextLinkText:              'Pr�xima Foto &rsaquo;',



					nextPageLinkText:          'Pr�xima P�gina &rsaquo;',



					prevPageLinkText:          '&lsaquo; Voltar',



                    enableHistory:          true,



                    autoStart:              false,



                    onChange:               function(prevIndex, nextIndex) {



                        jQuery('#thumbs ul.thumbs').children()



                            .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()



                            .eq(nextIndex).fadeTo('fast', 1.0);



                    },



                    onTransitionOut:        function(callback) {



                        jQuery('#caption').fadeTo('fast', 0.0);



                        jQuery('#slideshow').fadeTo('fast', 0.0, callback);



                    },



                    onTransitionIn:         function() {



                        jQuery('#slideshow').fadeTo('fast', 1.0);



                        jQuery('#caption').fadeTo('fast', 1.0);



                    },



                    onPageTransitionOut:    function(callback) {



                        jQuery('#thumbs ul.thumbs').fadeTo('fast', 0.0, callback);



                    },



                    onPageTransitionIn:     function() {



                        jQuery('#thumbs ul.thumbs').fadeTo('fast', 1.0);



                    }



                });



            });



</script>



</td>

 </tr>

  

  <tr>

    <td valign="top"><?
	include "paginas/imprimir_eventos.php";
// FIM DOS BOTOES IMPRIMIR, INDICAR

?></td>

  </tr>

  <tr>

                <td height="32" valign="top" bgcolor="#F3F3F3" class="titulos_noticias" colspan="5">&nbsp; Outros Eventos</td>

  </tr>

  

  <tr>

    <td align="left">

<?

//$idcat = 1;

$largura = 68;

$altura = 58; 

$limite2 = 6;

$colunas = 2;

$largura_coluna = 305; 

$qt_letras = 40;

$qt_letras1 = 50;

$palavra = "Eventos";

$link_page = "evento";

$link_page2 = "?pg=fotos"; 

$img_thumb = "S";

$paginacao = "N";

$Cor1 = "#009749";

$Cor2 = "#000000"; 

$ordem = "order by data1 desc";

$acao = "outras";



include "paginas/galerias/exibe2.php";

?></td>

  </tr>

</table>
