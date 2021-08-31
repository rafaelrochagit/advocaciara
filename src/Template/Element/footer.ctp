<?php
$phone_wpp = '55'.$conteudoHome["whatsapp"];
$text = 'Vim pelo site!';
$wpp_base = 'https://api.whatsapp.com/send?phone=';
$wpp_link = $wpp_base . $phone_wpp . '&text=' . $text;
$wpp_link2 = $wpp_base . $phone_wpp;
$youtube = $conteudoHome["youtube"];
$instagram = $conteudoHome["instagram"];
$facebook = $conteudoHome["facebook"];
?>
<script>
  var textWpp = "<?=$text?>"
  var wppBase = "<?=$wpp_base?>"
</script>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- The social media icon bar -->
<div class="icon-bar">
  <div class="<?= $editavelSimples ?>"  data-local="home" data-propriedade="instagram" data-conteudo="<?= $conteudoHome["instagram"] ?>">
    <a href="<?= $instagram ?>" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
  </div>
  <div class="<?= $editavelSimples ?>"  data-local="home" data-propriedade="whatsapp" data-conteudo="<?= $conteudoHome["whatsapp"] ?>">
    <a href="<?= $wpp_link ?>" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
  </div>
  <div class="<?= $editavelSimples ?>"  data-local="home" data-propriedade="youtube" data-conteudo="<?= $conteudoHome["youtube"] ?>">
    <a href="<?= $youtube ?>" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
  </div>
  <div class="<?= $editavelSimples ?>"  data-local="home" data-propriedade="facebook" data-conteudo="<?= $conteudoHome["facebook"] ?>">
    <a href="<?= $facebook ?>" target="_blank" class="facebook"><i class="fab fa-facebook"></i></a>
  </div>
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
            <i class="fa fa-phone"></i> 
            <div class="<?= $editavel ?>" data-local="footer" data-propriedade="telefone" data-conteudo="">
              <span>
                <?= html_entity_decode($conteudoFooter["telefone"]) ?>
              </span>
            </div>
            <br>
          </li>
          <li>
            <i class="far fa-envelope"></i>
            <div class="<?= $editavel ?>" data-local="footer" data-propriedade="email1" data-conteudo="">
              <?= html_entity_decode($conteudoFooter["email1"]) ?>
            </div>
            <div class="<?= $editavel ?>" data-local="footer" data-propriedade="email2" data-conteudo="">
              <?= html_entity_decode($conteudoFooter["email2"]) ?>
            </div>
          </li>
          <li>
            <i class="fa fa-clock-o"></i>
            <div class="<?= $editavel ?>" data-local="footer" data-propriedade="tituloPlantao" data-conteudo="">
              <?= html_entity_decode($conteudoFooter["tituloPlantao"]) ?>
            </div>
            <div class="<?= $editavel ?>" data-local="footer" data-propriedade="telefonePlantao" data-conteudo="">
              <?= html_entity_decode($conteudoFooter["telefonePlantao"]) ?>
            </div>
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
            <div class="<?= $editavel ?>" data-local="footer" data-propriedade="endereco1" data-conteudo="">
              <?= html_entity_decode($conteudoFooter["endereco1"]) ?>
            </div>
            <div class="<?= $editavel ?>" data-local="footer" data-propriedade="cidade1" data-conteudo="">
              <?= html_entity_decode($conteudoFooter["cidade1"]) ?>
            </div>
            <div class="<?= $editavel ?>" data-local="footer" data-propriedade="cep1" data-conteudo="">
              <?= html_entity_decode($conteudoFooter["cep1"]) ?>
            </div>
          </li>
          <li>
            <i class="fa fa-home"></i>
            <div class="<?= $editavel ?>" data-local="footer" data-propriedade="endereco2" data-conteudo="">
              <?= html_entity_decode($conteudoFooter["endereco2"]) ?>
            </div>
            <div class="<?= $editavel ?>" data-local="footer" data-propriedade="cidade2" data-conteudo="">
              <?= html_entity_decode($conteudoFooter["cidade2"]) ?>
            </div>
            <div class="<?= $editavel ?>" data-local="footer" data-propriedade="cep2" data-conteudo="">
              <?= html_entity_decode($conteudoFooter["cep2"]) ?>
            </div>
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
    <p class="fl_left">Copyright &copy; <?=date('Y')?> - Todos os direitos Reservado - <a href="#">advocaciara.com</a><br><br>
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

