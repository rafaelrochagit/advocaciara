<!-- /theme JS files -->
<script>

	function quem_somos(){

		jQuery.ajax({
            url: '<?=$this->Url->build('/quem-somos');?>',
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
            url: '<?=$this->Url->build('/area-atuacao');?>',
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

    function noticias(){
        jQuery.ajax({
            url: "<?=$this->Url->build('/noticias');?>",
            async: true,
            cache: false,
            type: 'GET',
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            beforeSend: function() {
                $("#noticias .loader").fadeIn();
            },
            success: function(result) {
                $('#noticias').append(result);
                $("#noticias .loader").fadeOut();
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
<div id="noticias" class="page-section" style="background-color:#fff">
    <div style="display: none;" class="loader"></div>
    <script type="text/javascript">
        noticias();
    </script>
</div>
<div id="contato" class="page-section" style="background:#000;">
    <div style="display: none;" class="loader"></div>
    <script type="text/javascript">
        contato();
    </script>
</div>
