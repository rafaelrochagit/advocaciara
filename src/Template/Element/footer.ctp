<?php
$phone_wpp = '5561982749910';
$text = 'Vim pelo site!';
$wpp_link = 'https://api.whatsapp.com/send?phone=' . $phone_wpp . '&text=' . $text;
$wpp_link2 = 'https://api.whatsapp.com/send?phone=' . $phone_wpp;
$youtube = 'https://www.youtube.com/channel/UChmZsNK1UDpOo_bGFytxLoA';
$instagram = 'https://instagram.com/ADVOCACIARA';
$facebook = 'https://www.facebook.com/ra.advocacia.midias';
?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- The social media icon bar -->
<div class="icon-bar">
  <a href="<?= $instagram ?>" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
  <a href="<?= $wpp_link ?>" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
  <a href="<?= $youtube ?>" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
  <a href="<?= $facebook ?>" target="_blank" class="facebook"><i class="fab fa-facebook"></i></a>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h4 class="nospace uppercase"></h4>
      <p class="nospace"></p>
    </div>
    <div class="group">
      <div class="one_half first">
        <h6 class="title">Contatos</h6>
        <ul class="nospace linklist contact">
          <li>
            <i class="fa fa-phone"></i> (61) 98274-9910<br>
          </li>
          <li>
            <i class="far fa-envelope"></i>
            ra.advocacia@icloud.com<br>
            ra.advocacia.midias@gmail.com
          </li>
          <li>
            <i class="fa fa-clock-o"></i>
            PLANTÃO CRIMINAL 24 HORAS:
            <br>
            (61) 98274-9910
            <div class="footer_whatsapp">
              Acompanhe seu processo via <br>
              <a href="<?= $wpp_link2 ?>" target='_blank'>
                <i class="fab fa-whatsapp"> whatsapp</i>
              </a>
            </div>
          </li>
        </ul>
      </div>
      <div class="one_half">
        <h6 class="title">Endereços</h6>
        <ul class="nospace linklist contact">
          <li>
            <i class="fa fa-home"></i>
            QMSW 5 - lote 8, 155 <br>Sudoeste - Brasília - DF<br>CEP. 70.680-535
          </li>
          <li>
            <i class="fa fa-home"></i>
            SDS - Bloco Q <br>Venâncio IV - 404<br>Conic Brasília - DF<br>CEP. 70.393-903
          </li>
        </ul>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - Todos os direitos Reservado - <a href="#">advocaciara.com</a><br><br>
      Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    </p>
    <p class="fl_right">
      <?php if (!isset($usuario)) : ?>
        <a data-toggle="modal" data-target="#loginModal" style="cursor:pointer;">Login</a><br>
      <?php else : ?>
        <a style="cursor:pointer;" href="login/sair">Sair</a><br>
      <?php endif; ?>
      Desenvolvido por
      <a target="_blank" href="https://rkrtech.com.br">
        <?= $this->html->image('logorkr.png', ['style' => 'width:65px;margin-left:10px;']) ?>
      </a>
      <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= $this->Form->create("Login", array('url' => "/login/entrar")) ?>
        <input type="text" class="form-control" placeholder="Usuário" name="usuario">
        <br>
        <input type="password" class="form-control" placeholder="Senha" name="senha">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Entrar</button>
      </div>
      <?= $this->Form->end() ?>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="edicaoModal" data-local="" data-propriedade="" tabindex="-1" role="dialog" aria-labelledby="edicaoModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edicaoModalTitle">Edição</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <textarea id="novoConteudo" style="width: 470px; height: 200px;" ></textarea>
        <div class="modal-footer">
          <span type="button" data-dismiss="modal" style="cursor:pointer; padding-right:10px;">Cancelar</span>
          <button type="button" id="salvarEdicao" class="btn btn-primary">Salvar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="alert" class="alert success-alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong class="tituloAlert">Sucesso</strong><br>
  <div class="conteudoAlert"></div>
</div>


<script>
  var elementoEdicao = '';
  
  aplicaEditavel();

  bkLib.onDomLoaded(function() {
    new nicEditor({
      fullPanel: true,
      iconsPath: 'webroot/js/nicEditorIcons.gif' 
    }).panelInstance('novoConteudo');
  });

  function aplicaEditavel() {
    $('.editar').remove();
    $('.editavel').append('' +
      '<div class="editar">' +
      '<i class="fa fa-edit"></i>' +
      '</div>'
    );
  }
 

  $(document).on('click', '.editar', function() {
    elementoEdicao = $(this).parent();
    let local = $(elementoEdicao).data('local');
    let propriedade = $(elementoEdicao).data('propriedade');
    let conteudo = $(elementoEdicao).data('conteudo');


    if (local == undefined || propriedade == undefined || conteudo == undefined) {
      errorMessage("Ação, propriedade ou conteúdo não informados");
      console.log(local, propriedade, conteudo);
    } else {
      abrirEdicao(local, propriedade, conteudo);
    }

  });

  function mapLocalController(local) {
    map = {
      'header': 'home'
    }
    return map[local];
  }

  function abrirEdicao(local, propriedade, conteudo) {
    $("#novoConteudo").val(conteudo);
    nicEditors.findEditor( "novoConteudo").setContent(conteudo);
    $("#edicaoModal").data('local', local);
    $("#edicaoModal").data('propriedade', propriedade);
    $("#edicaoModal").modal('show');
  }

  $("#salvarEdicao").click(function() {

    let conteudo = $("#novoConteudo").val();
    let local = $("#edicaoModal").data('local');
    let propriedade = $("#edicaoModal").data('propriedade');
    let controller = mapLocalController(local);
    
    conteudo = nicEditors.findEditor( "novoConteudo").getContent();
    
    salvarEdicao(local, propriedade, conteudo, controller);

  });

  function salvarEdicao(local, propriedade, conteudo, controller) {
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: controller + '/salvar',
      async: true,
      cache: false,
      type: 'POST',
      data: {
        "local": local,
        "propriedade": propriedade,
        "conteudo": conteudo
      },
      success: function(response) {
        atualizarEditado(local, propriedade, conteudo);
        successMessage(response);
        $("#edicaoModal").modal('hide');
      },
      error: function(response) {
        console.log(response);
        console.log(response.responseText);
        $('body').append(response.responseText);
        errorMessage(response);
      }
    });
  }

  function atualizarEditado(local, propriedade, conteudo) {
    $(elementoEdicao).data('local', local);
    $(elementoEdicao).data('propriedade', propriedade);
    $(elementoEdicao).data('conteudo', conteudo);
    $(elementoEdicao).html(conteudo);
    aplicaEditavel();
  }

  function showMessage(title, msg) {
    $('#alert .tituloAlert').text(title)
    $('#alert .conteudoAlert').html(msg)
    $('#alert').fadeIn();
    timeOutHide("alert", 4);
  }

  function successMessage(msg) {
    $('#alert').removeClass("erro-alert").addClass("success-alert")
    showMessage("Sucesso", msg)
  }

  function errorMessage(msg) {
    $('#alert').removeClass("success-alert").addClass("erro-alert")
    showMessage("Erro", msg)
  }

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