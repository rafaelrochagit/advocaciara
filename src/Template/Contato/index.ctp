<style type="text/css" media="screen">
  #msg-contact{
    margin-bottom: 10px;
  } 
</style>
<script type="text/javascript">

$('#submit-contact').click(function(){
  if($('#contact-form').is(':valid')){
    $('#msg-contact').html('Enviando ...');
    var load = $('<div>').addClass('loader');
    $('#msg-contact').append(load);
    $('#msg-contact').css('color','#12ca12');
    sendEmail();
  }else{
    $('#msg-contact').html('Erro no preechimento do formulário!');
    $('#msg-contact').css('color','#e88f02');
  }
  return false;
});

function sendEmail(){
  $.ajax({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      url: '<?=$this->Url->build('/contato/sendEmail');?>',
      async: true,
      cache: false,
      type: 'POST',
      data: $('#contact-form').serialize(),
      success: function (response) {
          $('#msg-contact').html(response);
          $('#msg-contact').css('color','#12ca12');
          //$('#msg-contact').html(response);
      },
      error: function () {
          $('#msg-contact').html('Erro no envio!');
          $('#msg-contact').css('color','red');
      }
   });
}

</script>

<div class="wrapper">
  <div class="col-m-12 text-center">
    <h1 class="title-section"><i class="fa fa-envelope-o pr-2"></i> Contato</h1>
  </div>
  <div class="row text-center">
    <div class="col-sm-12 custom-box">
        <div class="col-sm-12">
          <div class="well form-well">
            <form id="contact-form">
              <div class="row">
                <div class="group col-sm-6">
                  <input required="" type="text" name="nome">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label>Nome</label>
                </div>

                <div class="group col-sm-6">
                  <input required="" type="text" name="email">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label>Email</label>
                </div>  
              </div>

              <div class="row">
                <div class="group col-sm-6">
                  <input required="" type="tel" name="tel">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label>Telefone</label>
                </div>

                <div class="group col-sm-6">
                  <input required="" type="text" name="area">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label>Área de Atuação</label>
                </div>  
              </div>
              
              <div class="row">
                <div class="group col-sm-12">
                  <textarea type="text" rows="5" required="" name="mensagem"></textarea>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label>Mensagem</label>
                </div>
              </div>
              <div id="msg-contact"></div>
              <div class="group">
                <center> <button id="submit-contact" class="btn btn-warning">Enviar <span class="glyphicon glyphicon-send"></span></button></center>
              </div>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>
