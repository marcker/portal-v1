<?php

$variables=(strtolower($_SERVER['REQUEST_METHOD'])== 'GET') ? $_GET : $_POST;

foreach ($variables as $k=> $v)
  $$k=$v;

$palavra = "V�deos";
$tabela1 = "tb_videos";
$tabela2 = $tabela1."_categorias";
$file = "video";
$form1 = "BUSCA";

if ($FormatoForm == "H") { ?>

<form action="/videos" method="POST" name="BUSCA">
  <input name="pg" type="hidden" value="ver_video" />
  <input name="acao" type="hidden" value="ver2" />
  <input name="page" type="hidden" value="" />
  <input name="key" type="text" />

  <select name="id_categoria">
    <option value="">Categoria</option>
<?php

$sql5 = mysql_query("SELECT * FROM $tabela2 WHERE status='S' order by nome");

while ($dados5 = mysql_fetch_array($sql5)) { ?>
    <option value='<?=$dados5[id]?>' <?=($id_categoria == $dados5[id]) ? "selected" : "";?>>
      <?=$dados5[nome]?>
    </option>
<?php }?>
  </select>
  <input type="submit" class="input" value="Pesquisar" />
</form>

<?php }

if ($FormatoForm == "V") { ?>

<form action="/videos" method="POST" name="<?=$form1?>">
  <input name="pg" type="hidden" value="ver_video" />
  <input name="acao" type="hidden" value="ver2" />
  <input name="page" type="hidden" value="<?=$_GET[page]?>" />
  <input name="key" type="text" />
  <select name="id_categoria">
    <option value="">Categoria</option>

<?php

$sql5 = mysql_query("SELECT * FROM $tabela2 WHERE status='S' order by nome");

while ($dados5 = mysql_fetch_array($sql5)) { ?>
  <option value='<?=$dados5[id]?>' <?=($id_categoria==$dados5[id]) ? "selected" : "";?>>
    <?=$dados5[nome]?>
  </option>

<?php } ?>
  </select>
  <input type="submit" value="Pesquisar" />
</form>
<?php } ?>