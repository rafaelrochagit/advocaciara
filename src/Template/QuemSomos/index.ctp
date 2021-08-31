<div class="row">
	<div class="col-lg-6 quem-somos-content">
		<h1 class="title-section">
			<i class="fa fontawesome-icon <?= $conteudoQuemSomos["icone"] ?> circle-no" style="margin-right:13px;"></i>
			<div class="<?= $editavel ?>" style="display: inline-block;" 
			data-local="quem_somos" data-propriedade="titulo" data-conteudo="">
				<?= html_entity_decode($conteudoQuemSomos["titulo"]) ?>
			</div>
		</h1>

		<p class="<?= $editavel ?>" data-local="quem_somos" data-propriedade="paragrafo1" data-conteudo="">
			<?= html_entity_decode($conteudoQuemSomos["paragrafo1"]) ?>
		</p>

		<p class="<?= $editavel ?>" data-local="quem_somos" data-propriedade="paragrafo2" data-conteudo="">
			<?= html_entity_decode($conteudoQuemSomos["paragrafo2"]) ?>
		</p>

		<p class="<?= $editavel ?>" data-local="quem_somos" data-propriedade="paragrafo3" data-conteudo="">
			<?= html_entity_decode($conteudoQuemSomos["paragrafo3"]) ?>
		</p>

		<p class="<?= $editavel ?>" data-local="quem_somos" data-propriedade="paragrafo4" data-conteudo="">
			<?= html_entity_decode($conteudoQuemSomos["paragrafo4"]) ?>
		</p>

	</div>
	<div class="col-lg-6 bg">
		<div class="col-sm-12 bglogo">
			<?= $this->Html->image($conteudoQuemSomos["imagem1_path"]); ?>
			<?php if($editavel != ""): ?>
				<?= $this->Form->create(null, 
				['type' => 'file', 'url' => array('action' => 'salvarImagem/1'), 'enctype' => "multipart/form-data", 'class'=> 'formQuemSomos']) ?>
					<?= $this->Form->file('imagem'); ?>
					<button type="submit" class="btn btn-primary" onclick="showLoader()">Salvar</button>
				<?= $this->Form->end(); ?>
			<?php endif; ?>
		</div>
		<div class="row quem-somos-imgs">
			<div class="col-sm-12">
				<?= $this->Html->image($conteudoQuemSomos["imagem2_path"]); ?>
				<?php if($editavel != ""): ?>
				<?= $this->Form->create(null, 
					['type' => 'file', 'url' => array('action' => 'salvarImagem/2'), 'enctype' => "multipart/form-data", 'class'=> 'formQuemSomos']) ?>
						<?= $this->Form->file('imagem'); ?>
						<button type="submit" class="btn btn-primary" onclick="showLoader()">Salvar</button>
					<?= $this->Form->end(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<style>
	.formQuemSomos {
		position: absolute;
		bottom: 0px;
		background: #adadad;
	}
</style>