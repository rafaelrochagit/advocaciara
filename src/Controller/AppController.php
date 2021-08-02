<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $path = APP. 'bd' . DS . "bd.json";
    public $bd = array();
    public $conteudoHome = array("titulo" => "", "subtitulo" => "");
    public $conteudoQuemSomos = array();
    public $conteudoAreaAtuacao = array();
    public $conteudoPublicacoes = array();
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        if($this->request->is('ajax') && $this->request->is('post')) {
			$this->autoRender=false;
		}
        $session = $this->request->getSession();
        $usuario = $session->read('Usuario');

        $editavel = '';
        $editavelSimples = '';
        if ($usuario) {
            $this->set('usuario', $usuario['usuario']);
            $editavel = 'editavel';
            $editavelSimples = 'editavelSimples';
        }
        $this->set('editavel', $editavel);
        $this->set('editavelSimples', $editavelSimples);

        $this->inicializaBd();
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function validateDate($date, $format = 'Y-m-d H:i:s')
    {
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    public function inicializaBd() 
    {
        $this->lerJson();
        if(!file_exists($this->path)) 
        {
            //$this->salvarJson();
        }
        $this->salvarJson();
        $this->set('conteudoHome', $this->conteudoHome);
        $this->set('conteudoQuemSomos', $this->conteudoQuemSomos);
        $this->set('conteudoAreaAtuacao', $this->conteudoAreaAtuacao);
        $this->set('conteudoPublicacoes', $this->conteudoPublicacoes);
    }

    public function lerJson()
    {
        if (file_exists($this->path)) {
            $bdJson = file_get_contents($this->path, true);
            $this->bd = json_decode($bdJson, true);
        } 
        $this->aplicaHome();
        $this->aplicaQuemSomos();
        $this->aplicaAreaAtuacao();
        $this->aplicaPublicacoes();
    } 

    public function salvarJson() {
        $bd["home"] = $this->conteudoHome;
        $bd["quem_somos"] = $this->conteudoQuemSomos;
        $bd["area_atuacao"] = $this->conteudoAreaAtuacao;
        $bd["publicacoes"] = $this->conteudoPublicacoes;
        $bdJson = json_encode($bd);
        file_put_contents($this->path, $bdJson);
    }

    public function aplicaHome()
    {
        $titulo = "RA ADVOCACIA";
        $subtitulo = "ASSESSORIA JURÍDICA";
        $instagram = "https://instagram.com/ADVOCACIARA";
        $whatsapp = "61982749910";
        $youtube = "https://www.youtube.com/channel/UChmZsNK1UDpOo_bGFytxLoA";
        $facebook = "https://www.facebook.com/ra.advocacia.midias";
        $conteudoHome = isset($this->bd["home"]) ? $this->bd["home"] : array();
        $this->conteudoHome["titulo"] = $this->aplicaOuInicializaComPadrao($conteudoHome, "titulo", $titulo);
        $this->conteudoHome["subtitulo"] = $this->aplicaOuInicializaComPadrao($conteudoHome, "subtitulo", $subtitulo);
        $this->conteudoHome["instagram"] = $this->aplicaOuInicializaComPadrao($conteudoHome, "instagram", $instagram);
        $this->conteudoHome["whatsapp"] = $this->aplicaOuInicializaComPadrao($conteudoHome, "whatsapp", $whatsapp);
        $this->conteudoHome["youtube"] = $this->aplicaOuInicializaComPadrao($conteudoHome, "youtube", $youtube);
        $this->conteudoHome["facebook"] = $this->aplicaOuInicializaComPadrao($conteudoHome, "facebook", $facebook);
    }

    public function aplicaQuemSomos()
    {
        $titulo = "Quem Somos";
        $icone = "fa-balance-scale";
        $paragrafo1 = "<b>RA ADVOCACIA</b> tem sua conduta baseada na Ética, tanto no relacionamento com o cliente quanto 
        com os demais integrantes da relação jurídica, atuando de forma estratégica na estruturação de teses jurídicas e na avaliação dos 
        riscos, em sintonia com os anseios da sociedade e do mundo globalizado.";
        $paragrafo2 = "Dr. Renato Araújo Jr, Advogado Criminalista, Pós-Graduado, OAB/DF 55.873, 
        possui mais 12 anos de experiência no serviço público (Federal e Estadual), 
        atua de forma prática e objetiva na advocacia criminal, inclusive em casos complexos.";
        $paragrafo3 = "Com objetivo de apresentar soluções rápidas, eficientes e seguras, tanto no contencioso quanto no preventivo. 
        RA Advocacia atua com Excelência na área Criminal, Cível e Administrativa.";
        $paragrafo4 = "Com atendimento de qualidade e alto nível. Conta com profissionais capacitados, em constante atualização, 
        possibilitando a integração do conhecimento em suas áreas de especialização, potencializando os resultados em favor do cliente.";
        $conteudoQuemSomos = isset($this->bd["quem_somos"]) ? $this->bd["quem_somos"] : array();
        $this->conteudoQuemSomos["titulo"] = $this->aplicaOuInicializaComPadrao($conteudoQuemSomos, "titulo", $titulo);
        $this->conteudoQuemSomos["icone"] = $this->aplicaOuInicializaComPadrao($conteudoQuemSomos, "icone", $icone);
        $this->conteudoQuemSomos["paragrafo1"] = $this->aplicaOuInicializaComPadrao($conteudoQuemSomos, "paragrafo1", $paragrafo1);
        $this->conteudoQuemSomos["paragrafo2"] = $this->aplicaOuInicializaComPadrao($conteudoQuemSomos, "paragrafo2", $paragrafo2);
        $this->conteudoQuemSomos["paragrafo3"] = $this->aplicaOuInicializaComPadrao($conteudoQuemSomos, "paragrafo3", $paragrafo3);
        $this->conteudoQuemSomos["paragrafo4"] = $this->aplicaOuInicializaComPadrao($conteudoQuemSomos, "paragrafo4", $paragrafo4);
    }

    public function aplicaAreaAtuacao()
    {
        $titulo = "Áreas de Atuação";

        $titulo1 = "ADVOCACIA CRIMINAL";
        $conteudo1 = "
        <p>Especializada. Busca enfaticamente a Excelência na defesa dos Direitos e garantias do cidadão, 
        durante a persecução penal em Juízo de primeiro e segundo grau ou em Tribunais Superiores. 
        O escritório produz alegações defensivas escritas e sustentações orais, além de: Audiências de Custódia, 
        Acompanhamento de Prisão em Flagrante e Inquérito Policial, Defesa em Ação Penal, Recursos Perante Tribunais Superiores, 
        Requerimento de Liberdade / Habeas Corpus, Sustentação Oral, Tribunal do Júri, entre outros.
        </p>".
        "<p>Atuamos na negociação e celebração de acordos de colaboração/delação premiada com o Ministério Público ou com a Autoridade Policial.
        </p>".
        "<p>Atuamos em inquéritos e processos criminais envolvendo associação criminosa e pertinência à organização criminosa (ORCRIM)
        </p>";
        
        $titulo2 = "DIREITO CIVIL";
        $conteudo2 = "Atuamos em diversas áreas do Direito Civil, para o patrocínio de causas de família, sucessões, responsabilidade civil e 
        contratos (empréstimos consignados de servidores entre outros), sempre comprometidos em alcançar com ética e afinco os objetivos dos clientes.";
        
        $titulo3 = "DIREITO DO TRABALHO";
        $conteudo3 = "O escritório atua fortemente na área do Direito do Trabalho, oferecendo ao cliente 
        ampla experiência no deslinde de questões coletivas ou individuais relativas aos empregados públicos e privados.";

        $titulo4 = "DIREITO ADMINISTRATIVO";
        $conteudo4 = "Experiência na área do Direito Administrativo, em defesa de empregados e servidores públicos, 
        bem como daqueles que se candidatam a cargos públicos. Atuamos no consultivo e no contencioso, desde a participação 
        em concursos públicos até a inatividade, defendendo o pleno gozo dos 
        direitos conferidos aos servidores e empregados públicos, bem como orientando-os ao longo de toda a sua trajetória profissional.";

        $titulo5 = "PROTEÇÃO E DEFESA DOS ANIMAIS";
        $conteudo5 = "<p>Escritório atua visando a garantia dos direitos animais, previstos em nosso ordenamento jurídico. 
        Diante da impossibilidade de o animal promover a sua própria defesa, o seu tutor (proprietário) ou uma associação protetora 
        dos animais (ONG) atuam em seu nome, com a assessoria e consultoria jurídica para promover a defesa dos direitos violados 
        ou em vias de serem violados.</p>
        <p>Em todas as situações são observados os mais altos padrões técnico-jurídicos e 
        éticos, exercendo uma advocacia com postura atuante perante as autoridades judiciárias.</p>";

        $titulo6 = "CORRESPONDENTES JURÍDICOS";
        $conteudo6 = "Atuamos em todos os Tribunais Superiores, Varas ou Órgãos públicos de todo Distrito Federal e entorno.
        Nossa equipe conta com Advogados Correspondentes que prestam os mais variados serviços como: audiências, 
        protocolos, assessorias jurídicas, diligências, cópias de processos, prepostos, despachos, acompanhamentos de julgamentos, entre outros. 
        Serviços com agilidade e eficiência prestados por profissionais que estão perto de onde está a demanda.";

        $titulo7 = "DIREITO MILITAR";
        $conteudo7 = "  <ul style='padding-left: 15px;'>
                            <li>Processo Penal Militar;</li>
                            <li>Processos Disciplinares e IPM;</li>
                            <li>Conselho de Justificação;</li>
                            <li>Conselhos de Disciplina.</li>
                        </ul>
                        <p>
                        Assessoria jurídica específica para Policiais e Bombeiros Militares. 
                        Atuamos em todos os níveis do contencioso e judicial relativaso aos processos administrativos e judiciais militares.
                        </p>";

        $conteudoAreaAtuacao = isset($this->bd["area_atuacao"]) ? $this->bd["area_atuacao"] : array();
        $this->conteudoAreaAtuacao["titulo"] = $this->aplicaOuInicializaComPadrao($conteudoAreaAtuacao, "titulo", $titulo);
        $this->conteudoAreaAtuacao["titulo1"] = $this->aplicaOuInicializaComPadrao($conteudoAreaAtuacao, "titulo1", $titulo1);
        $this->conteudoAreaAtuacao["conteudo1"] = $this->aplicaOuInicializaComPadrao($conteudoAreaAtuacao, "conteudo1", $conteudo1);
        $this->conteudoAreaAtuacao["titulo2"] = $this->aplicaOuInicializaComPadrao($conteudoAreaAtuacao, "titulo2", $titulo2);
        $this->conteudoAreaAtuacao["conteudo2"] = $this->aplicaOuInicializaComPadrao($conteudoAreaAtuacao, "conteudo2", $conteudo2);
        $this->conteudoAreaAtuacao["titulo3"] = $this->aplicaOuInicializaComPadrao($conteudoAreaAtuacao, "titulo3", $titulo3);
        $this->conteudoAreaAtuacao["conteudo3"] = $this->aplicaOuInicializaComPadrao($conteudoAreaAtuacao, "conteudo3", $conteudo3);
        $this->conteudoAreaAtuacao["titulo4"] = $this->aplicaOuInicializaComPadrao($conteudoAreaAtuacao, "titulo4", $titulo4);
        $this->conteudoAreaAtuacao["conteudo4"] = $this->aplicaOuInicializaComPadrao($conteudoAreaAtuacao, "conteudo4", $conteudo4);
        $this->conteudoAreaAtuacao["titulo5"] = $this->aplicaOuInicializaComPadrao($conteudoAreaAtuacao, "titulo5", $titulo5);
        $this->conteudoAreaAtuacao["conteudo5"] = $this->aplicaOuInicializaComPadrao($conteudoAreaAtuacao, "conteudo5", $conteudo5);
        $this->conteudoAreaAtuacao["titulo6"] = $this->aplicaOuInicializaComPadrao($conteudoAreaAtuacao, "titulo6", $titulo6);
        $this->conteudoAreaAtuacao["conteudo6"] = $this->aplicaOuInicializaComPadrao($conteudoAreaAtuacao, "conteudo6", $conteudo6);
        $this->conteudoAreaAtuacao["titulo7"] = $this->aplicaOuInicializaComPadrao($conteudoAreaAtuacao, "titulo7", $titulo7);
        $this->conteudoAreaAtuacao["conteudo7"] = $this->aplicaOuInicializaComPadrao($conteudoAreaAtuacao, "conteudo7", $conteudo7);
    }

    public function aplicaPublicacoes()
    {
        $titulo = "Publicações";
        $descricao = "Espaço destinado a publicações científicas de temas relacionados ao Direito e assuntos sociais de 
        relevância jurídica. Advogados, Bacharéis e acadêmicos de Direito podem submeter seus artigos científicos, 
        resenhas críticas e ensaios para publicação neste espaço. Nossa linha volta-se para a pesquisa do Direito em seus diversos ramos, 
        vertentes e metodologias, privilegiando aspectos práticos sem descuidar da teoria e da dogmática, estimulando, assim, 
        o debate acadêmico de alto nível e o pluralismo de ideias.";
        $arquivo1_titulo = "ASPECTOS ADMINISTRATIVOS DA PERSONALIDADE JURÍDICA SINDICAL";
        $arquivo1_descricao = "Por Renato Araújo Júnior, ADVOGADO.";
        $arquivo1_path = "webroot/arquivos/artigo1.pdf";
        $arquivo2_titulo = "Quando recorrer a uma Ação Judicial para revisão de Empréstimos?";
        $arquivo2_descricao = "Por Renato Araújo Júnior, ADVOGADO.";
        $arquivo2_path = "webroot/arquivos/artigo_consignados.pdf";
        $conteudoPublicacoes = isset($this->bd["publicacoes"]) ? $this->bd["publicacoes"] : array();
        $this->conteudoPublicacoes["titulo"] = $this->aplicaOuInicializaComPadrao($conteudoPublicacoes, "titulo", $titulo);
        $this->conteudoPublicacoes["descricao"] = $this->aplicaOuInicializaComPadrao($conteudoPublicacoes, "descricao", $descricao);
        $this->conteudoPublicacoes["arquivo1_titulo"] = $this->aplicaOuInicializaComPadrao($conteudoPublicacoes, "arquivo1_titulo", $arquivo1_titulo);
        $this->conteudoPublicacoes["arquivo1_descricao"] = $this->aplicaOuInicializaComPadrao($conteudoPublicacoes, "arquivo1_descricao", $arquivo1_descricao);
        $this->conteudoPublicacoes["arquivo1_path"] = $this->aplicaOuInicializaComPadrao($conteudoPublicacoes, "arquivo1_path", $arquivo1_path);
        $this->conteudoPublicacoes["arquivo2_titulo"] = $this->aplicaOuInicializaComPadrao($conteudoPublicacoes, "arquivo2_titulo", $arquivo2_titulo);
        $this->conteudoPublicacoes["arquivo2_descricao"] = $this->aplicaOuInicializaComPadrao($conteudoPublicacoes, "arquivo2_descricao", $arquivo2_descricao);
        $this->conteudoPublicacoes["arquivo2_path"] = $this->aplicaOuInicializaComPadrao($conteudoPublicacoes, "arquivo2_path", $arquivo2_path);
    }


  

    private function aplicaOuInicializaComPadrao($conteudo, $indice, $padrao = "")
    {
        return isset($conteudo[$indice]) ? $conteudo[$indice] : $padrao;
    }
}
