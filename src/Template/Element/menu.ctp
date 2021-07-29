  <div id="topbar" class="clear">
    <nav id="menunav" class="navbar navbar-expand-lg navbar-light hover-underline-menu fl_left">
      <a id="logo_menu" class="navbar-brand" href="#top" style="display: none;">
        <img src='<?= $this->Url->image("logo.png") ?>' />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav menu">
          <li class="nav-item active">
            <a class="nav-link underline-from-center" href="#header">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link underline-from-center" href="#quem_somos"><?= html_entity_decode($conteudoQuemSomos["titulo"]) ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link underline-from-center" href="#area_atuacao"><?= html_entity_decode($conteudoAreaAtuacao["titulo"]) ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link underline-from-center" href="#publicacoes">Publicações</a>
          </li>
          <li class="nav-item">
            <a class="nav-link underline-from-center" href="#contato">Contato</a>
            <?php if (isset($usuario)) : ?>
              <li class="nav-item">
                <a id="logout" class="nav-link underline-from-center" href="#">Sair</a>
              </li>
              <script>
                $("#logout").click(function(){
                  window.location.href = "login/sair"
                });
              </script>
            <?php endif; ?>
        </li>
        </ul>
      </div>
    </nav>
  </div>