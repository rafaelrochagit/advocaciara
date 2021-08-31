<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
	$message = h($message);
}
?>
<!--<div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div>-->
<div id="msgError" class="alert erro-alert">
	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
	<strong>Erro</strong><br>
	<?= html_entity_decode($message) ?>
</div>

<style type="text/css">
	.erro-alert {
		padding: 20px;
		background-color: #ce5656;
		color: white;
	}

	.closebtn {
		margin-left: 15px;
		color: white;
		font-weight: bold;
		float: right;
		font-size: 22px;
		line-height: 20px;
		cursor: pointer;
		transition: 0.3s;
	}

	.closebtn:hover {
		color: black;
	}
</style>

<script>
	timeOutHide("msgError", 4);

	function timeOutHide(id, timeInSeconds) {
		const time = timeInSeconds * 1000
		const selector = '#' + id
		if ($(selector).attr('isShow') == undefined || $(selector).attr('isShow') == 'false') {
			$(selector).attr('isShow', 'true');
			setTimeout(function() {
				$(selector).fadeOut();
				$(selector).attr('isShow', 'false');
			}, time);
		}
	}
</script>