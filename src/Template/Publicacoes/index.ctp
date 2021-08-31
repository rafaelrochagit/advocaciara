<div class="container">
	<div class="wrapper">
		<div class="hoc container">
		  	<div class="col-m-12 text-center">
			    <h1 class="title-section"><i class="far fa-newspaper"></i> 
					<div class="<?= $editavel ?>" style="display: inline-block;"
					data-local="publicacoes" data-propriedade="titulo" data-conteudo="" >
						<?= html_entity_decode($conteudoPublicacoes["titulo"]) ?>
					</div>
				</h1>
			    <div class="col-sm-12 publicacao-subtitle <?= $editavel ?>" 
					data-local="publicacoes" data-propriedade="descricao" data-conteudo="">
			    	<?= html_entity_decode($conteudoPublicacoes["descricao"]) ?>
				</div>	
		    </div>
		    <div class="hoc container">
		    	<div class="row">
		    		<div class="col-md-6">
				      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
				        <div class="card-body d-flex flex-column align-items-start">
				        <strong class="d-inline-block mb-2 text-primary <?= $editavel ?>"
						 data-local="publicacoes" data-propriedade="arquivo1_titulo" data-conteudo="" >
						 	<?= html_entity_decode($conteudoPublicacoes["arquivo1_titulo"]) ?>
				    	</strong>
				          <h3 class="mb-3">
				            <a class="text-dark" href="#"></a>
				          </h3>
				          	<p class="card-text mb-auto  <?= $editavel ?>" 
							  data-local="publicacoes" data-propriedade="arquivo1_descricao" data-conteudo="">
						  		<?= html_entity_decode($conteudoPublicacoes["arquivo1_descricao"]) ?>
							</p>
				          <div class="div-text-link">
				          	<a href="<?=$this->request->webroot.$conteudoPublicacoes["arquivo1_path"] ?>" target="_blank">
				          		<i class="far fa-file-pdf"></i> Ver em formato pdf <i class="fa fa-angle-right"></i>
				          	</a>
							<?php if($editavel != ""): ?>
								<?= $this->Form->create(null, 
								['type' => 'file', 'url' => array('action' => 'salvarArquivo1'), 'enctype' => "multipart/form-data"]) ?>
									<?= $this->Form->file('arquivo'); ?>
									<button type="submit" class="btn btn-primary" onclick="showLoader()">Salvar</button>
								<?= $this->Form->end(); ?>
							<?php endif; ?>
				          </div>
				        </div>
				      </div>
				    </div>
				    <div class="col-md-6">
				      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
				        <div class="card-body d-flex flex-column align-items-start">
				        <strong class="d-inline-block mb-2 text-primary <?= $editavel ?>" 
						data-local="publicacoes" data-propriedade="arquivo2_titulo" data-conteudo="">
							<?= html_entity_decode($conteudoPublicacoes["arquivo2_titulo"]) ?>
						</strong>
				          <h3 class="mb-3">
				            <a class="text-dark" href="#"></a>
				          </h3>
				          	<p class="card-text mb-auto <?= $editavel ?>" 
							  data-local="publicacoes" data-propriedade="arquivo2_descricao" data-conteudo="">
						  		<?= html_entity_decode($conteudoPublicacoes["arquivo2_descricao"]) ?>
							</p>
				          <div class="div-text-link">
				          	<a href="#publicacoes">
				          		<a href="<?=$this->request->webroot.$conteudoPublicacoes["arquivo2_path"] ?>" target="_blank">
				          			<i class="far fa-file-pdf"></i> Ver em formato pdf <i class="fa fa-angle-right"></i>
				          		</a>
								<?php if($editavel != ""): ?>
									<?= $this->Form->create(null, 
									['type' => 'file', 'url' => array('action' => 'salvarArquivo2'), 'enctype' => "multipart/form-data"]) ?>
										<?= $this->Form->file('arquivo'); ?>
										<button type="submit" class="btn btn-primary" onclick="showLoader()">Salvar</button>
									<?= $this->Form->end(); ?>
								<?php endif; ?>
				          	</a>
				          </div>
				        </div>
				      </div>
				    </div>
		    	</div>
		    </div>
		</div>
	 </div>
</div>