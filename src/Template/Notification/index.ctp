<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>
<body>
    <div id="page-wrap">
        <div class="login-form">
            <div class="form-group log-status">
                <h1>Enviar solicitudes</h1>
                <?= $this->Form->create() ?>

                    <fieldset>
                        <div class="form-group ">
                            <?php
                        		echo $this->Form->input('Mensaje1', array('style'=>'width:270px',"label" => false,'placeholder'=>'Ingrese mensaje'));
                    		?>
                        </div>

                    </fieldset>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->submit(__('Registrarme'));
                        ?>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>
</html>
