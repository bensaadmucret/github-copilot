<?php use Core\Flash\Flash; ?>

<section class="section section-last color-scheme-3">
		<div class="container">			
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
                <?php echo '<h2>' . $title ?? 'Connexion</h2>';
                    echo '<h3>' . $message ?? ' Connexion </h3>';
                    echo'<div class="bg-red-500 text-gray-100 text-center ">'. 
                    Flash::getMessage('error') . '</div>'; ?>  

                    <?php echo $form; ?>
				</div>
			</div>
		</div>
	</section>


