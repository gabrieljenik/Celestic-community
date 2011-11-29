<html>
<style type="text/css">
* {font-family:Tahoma, Verdana, Arial;}
#template{font-size:13px;font-family:Verdana, Tahoma, Arial;}
</style>
<body>
	<div align="center" style="margin:auto;">
		<table id="template" style="width:650px">
			<thead style="background-color:#263849; color:#CCCCCC;">
				<tr>
					<th scope="col" style="border-top:5px solid #5188C2; text-align:left;">
						<img src="https://qbit.com.mx/labs/celestic/images/celestic.png" alt="<?php echo $applicationName; ?>" />
					</th>
				</tr>
			</thead>
			<tfoot style="background-color:#263849; color:#CCCCCC; padding:5px;">
				<tr>
					<td id="footer" style="padding:5px;">
						<p>
							Copyright &copy; 2011 <?php echo $applicationName; ?>. Todos los derechos reservados. | <a href="<?php echo $applicationUrl; ?>/?r=site/privacy"></a>Declaraci&oacute;n de Privacidad<a>
						</p>
						<p style="font-size:11px;">
							Este mensaje y cualquier documento que lleve adjunto, es confidencial y destinado &uacute;nicamente a la persona o entidad a quien ha sido enviado. Si Usted ha recibido este mensaje por error, le informamos que el contenido en el mismo es reservado y el uso no autorizado est&aacute; prohibido legalmente, por ello, por favor, le rogamos que nos lo notifique al e-mail info@celestic.mx<br />
							Aviso: Qbit Mexhico y el equipo de <?php echo $applicationName; ?> en ning&uacute;n momento colecta informaci&oacute;n personal de sus usuarios.<br />
							No respondas a este mensaje, fue enviado utilizando un servicio autom&aacute;tico de notificaciones.
						</p>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<td valign="top" id="maincontent" style="padding-top:15px;">
						<p>
							Hace pocos minutos <b><?php echo $document->User->completeName; ?></b> subi&oacute; un nuevo documento, el cual esta relacionado al proyecto <?php echo $document->Projects->project_name; ?>. Los datos de este documento siguen a continuaci&oacute;n:
						</p>
						<div style="padding:5px; background-color:#DFF3FB;">
							<p>
								<u>Nombre del Documento:</u><br />
								<?php echo $document->document_name; ?>
							</p>
							<p>
								<u>Descripci&oacute;n:</u><br />
								<?php echo Yii::app()->format->html(nl2br($document->document_description)); ?>
							</p>
							<p>
								<?php echo CHtml::link('Descargar',Yii::app()->controller->createUrl("documents/download",array("id"=>$document->document_id)), array("target"=>"_blank")); ?>
							</p>
						</div>
						<p>
							Para ver m&aacute;s detalles, puedes visitar el siguiente enlace:<br />
							<a href="<?php echo $urlToDocument; ?>" target="_blank"><?php echo $urlToDocument; ?></a>
						</p>
						<p>
							<a href="<?php echo $applicationUrl; ?>"><?php echo $applicationName; ?> Team</a>
						</p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>