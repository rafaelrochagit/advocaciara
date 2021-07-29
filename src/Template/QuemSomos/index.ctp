<div class="row">
	<div class="col-lg-6 quem-somos-content">
		<h1 class="title-section">
			<i class="fa fontawesome-icon <?= $conteudoQuemSomos["icone"] ?> circle-no" style="margin-right:13px;"></i>
			<div class="<?= $editavel ?>" style="display: inline-block;" 
			data-local="quem_somos" data-propriedade="titulo" data-conteudo="<?= $conteudoQuemSomos["titulo"] ?>">
				<?= html_entity_decode($conteudoQuemSomos["titulo"]) ?>
			</div>
		</h1>

		<p class="<?= $editavel ?>" data-local="quem_somos" data-propriedade="paragrafo1" data-conteudo="<?= $conteudoQuemSomos["paragrafo1"] ?>">
			<?= html_entity_decode($conteudoQuemSomos["paragrafo1"]) ?>
		</p>

		<p class="<?= $editavel ?>" data-local="quem_somos" data-propriedade="paragrafo2" data-conteudo="<?= $conteudoQuemSomos["paragrafo2"] ?>">
			<?= html_entity_decode($conteudoQuemSomos["paragrafo2"]) ?>
		</p>

		<p class="<?= $editavel ?>" data-local="quem_somos" data-propriedade="paragrafo3" data-conteudo="<?= $conteudoQuemSomos["paragrafo3"] ?>">
			<?= html_entity_decode($conteudoQuemSomos["paragrafo3"]) ?>
		</p>

		<p class="<?= $editavel ?>" data-local="quem_somos" data-propriedade="paragrafo4" data-conteudo="<?= $conteudoQuemSomos["paragrafo4"] ?>">
			<?= html_entity_decode($conteudoQuemSomos["paragrafo4"]) ?>
		</p>

	</div>
	<div class="col-lg-6 bg">
		<div class="col-sm-12 bglogo">
			<?= $this->Html->image("backgrounds/bglogo1.jpg"); ?>
		</div>
		<div class="row quem-somos-imgs">
			<div class="col-sm-12">
				<?= $this->Html->image("quem-somos-1.png"); ?>
			</div>
		</div>
	</div>
</div>