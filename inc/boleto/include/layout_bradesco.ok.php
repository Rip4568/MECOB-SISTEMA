<style type="text/css">
<!--	
	.cp {  
		font-family: Arial, Helvetica, sans-serif;
		font-size: 11px;
		color: #000;
		font-weight:normal;
	};
	
	.ti {  
		font-family: Arial, Helvetica, sans-serif;
		font-size: 9px;
		color: #000;
		font-weight:normal;
	};
	
	.ld {  
		font-family: Arial, Helvetica, sans-serif;
		font-size: 15px;
		color: #000;
		font-weight:normal;
	};
	
	.ct {  
		font-family: Arial, Helvetica, sans-serif;
		font-size: 9px;
		color: #000033;
		font-weight:normal;
	};
	
	.cn {  
		font-family: Arial, Helvetica, sans-serif;
		font-size: 20px;
		color: #000000;
		font-weight:bold;
	};
	
	table, td
	{
		padding:0;
	}
	
-->
</style>
<page backtop="7mm" backbottom="7mm" backleft="11mm" backright="10mm" style="font-size: 9px; font-weight: normal; color:#000033;">
	<table width="704" cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td valign="top" class="cp">
				<div align="center">
					Instruções de Impressão
				</div>
			</td>
		</tr>
		<tr>
			<td valign="top" class="cp">
				<div align="left" class="cabecalho">
					<ul>
						<li>
						Imprima em impressora jato de tinta (ink jet) ou laser em qualidade normal ou alta (Não use modo econômico).
						</li>
						<br>
						<li>Utilize folha A4 (210 x 297 mm) ou Carta (216 x 279 mm) e margens mínimas à esquerda e à direita do formulário.
						</li>
						<br>
						<li>Corte na linha indicada. Não rasure, risque, fure ou dobre a região onde se encontra o código de barras.
						</li>
						<br>
						<li>Caso não apareça o código de barras no final, clique em F5 para atualizar esta tela.
						</li>
						<br>
						<li>
						Caso tenha problemas ao imprimir, copie a seqüencia numérica abaixo e pague no caixa eletrônico ou no internet banking:<br><br>
						<span style="font-size: 13px; font-weight: normal; color:#000033; padding:10px;">
						<div>Linha Digitável:  <?php echo $dadosboleto["linha_digitavel"]?></div>
						<div>Valor:   R$ <?php echo $dadosboleto["valor_boleto"]?></div>
						</span>
						</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<br />
    <table width=666 cellspacing=5 cellpadding=0 border=0 align=Default style="font-size: 16px;" >
  <tr>
    <td width=41><IMG SRC="<?php echo $link;?>/imagens/logo_sm.jpg"></td>
    <td class=ti width=455><?php echo $dadosboleto["identificacao"]; ?> <?php echo isset($dadosboleto["cpf_cnpj"]) ? "<br>".$dadosboleto["cpf_cnpj"] : '' ?><br>
      <?php echo $dadosboleto["endereco"]; ?><br>
      <?php echo $dadosboleto["cidade_uf"]; ?><br></td>
    <td align=RIGHT width=150 class=ti>&nbsp;</td>
  </tr>
