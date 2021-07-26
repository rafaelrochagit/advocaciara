<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!--<div id="msgSuccess" class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div>-->
<div id="msgSuccess" class="alert success-alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Sucesso</strong><br>
  <?= $message ?>
</div>

<style type="text/css">
	.success-alert {
		background-color: #77bf5f;
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
		timeOutHide("msgSuccess", 4);

		function timeOutHide(id, timeInSeconds) {
			const time = timeInSeconds * 1000
			const selector = '#'+id
			if($(selector).attr('isShow') == undefined || $(selector).attr('isShow') == 'false') {
				$(selector).attr('isShow', 'true');
				setTimeout(function(){ 
					 $(selector).fadeOut();
					 $(selector).attr('isShow', 'false');
				}, time);
			}
		}
</script>