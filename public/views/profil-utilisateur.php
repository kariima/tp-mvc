<?php ob_start(); ?>

<h1>Profil de l'utilisateur : </h1>

<div id="user-profile-2" class="user-profile">
		<div class="tabbable">
			<ul class="nav nav-tabs padding-18">
				<li class="active">
					<a data-toggle="tab" href="#home">
						<i class="green ace-icon fa fa-user bigger-120"></i>
						Profile
					</a>
				</li>
			</ul>

			<div class="tab-content no-border padding-24">
				<div id="home" class="tab-pane in active">
					<div class="row">
						<div class="col-xs-12 col-sm-3 center">
							<span class="profile-picture">
								<img class="editable img-responsive" alt=" Avatar" id="avatar2" src="">
							</span>

							<div class="space space-4"></div>


						<div class="col-xs-12 col-sm-9">
							<h4 class="blue">
								<span class="middle"><?= name surname ?></span>

								<span class="label label-purple arrowed-in-right">
									<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
									online
								</span>
							</h4>

							<div class="profile-user-info">
								<div class="profile-info-row">
									<div class="profile-info-name"><?= nom utilisateur ?> </div>

									<div class="profile-info-value">
										<span><?=  ?></span>
									</div>
								</div>

						
								<div class="profile-info-row">
									<div class="profile-info-name"> Joined </div>

									<div class="profile-info-value">
										<span>2010/06/20</span>
									</div>
								</div>

					<div class="space-20"></div>

					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="widget-box transparent">
								<div class="widget-header widget-header-small">
									<h4 class="widget-title smaller">
										<i class="ace-icon fa fa-check-square-o bigger-110"></i>
										Little About Me
									</h4>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										<p>
                                            Bio à créer
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /#home -->


	







<?php $content = ob_get_clean () ?> <?php view('template', compact('content')); ?>