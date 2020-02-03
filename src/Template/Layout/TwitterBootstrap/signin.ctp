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


    

        
    <nav class="navbar navbar-expand-lg navbar-inverse static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a href="#" class="navbar-left">
                    <img style="height:55px"src="<?=$this->Url->image('MdC.png');?>">
                </a>
                
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <?= $this->fetch("tb_actions")?>                    
                </ul>       
                <?php if (!is_null($this->request->session()->read('Auth.User.username'))):?> 
                    <ul class="nav navbar-nav navbar-right"> 
                        <li>
                            <span class="navbar-text"> Hola, <?= $this->request->session()->read('Auth.User.first_name'). " " .$this->request->session()->read('Auth.User.last_name') ?></span>
                        </li>
                        <li>
                            <div class="btn-nav">
                                <a class="btn btn-primary btn-small navbar-btn" href="/Users/logout">Salir</a>
                            </div>
                        </li>
                    </ul>       
                        
                <?php endif;?>
                               
            </div>
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
