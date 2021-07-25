<?php 
$phone_wpp = '5561982749910';
$text = 'Vim pelo site!';
$wpp_link = 'https://api.whatsapp.com/send?phone='.$phone_wpp.'&text='.$text; 
$wpp_link2 = 'https://api.whatsapp.com/send?phone='.$phone_wpp;
$youtube = 'https://www.youtube.com/channel/UChmZsNK1UDpOo_bGFytxLoA';
$instagram = 'https://instagram.com/ADVOCACIARA';
$facebook = 'https://www.facebook.com/ra.advocacia.midias';
?>
   <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- The social media icon bar -->
    <div class="icon-bar">
      <a href="<?=$instagram?>" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a> 
      <a href="<?=$wpp_link?>" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
      <a href="<?=$youtube?>" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a> 
      <a href="<?=$facebook?>" target="_blank" class="facebook"><i class="fab fa-facebook"></i></a> 
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
                <a href="<?=$wpp_link2?>" target='_blank'>
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
        <a data-toggle="modal" data-target="#loginModal" style="cursor:pointer;">Login</a><br>
           Desenvolvido por 
          <a target="_blank" href="https://rkrtech.com.br">
            <?=$this->html->image('logorkr.png', ['style' => 'width:65px;margin-left:10px;'])?>
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
        <?= $this->Form->create("Login", array('url' => "/login/entrar") )?>
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