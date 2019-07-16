<?php
    /* @var $this \Cake\View\View */
    //$this->Html->css('BootstrapUI.signin', ['block' => true]);
    $this->prepend('tb_body_attrs', ' class="' . implode(' ', [$this->request->getParam('controller'), $this->request->getParam('action')]) . '" ');
    $this->start('tb_body_start');
    /**
     * Default `flash` block.
     */
   
?>


    <body <?= $this->fetch('tb_body_attrs') ?>>

        

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Mercado de Cartón</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?=$this->fetch('tb_sidebar')?>
            </div>  
        </nav>

       

        <div class="container">
            <?php
            $this->end();

            $this->start('tb_body_end');
            echo '</body>';
            $this->end();

            $this->start('tb_footer');
            echo 'Hecho con amor';
            $this->end();

            $this->append('content', '</div>');
            echo $this->fetch('content');
            ?>
