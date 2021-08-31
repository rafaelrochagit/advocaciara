<div class="wrapper">
  <div class="hoc container clear"> 
    <h1 class="title-section"><i><img src="<?= $this->Url->image('favicon3.png')?>"></i>   
      <div style="display: inline-block;"
        class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="titulo" data-conteudo="<?= $conteudoAreaAtuacao["titulo"] ?>">
        <?= html_entity_decode($conteudoAreaAtuacao["titulo"]) ?>
      </div>  
    </h1> 
    <div class="row">
        <div class="col-md-4">
          <div class="list-group" id="list-tab" role="tablist">
            <?php
            $tabs = ['advocacia-criminal','direito-civil', 'direito-trabalho', 
            'direito-administrativo', 'protecao-defesa-animais', 'correspondente-juridico', 'direito-militar'];
            
            foreach($tabs as $i => $tab):
              $isActive = $i == 0 ? 'active' : '';
            ?>

            <a class="list-group-item list-group-item-action <?=$isActive?>" id="<?=$tab?>-list" data-toggle="list" 
            href="#<?=$tab?>"
              role="tab" aria-controls="home">
              <div class="list-group-item-content">
                <div class="list-icon">
                  <i class="fa fontawesome-icon <?=$conteudoAreaAtuacao["icone".($i+1)]?>"></i>
                </div>
                <h5>
                  <?= html_entity_decode($conteudoAreaAtuacao["titulo".($i+1)]) ?>
                </h5>
              </div>
            </a>
            <?php endforeach; ?>
            
          </div>
        </div>
        <div class="col-md-8 area_atuacao_descricao">
          <div class="tab-content" id="nav-tabContent">
            
            <?php foreach($tabs as $i => $tab): 
              $isShow = $i == 0 ? 'show active' : ''; 
            ?>
            <div class="tab-pane fade <?= $isShow ?>" id="<?=$tab?>" role="tabpanel" aria-labelledby="<?=$tab?>-list">
              
              <?php if($editavel != ""): ?>
                    <i class="icone icone<?=($i+1)?> fa fontawesome-icon <?=$conteudoAreaAtuacao["icone".($i+1)]?>"></i>
                    <div class="editarIcone" onclick="trocarIcone('icone<?=($i+1)?>')">
                      <span class="fa fa-edit"></span>
                    </div>
									<?= $this->Form->create(null, 
									['url' => array('action' => 'salvarIcone/'.($i+1)), 'id' => "icone".($i+1), 'class' => 'row formIcone']) ?>
										<input name="icone" type="hidden" value="<?=$conteudoAreaAtuacao["icone".($i+1)]?>" class="col inputIcon" readonly> 
									<?= $this->Form->end(); ?>
              <?php endif; ?>
            
              <h2 class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="titulo<?=($i+1)?>" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["titulo".($i+1)]) ?>
              </h2>
              <div class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="conteudo<?=($i+1)?>" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["conteudo".($i+1)]) ?>
              </div>
            </div>
            <?php endforeach; ?>

          </div>
        </div>
    </div>
  </div>  
</div>

<!-- Modal -->
<div class="modal fade" id="edicaoModalIcon" data-local="" data-propriedade="" tabindex="-1" role="dialog" aria-labelledby="edicaoModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edicaoModalIconTitle">Edição Ícone</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        $icones = ['fa-balance-scale','fa-child','fa-wrench','fa-briefcase','fa-paw','fa-envelope','fa-certificate','fa-address-book','fa-address-card',
        'fa-bank','fa-archive','fa-handshake','fa-at','fa-bell','fa-blind','fa-car','fa-flag','fa-hourglass','fa-anchor','fa-asterisk','fa-bar-chart ',
        'fa-barcode','fa-bicycle','fa-binoculars','fa-bolt','fa-building','fa-calendar','fa-camera','fa-cart-arrow-down','fa-clock-o','fa-code',
        'fa-cogs','fa-commenting','fa-cubes','fa-desktop','fa-exclamation','fa-eye','fa-fighter-jet','fa-film','fa-fire','fa-fire-extinguisher',
        'fa-graduation-cap','fa-users','fa-headphones','fa-heart', 'fa-info','fa-keyboard-o','fa-laptop','fa-key','fa-lock','fa-phone','fa-recycle',
        'fa-home','fa-wheelchair'
        ];
        ?>
        <div id="iconesPanel" class="row">
          <?php foreach ($icones as $icone): ?>
            <div class="col icones" data-valor="<?=$icone?>">
              <i class="fa fontawesome-icon <?=$icone?>"></i>
            </div>
          <?php endforeach; ?>
        </div>
          
        <input id="iconeNovo" type="hidden" readonly/>
        <input id="iconeAtual" type="hidden" readonly/>
        <input id="idIcone" type="hidden"/>
        <div class="modal-footer">
          <span type="button" data-dismiss="modal" style="cursor:pointer; padding-right:10px;">Cancelar</span>
          <button type="button" id="selecionarIcone" class="btn btn-primary">Trocar ícone</button>
        </div>
      </div>
    </div>
  </div>
</div>

<style>

  #iconesPanel {
    margin-bottom: 5px;
  }

  .formIcone {
    margin-bottom: 25px;
  }

  .icones {
    margin: 3px 0;
  }
  .icones i {
    border: solid 1px #000;
    padding: 2px;
    cursor: pointer;
  }

  .icones .iconeSelecionado {
    color: #fff;
    background: #000;
  }

  .icones:hover i {
    opacity: 0.5;
  }

  .icone {
    font-size: 20pt;
  }

  .editarIcone {
    display: inline;
  }

  .editarIcone span{
    color:black;
    cursor: pointer;
    font-size: 15pt;
  }

  .editarIcone:hover span {
    opacity: 0.5;
  }

</style>
<script>
  function trocarIcone(idIcone) {
    let iconeAtual = $('#'+idIcone + ' .inputIcon').val();
    $('#iconeAtual').val(iconeAtual);
    $('#iconeNovo').val(iconeAtual);
    $('#idIcone').val(idIcone);
    $('.icones i').removeClass('iconeSelecionado');
    $('.icones .'+iconeAtual).addClass('iconeSelecionado');

    $('#edicaoModalIcon').modal('show');
  }

  $('.icones').click(function(){
    let valorIcone = $(this).data('valor');
    $('#iconeNovo').val(valorIcone);
    $('.icones i').removeClass('iconeSelecionado');
    $('.icones .'+valorIcone).addClass('iconeSelecionado');
  });

  $('#selecionarIcone').click(function(){
    let idIcone = $('#idIcone').val();
    let iconeAtual = $('#iconeAtual').val();
    let iconeNovo = $('#iconeNovo').val();
    console.log(idIcone)
    console.log(iconeAtual)
    console.log(iconeNovo)
    $('.'+idIcone).removeClass(iconeAtual);
    $('.'+idIcone).addClass(iconeNovo);
    $('#'+idIcone + " .inputIcon").val(iconeNovo);
    $('#'+idIcone).submit();
    $('.loader-body').show();
    //$('#edicaoModalIcon').modal('hide');
  });
</script>