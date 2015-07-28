<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="<?php echo URL::base(); ?>"><?php echo $title; ?></a>
			<div class="nav-collapse collapse">
				<? if(Auth::instance()->logged_in()):?>
				<p class="navbar-text pull-right">
	            Добро пожаловать, <?= Auth::instance()->get_user()->username.'!';?>
	            <a href='<?php echo URL::base(); ?>auth/logout'>Выход</a> | <a href='<?php echo URL::base(); ?>auth/hashpass'>Изменить пароль</a></p>
			    <? else:?>
					<p class="navbar-text pull-right">
					<a href="<?php echo URL::base(); ?>auth" class="navbar-link">Вход</a>
					</p>
			    <? endif;?>
				<ul class="nav">
					<li class="active"><a href="<?php echo URL::base(); ?>">Главная</a></li>
				</ul>
			</div> 
		</div>
	</div>
</div>