<div class="modal fade" id="edicaoSimplesModal" data-local="" data-propriedade="" tabindex="-1" role="dialog" aria-labelledby="edicaoSimplesModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edicaoSimplesModalTitle">Edição</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" id="novoConteudoSimples" style="width: 470px; height: 200px;" ></input>
        <div class="modal-footer">
          <span type="button" data-dismiss="modal" style="cursor:pointer; padding-right:10px;">Cancelar</span>
          <button type="button" id="salvarEdicaoSimples" class="btn btn-primary">Salvar</button>
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
      buttonList : ['bold','italic','underline','strikeThrough','link', 'unlink', 'removeformat', 'ol', 'ul'],
      iconsPath: 'webroot/js/nicEditorIcons.gif' 
    }).panelInstance('novoConteudo');
  });

  function aplicaEditavel() {
    $('.editar').remove();
    $('.editavel').append('' +
      '<div class="editar">' +
      '<span class="fa fa-edit"></span>' +
      '</div>'
    );

    $('.editarSimples').remove();
    $('.editavelSimples').append('' +
      '<div class="editarSimples">' +
      '<span class="fa fa-edit"></span>' +
      '</div>'
    );
  }
 
  // EDITAR TRADICIONAL
  $(document).on('click', '.editar', function() {
    elementoEdicao = $(this).parent();
    let local = $(elementoEdicao).data('local');
    let propriedade = $(elementoEdicao).data('propriedade');
    //let conteudo = $(elementoEdicao).data('conteudo');
    let elementoClone = $(elementoEdicao).clone()
    $(elementoClone).children('.editar').remove()
    let conteudo = $(elementoClone).html();

    console.log(local, propriedade, conteudo);
    if (local == undefined || propriedade == undefined || conteudo == undefined) {
      errorMessage("Ação, propriedade ou conteúdo não informados");
      console.log(local, propriedade, conteudo);
    } else {
      abrirEdicao(local, propriedade, conteudo);
    }

  });

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

    salvarEdicao(local, propriedade, conteudo, controller, 'edicaoModal');

  });
  // EDITAR TRADICIONAL FIM

  // EDITAR SIMPLES
  $(document).on('click', '.editarSimples', function() {
    elementoEdicao = $(this).parent();
    let local = $(elementoEdicao).data('local');
    let propriedade = $(elementoEdicao).data('propriedade');
    let conteudo = $(elementoEdicao).data('conteudo');
    //let elementoClone = $(elementoEdicao).clone()
    //$(elementoClone).children('.editarSimples').remove()
    //let conteudo = $(elementoClone).html();

    console.log(local, propriedade, conteudo);
    if (local == undefined || propriedade == undefined || conteudo == undefined) {
      errorMessage("Ação, propriedade ou conteúdo não informados");
      console.log(local, propriedade, conteudo);
    } else {
      abrirEdicaoSimples(local, propriedade, conteudo);
    }

  });

  function abrirEdicaoSimples(local, propriedade, conteudo) {
    $("#novoConteudoSimples").val(conteudo);
    $("#edicaoSimplesModal").data('local', local);
    $("#edicaoSimplesModal").data('propriedade', propriedade);
    $("#edicaoSimplesModal").modal('show');
  }

  
  $("#salvarEdicaoSimples").click(function() {

    let conteudo = $("#novoConteudoSimples").val();
    let local = $("#edicaoSimplesModal").data('local');
    let propriedade = $("#edicaoSimplesModal").data('propriedade');
    let controller = mapLocalController(local);

    salvarEdicao(local, propriedade, conteudo, controller, 'edicaoSimplesModal');

  });

  function showLoader() {
    $('.loader-body').show();
  }

  // EDITAR SIMPLES FIM



  function salvarEdicao(local, propriedade, conteudo, controller, modalId) {
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
        $("#"+modalId).modal('hide');
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
    let listaLinkFilhosDeUmaDiv = ["instagram", "youtube", "facebook"]
    let listaLink = []
    $(elementoEdicao).data('local', local);
    $(elementoEdicao).data('propriedade', propriedade);
    //$(elementoEdicao).data('conteudo', conteudo);

    if(listaLinkFilhosDeUmaDiv.includes(propriedade)) {
      atualizarEditadoLinkFilhosDeUmaDiv(conteudo);
    }
    else if(propriedade == "whatsapp") {
      $(elementoEdicao).data('conteudo', conteudo);
      $(elementoEdicao).children("a").attr("href", wppBase+"55"+conteudo+'&text='+textWpp);
    } 
    else if(listaLink.includes(propriedade)) {
      atualizarEditadoLink(conteudo);
    }
    else {
      $(elementoEdicao).html(conteudo);
      if(local == "area_atuacao" && propriedade.includes("titulo")) {
        const idPai = $(elementoEdicao).parent().attr('id');
        $('#'+idPai+'-list').find("h5").first().text(conteudo)
      }
    }

    aplicaEditavel();
  }
  
  function atualizarEditadoLinkFilhosDeUmaDiv(conteudo) {
    $(elementoEdicao).data('conteudo', conteudo);
    $(elementoEdicao).children("a").attr("href", conteudo);
  }

  function atualizarEditadoLink(conteudo) {
    $(elementoEdicao).data('conteudo', conteudo);
    $(elementoEdicao).attr("href", conteudo);
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

  function mapLocalController(local) {
    map = {
      'header': 'home',
    }
    return map[local] != undefined ? map[local] : local.replace("_", "-");
  }
</script>