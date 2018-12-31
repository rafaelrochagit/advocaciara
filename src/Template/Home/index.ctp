<!-- /theme JS files -->
<script>

	function quem_somos(){

		jQuery.ajax({
            url: '<?=$this->Url->build('/quemsomos');?>',
            async: true,
            cache: false,
            type: 'GET',
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            beforeSend: function() {
                $("#quem_somos .loader").fadeIn();
            },
            success: function(result) {
				$('#quem_somos').append(result);
                $("#quem_somos .loader").fadeOut();
            }
        });
	}

    function area_atuacao(){

        jQuery.ajax({
            url: '<?=$this->Url->build('/areaatuacao');?>',
            async: true,
            cache: false,
            type: 'GET',
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            beforeSend: function() {
                $("#area_atuacao .loader").fadeIn();
            },
            success: function(result) {
                $('#area_atuacao').append(result);
                $("#area_atuacao .loader").fadeOut();
            }
        });
    }

    function contato(){

        jQuery.ajax({
            url: '<?=$this->Url->build('/contato');?>',
            async: true,
            cache: false,
            type: 'GET',
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            beforeSend: function() {
                $("#contato .loader").fadeIn();
            },
            success: function(result) {
                $('#contato').append(result);
                $("#contato .loader").fadeOut();
            }
        });
    }
</script>
<div id="quem_somos" class="page-section">
	<div style="display: none;" class="loader"></div>
	<script type="text/javascript">
		quem_somos();
	</script>
</div>
<div id="area_atuacao" class="page-section" style="background: #363636">
    <div style="display: none;" class="loader"></div>
    <script type="text/javascript">
        area_atuacao();
    </script>
</div>
<div id="contato" class="page-section" style="background:#000;">
    <div style="display: none;" class="loader"></div>
    <script type="text/javascript">
        contato();
    </script>
</div>