</table>
	<br />
	<table cellspacing=0 cellpadding=0 border=0>
		<tr>
			<td width=140 class=cp><img src="imagens/logobradesco.jpg" alt="Bradesco" width="150" height="27"></td>
			<td width=3 valign=bottom><img height=22 src=imagens/3.png width=2></td>
			<td width=65 valign=bottom align=left>
				<span align="center" style="font-size: 20px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color:#000;">
					<?php echo $dadosboleto["codigo_banco_com_dv"]; ?>
				</span>
			</td>
			<td width=3 valign=bottom><img height=22 src=imagens/3.png width=2></td>
			<td width=450 class=ld align=right valign=bottom>
				<span style="font-size: 15px; font-weight: normal; font-weight: normal; font-family: Helvetica, Arial, sans-serif; color:#000;">
					<?php echo $dadosboleto["linha_digitavel"]?>
				</span>
			</td>
		</tr>
		<tr><td colspan=5><img height=1 src=imagens/2.png width=666></td></tr>
	</table>
	<table cellspacing=0 cellpadding=0 border=0>
		<tr>
			<td width=7 height=1><img src=imagens/1.png width=7 height=1></td>
			<td width=112><img src=imagens/1.png width=112 height=1></td>
			<td width=7><img src=imagens/1.png width=7 height=1></td>
			<td width=113><img src=imagens/1.png width=113 height=1></td>
			<td width=7><img src=imagens/1.png width=7 height=1></td>
			<td width=53><img src=imagens/1.png width=53 height=1></td>
			<td width=7><img src=imagens/1.png width=7 height=1></td>
			<td width=53><img src=imagens/1.png width=53 height=1></td>
			<td width=7><img src=imagens/1.png width=7 height=1></td>
			<td width=113><img src=imagens/1.png width=113 height=1></td>
			<td width=7><img src=imagens/1.png width=7 height=1></td>
			<td width=180><img src=imagens/1.png width=180 height=1></td>
		</tr>
		<tr>
			<td height=13><img src=imagens/1.png width=1 height=13></td>
			<td colspan=7 class=ct>Beneficiário</td>
			<td><img src=imagens/1.png width=1 height=13></td>

			<td class=ct>Agência/Código do Cedente</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Vencimento</td>
		</tr>
		<tr>
			<td height=12><img src=imagens/1.png width=1 height=25></td>
			<td colspan=7 class=cp><?php echo $dadosboleto["cedente"]?></td>
			<td><img src=imagens/1.png width=1 height=25></td>
			<td class=cp><?php echo $dadosboleto["agencia_codigo"]?></td>
			<td><img src=imagens/1.png width=1 height=25></td>
			<td class=cp align=right><?php echo $dadosboleto["data_vencimento"]?></td>
		</tr>
		<tr><td colspan=12 height=1><img src=imagens/2.png width=666 height=1></td></tr>
		<tr>
			<td height=13><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>CPF/CNPJ</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Número do documento</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Espécie</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Quantidade</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Valor</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Valor documento</td>
		</tr>
		<tr>
			<td height=13><img src=imagens/1.png width=1 height=13></td>
			<td class=cp><?php echo $dadosboleto["cpf_cnpj"]?></td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=cp><?php echo $dadosboleto["numero_documento"]?></td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=cp><?php echo $dadosboleto["especie"]?></td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=cp><?php echo $dadosboleto["quantidade"]?></td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=cp><?php echo $dadosboleto["valor_unitario"]?></td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=cp align=right><?php echo $dadosboleto["valor_boleto"]?></td>
		</tr>
		<tr><td colspan=12 height=1><img src=imagens/2.png width=666 height=1></td></tr>
		<tr>
			<td height=13><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>(-) Desconto / Abatimentos</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>(-) Outras deduções</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td colspan=3 class=ct>(+) Mora / Multa</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>(+) Outros acréscimos</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>(=) Valor cobrado</td>
		</tr>
		<tr>
			<td height=12><img src=imagens/1.png width=1 height=12></td>
			<td class=cp> </td>
			<td><img src=imagens/1.png width=1 height=12></td>
			<td class=cp> </td>
			<td><img src=imagens/1.png width=1 height=12></td>
			<td colspan=3 class=cp> </td>
			<td><img src=imagens/1.png width=1 height=12></td>
			<td class=cp align=right> </td>
			<td><img src=imagens/1.png width=1 height=12></td>
			<td class=cp align=right> </td>
		</tr>
		<tr><td colspan=12 height=1><img src=imagens/2.png width=666 height=1></td></tr>
		<tr>
			<td height=13><img src=imagens/1.png width=1 height=13></td>
			<td colspan=9 class=ct>Pagador</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Nosso número</td>
		</tr>
		<tr>
			<td height=12><img src=imagens/1.png width=1 height=12></td>
			<td colspan=9 class=cp><?php echo $dadosboleto["sacado"]?></td>
			<td><img src=imagens/1.png width=1 height=12></td>
			<td class=cp align=right><?php echo $dadosboleto["nosso_numero"]?></td>
		</tr>
		<tr><td colspan=12 height=1><img src=imagens/2.png width=666 height=1></td></tr>
	</table>
	<table cellspacing=0 cellpadding=0 border=0>
		<tr>
			<td width=7 height=12 class=ct> </td>
			<td width=558 class=ct>Demonstrativo</td>
			<td width=7 class=ct> </td>
			<td width=94 class=ct>Autenticação mecânica</td>
		</tr>
		<tr>
			<td> </td>
			<td class=cp><?php 
						if(!empty($dadosboleto["demonstrativo1"])) echo $dadosboleto["demonstrativo1"] . '<br>'; 
						if(!empty($dadosboleto["demonstrativo2"])) echo $dadosboleto["demonstrativo2"] . '<br>'; 
						if(!empty($dadosboleto["demonstrativo3"])) echo $dadosboleto["demonstrativo3"] . '<br>'; 
						?><br> <br> <br> </td>
			<td> </td>
			<td> </td>
		</tr>
		<tr><td colspan=4 class=ct align=right>Corte na linha pontilhada</td></tr>
		<tr><td colspan=4><img src=imagens/6.png width=665 height=1></td></tr>
	</table>
	 <br>
	<table cellspacing=0 cellpadding=0 border=0>
		<tr>
			<td width=140 class=cp><img src="imagens/logobradesco.jpg" alt="Sicredi" width="150" height="27"></td>
			<td width=3 valign=bottom><img height=22 src=imagens/3.png width=2></td>
			<td width=65 class=bc valign=bottom align=center>
				<span align="center" style="font-size: 20px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color:#000;">
					<?php echo $dadosboleto["codigo_banco_com_dv"]; ?>
				</span>
			</td>
			<td width=3 valign=bottom><img height=22 src=imagens/3.png width=2></td>
			<td width=450 class=ld align=right valign=bottom>
				<span style="font-size: 15px; font-weight: normal; color:#000; font-weight: normal; font-family: Arial, Helvetica, sans-serif;">
					<?php echo $dadosboleto["linha_digitavel"]?>
				</span>
			</td>
		</tr>
		<tr><td colspan=5><img height=1 src=imagens/2.png width=666></td></tr>
	</table>
	<table cellspacing=0 cellpadding=0 border=0 height="2">
		<tr>
			<td width=7 height=1><img src=imagens/2.png width=7 height=1></td>
			<td width=100><img src=imagens/2.png width=100 height=1></td>
			<td width=7><img src=imagens/2.png width=7 height=1></td>
			<td width=74><img src=imagens/2.png width=74 height=1></td>
			<td width=7><img src=imagens/2.png width=7 height=1></td>
			<td width=73><img src=imagens/2.png width=73 height=1></td>
			<td width=7><img src=imagens/2.png width=7 height=1></td>
			<td width=55><img src=imagens/2.png width=55 height=1></td>
			<td width=7><img src=imagens/2.png width=7 height=1></td>
			<td width=35><img src=imagens/2.png width=35 height=1></td>
			<td width=7><img src=imagens/2.png width=7 height=1></td>
			<td width=100><img src=imagens/2.png width=100 height=1></td>
			<td width=7><img src=imagens/2.png width=7 height=1></td>
			<td width=180><img src=imagens/2.png width=180 height=1></td>
		</tr>
		<tr>
			<td height=13><img src=imagens/1.png width=1 height=13></td>
			<td colspan=11 class=ct>Local de pagamento</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Vencimento</td>
		</tr>
		<tr>
			<td height=12><img src=imagens/1.png width=1 height=12></td>
			<td colspan=11 class=cp>Pagável preferencialmente na rede Bradesco ou Bradesco Expresso.</td>
			<td><img src=imagens/1.png width=1 height=12></td>
			<td class=cp align=right><?php echo $dadosboleto["data_vencimento"]?></td>
		</tr>
		<tr><td colspan=14 height=1><img src=imagens/2.png width=666 height=1></td></tr>
		<tr>
			<td height=13><img src=imagens/1.png width=1 height=13></td>
			<td colspan=11 class=ct>Beneficiário</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Agência/Código cedente</td>
		</tr>
		<tr>
			<td height=12><img src=imagens/1.png width=1 height=25></td>
			<td colspan=11  class=cp><?php echo $dadosboleto["cedente"]?></td>
			<td><img src=imagens/1.png width=1 height=25></td>
			<td class=cp align=right><?php echo $dadosboleto["agencia_codigo"]?></td>
		</tr>
		<tr><td colspan=14 height=1><img src=imagens/2.png width=666 height=1></td></tr>
		<tr>
			<td height=13><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Data do documento</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td colspan=3 class=ct>Número do documento</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Espécie doc.</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Aceite</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Data processamento</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Nosso número</td>
		</tr>
		<tr>
			<td height=12><img src=imagens/1.png width=1 height=12></td>
			<td class=cp><?php echo $dadosboleto["data_documento"]?></td>
			<td><img src=imagens/1.png width=1 height=12></td>

			<td colspan=3 class=cp><?php echo $dadosboleto["numero_documento"]?></td>
			<td><img src=imagens/1.png width=1 height=12></td>
			<td class=cp><?php echo $dadosboleto["especie_doc"]?></td>
			<td><img src=imagens/1.png width=1 height=12></td>
			<td class=cp><?php echo $dadosboleto["aceite"]?></td>
			<td><img src=imagens/1.png width=1 height=12></td>
			<td class=cp><?php echo $dadosboleto["data_processamento"]?></td>
			<td><img src=imagens/1.png width=1 height=12></td>
			<td class=cp align=right><?php echo $dadosboleto["nosso_numero"]?></td>
		</tr>
		<tr><td colspan=14 height=1><img src=imagens/2.png width=666 height=1></td></tr>
		<tr>
			<td height=13><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Uso do banco</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Carteira</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Espécie</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td colspan=3 class=ct>Quantidade</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>Valor</td>
			<td><img src=imagens/1.png width=1 height=13></td>
			<td class=ct>(=) Valor documento</td>
		</tr>
		<tr>
			<td height=12><img src=imagens/1.png width=1 height=12></td>
			<td class=cp height=12> </td>
			<td><img src=imagens/1.png width=1 height=12></td>
			<td class=cp><?php echo $dadosboleto["carteira"]?></td>
			<td><img src=imagens/1.png width=1 height=12></td>
			<td class=cp><?php echo $dadosboleto["especie"]?></td>
			<td><img src=imagens/1.png width=1 height=12></td>
			<td colspan=3 class=cp><?php echo $dadosboleto["quantidade"]?></td>
			<td><img src=imagens/1.png width=1 height=12></td>
			<td class=cp><?php echo $dadosboleto["valor_unitario"]?></td>
			<td><img src=imagens/1.png width=1 height=12></td>
			<td class=cp align=right><?php echo $dadosboleto["valor_boleto"]?></td>
		</tr>
		<tr><td colspan=14 height=1><img src=imagens/2.png width=666 height=1></td></tr>
	</table>
	<table cellspacing=0 cellpadding=0 border=0>
		<tr>
			<td width=7 height=26><img src=imagens/1.png width=1 height=26></td>
			<td width=472 rowspan=9 valign=top>
				<span class=ct>Instruções (Texto de responsabilidade do cedente)</span><br>
				 <br>
				<span class=cp><?php 
						if(!empty($dadosboleto["instrucoes1"])) echo $dadosboleto["instrucoes1"] . '<br>'; 
						if(!empty($dadosboleto["instrucoes2"])) echo $dadosboleto["instrucoes2"] . '<br>'; 
						if(!empty($dadosboleto["instrucoes3"])) echo $dadosboleto["instrucoes3"] . '<br>'; 
						if(!empty($dadosboleto["instrucoes4"])) echo $dadosboleto["instrucoes4"] . '<br>'; 
						if(!empty($dadosboleto["instrucoes5"])) echo $dadosboleto["instrucoes5"] . '<br>'; 
						if(!empty($dadosboleto["instrucoes6"])) echo $dadosboleto["instrucoes6"]; 
						?></span>
			</td>
			<td width=7><img src=imagens/2.png width=1 height=26></td>
			<td width=180 class=ct>(-) Desconto / Abatimentos</td>
		</tr>
		<tr><td height=1><img src=imagens/2.png width=1 height=1></td><td><img src=imagens/2.png width=7 height=1></td><td><img src=imagens/2.png width=180 height=1></td></tr>
		<tr>
			<td height=26><img src=imagens/1.png width=1 height=26></td>
			<td><img src=imagens/2.png width=1 height=26></td>
			<td class=ct>(-) Outras deduções</td>
		</tr>
		<tr><td height=1><img src=imagens/1.png width=1 height=1></td><td><img src=imagens/2.png width=7 height=1></td><td><img src=imagens/2.png width=180 height=1></td></tr>
		<tr>
			<td height=26><img src=imagens/1.png width=1 height=26></td>
			<td><img src=imagens/2.png width=1 height=26></td>
			<td class=ct>(+) Mora / Multa</td>
		</tr>
		<tr><td height=1><img src=imagens/1.png width=1 height=1></td><td><img src=imagens/2.png width=7 height=1></td><td><img src=imagens/2.png width=180 height=1></td></tr>
		<tr>
			<td height=26><img src=imagens/1.png width=1 height=26></td>
			<td><img src=imagens/2.png width=1 height=26></td>
			<td class=ct>(+) Outros acréscimos</td>
		</tr>
		<tr><td height=1><img src=imagens/1.png width=1 height=1></td><td><img src=imagens/2.png width=7 height=1></td><td><img src=imagens/2.png width=180 height=1></td></tr>
		<tr>
			<td height=26><img src=imagens/1.png width=1 height=26></td>
			<td><img src=imagens/2.png width=1 height=26></td>
			<td class=ct>(=) Valor cobrado</td>
		</tr>
		<tr><td colspan=4 height=1><img src=imagens/2.png width=666 height=1></td></tr>
		<tr>
			<td height=13><img src=imagens/1.png width=1 height=13></td>
			<td ><strong>Pagador</strong></td>
			<td><img src=imagens/b.png width=1 height=1></td>
			<td><img src=imagens/b.png width=1 height=1></td>
		</tr>
        <tr>
			<td height=39><img src=imagens/1.png width=1 height=85></td>
			<td class=cp><?php echo $dadosboleto["sacado"] . '<br>' . $dadosboleto["endereco1"] . 
			$dadosboleto["endereco2"] .$dadosboleto["endereco3"]?>
           <br />
           <?php echo $dadosboleto["avalista"];?>
            </td>
			<td valign=bottom><img src=imagens/1.png width=1 height=13></td>
			<td valign=bottom><span class=ct>Cód. baixa</span></td>
		</tr>
		<tr><td colspan=4 height=1><img src=imagens/2.png width=666 height=1></td></tr>
	</table>
	<br />
	<table cellspacing=0 cellpadding=0 border=0>
		<tr>
			<td width=333 class='ct'><!--Sacador/Avalista--></td>
			<td width=333 class=ct align=right>Autenticação mecânica - <span class=cp>Ficha de Compensação</span></td>
		</tr>
		<tr><td height=50 colspan=2><?php fbarcode($dadosboleto["codigo_barras"]); ?></td></tr>
		<tr><td colspan=2 class=ct align=right>Corte na linha pontilhada</td></tr>
		<tr><td colspan=2 height=1><img src=imagens/6.png width=665 height=1></td></tr>
	</table>	
</page>       