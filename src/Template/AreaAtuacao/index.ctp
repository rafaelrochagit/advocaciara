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
            <a class="list-group-item list-group-item-action active" id="advocacia-criminal-list" data-toggle="list" 
            href="#advocacia-criminal"
              role="tab" aria-controls="home">
              <div class="list-group-item-content">
                <div class="list-icon">
                  <i class="fa fontawesome-icon fa-balance-scale"></i>
                </div>
                <h5>
                  <?= html_entity_decode($conteudoAreaAtuacao["titulo1"]) ?>
                </h5>
              </div>
            </a>
            <a class="list-group-item list-group-item-action" id="direito-civil-list" data-toggle="list" 
            href="#direito-civil"
              role="tab" aria-controls="profile">
              <div class="list-group-item-content">
                <div class="list-icon">
                  <i class="fa fontawesome-icon fa-child"></i>
                </div>
                <h5>
                  <?= html_entity_decode($conteudoAreaAtuacao["titulo2"]) ?>
                </h5>
              </div>
            </a>
            <a class="list-group-item list-group-item-action" id="direito-trabalho-list" data-toggle="list" 
            href="#direito-trabalho"
              role="tab" aria-controls="messages">
              <div class="list-group-item-content">
                <div class="list-icon">
                  <i class="fa fa-wrench"></i>
                </div>
                <h5>
                  <?= html_entity_decode($conteudoAreaAtuacao["titulo3"]) ?>
                </h5>
              </div>
            </a>
            <a class="list-group-item list-group-item-action" id="direito-administrativo-list" data-toggle="list" 
            href="#direito-administrativo"
              role="tab" aria-controls="settings">
              <div class="list-group-item-content">
                <div class="list-icon">
                  <i class="fa fontawesome-icon fa-briefcase"></i>
                </div>
                <h5>
                  <?= html_entity_decode($conteudoAreaAtuacao["titulo4"]) ?>
                </h5>
              </div>
            </a>
            <a class="list-group-item list-group-item-action" id="protecao-defesa-animais-list" data-toggle="list" 
            href="#protecao-defesa-animais"
              role="tab" aria-controls="settings">
              <div class="list-group-item-content">
                <div class="list-icon">
                  <i class="fa fontawesome-icon fa-paw"></i>
                </div>
                <h5>
                  <?= html_entity_decode($conteudoAreaAtuacao["titulo5"]) ?>
                </h5>
              </div>
            </a>
            <a class="list-group-item list-group-item-action" id="correspondente-juridico-list" data-toggle="list" 
            href="#correspondente-juridico"
              role="tab" aria-controls="settings">
              <div class="list-group-item-content">
                <div class="list-icon">
                  <i class="fa fontawesome-icon fa-envelope"></i>
                </div>
                <h5>
                  <?= html_entity_decode($conteudoAreaAtuacao["titulo6"]) ?>
                </h5>
              </div>
            </a>
            <a class="list-group-item list-group-item-action" id="direito-militar-list" data-toggle="list" 
            href="#direito-militar"
              role="tab" aria-controls="settings">
              <div class="list-group-item-content">
                <div class="list-icon">
                  <i class="fa fontawesome-icon fa-certificate"></i>
                </div>
                <h5>
                  <?= html_entity_decode($conteudoAreaAtuacao["titulo7"]) ?>
                </h5>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-8 area_atuacao_descricao">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="advocacia-criminal" role="tabpanel" aria-labelledby="advocacia-criminal-list">
              <h2 class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="titulo1" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["titulo1"]) ?>
              </h2>
              <div class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="conteudo1" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["conteudo1"]) ?>
              </div>
            </div>
            <div class="tab-pane fade" id="direito-civil" role="tabpanel" aria-labelledby="direito-civil-list">
              <h2 class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="titulo2" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["titulo2"]) ?>
              </h2>
              <div class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="conteudo2" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["conteudo2"]) ?>
              </div>
            </div>
            <div class="tab-pane fade" id="direito-trabalho" role="tabpanel" aria-labelledby="direito-trabalho-list">
              <h2 class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="titulo3" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["titulo3"]) ?>
              </h2>
              <div class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="conteudo3" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["conteudo3"]) ?>
              </div>
            </div>
            <div class="tab-pane fade" id="direito-administrativo" role="tabpanel" aria-labelledby="direito-administrativo-list">
              <h2 class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="titulo4" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["titulo4"]) ?>
              </h2>
              <div class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="conteudo4" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["conteudo4"]) ?>
              </div>
            </div>
            <div class="tab-pane fade" id="protecao-defesa-animais" role="tabpanel" aria-labelledby="protecao-defesa-animais-list">
              <h2 class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="titulo5" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["titulo5"]) ?>
              </h2>
              <div class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="conteudo5" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["conteudo5"]) ?>
              </div>
            </div>
            <div class="tab-pane fade" id="correspondente-juridico" role="tabpanel" aria-labelledby="correspondente-juridico-list">
              <h2 class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="titulo6" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["titulo6"]) ?>
              </h2>
              <div class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="conteudo6" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["conteudo6"]) ?>
              </div>
            </div>
            <div class="tab-pane fade" id="direito-militar" role="tabpanel" aria-labelledby="direito-militar-list">
              <h2 class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="titulo7" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["titulo7"]) ?>
              </h2>
              <div class="<?= $editavel ?>" data-local="area_atuacao" data-propriedade="conteudo7" data-conteudo="">
                <?= html_entity_decode($conteudoAreaAtuacao["conteudo7"]) ?>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>  
</div>
