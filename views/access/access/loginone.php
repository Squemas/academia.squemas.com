<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Academia de Capacitación Squemas</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
		<!--begin::Base Styles -->
		<link href="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_images']; ?>logos/favicon.ico" />
	</head>
	<!-- end::Head -->
	<!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url(<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_images']; ?>bg/bg-2.jpg);">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img src="<?Php echo $vParamsViewBackEndLayout['root_backend_layouts_images']; ?>logos/logo.svg" width="250">
							</a>
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">Ingresar a la Academia</h3>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="correo electrónico" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="contraseña" name="password">
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-right m-login__form-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">
											¿olvidaste tu contraseña?
										</a>
									</div>
								</div>
								<div class="m-login__form-action">
									<button type="submit" id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">
										ingresar
									</button>
								</div>
							</form>
						</div>
						<div class="m-login__signup">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Registrate a la Academia
								</h3>
								<div class="m-login__desc">
									Registra todos los datos que se piden:
								</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Nombres" name="fullname">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Apellidos" name="fullname">
								</div>                                
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Correo electrónioc" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="Contraseña" name="password">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="Repite Contraseña" name="password">
								</div>                                
								<div class="row form-group m-form__group m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--light">
											<input type="checkbox" name="agree">
											Estoy de acuerdo con
											<a href="#" class="m-link m-link--focus">
												Términos y Condiciones
											</a>
											.
											<span></span>
										</label>
										<span class="m-form__help"></span>
									</div>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">
										Registrarme
									</button>
									&nbsp;&nbsp;
									<button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">
										Cancelar
									</button>
								</div>
							</form>
						</div>
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">
									¿Olvisdaste tu contraseña?
								</h3>
								<div class="m-login__desc">
									Ingresa el correo electrónico para resetear la contraseña:
								</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Correo electrónico" name="email" id="m_email" autocomplete="off">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
										Enviar
									</button>
									&nbsp;&nbsp;
									<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">
										Cancelar
									</button>
								</div>
							</form>
						</div>
						<div class="m-login__account">
							<span class="m-login__account-msg">
								¿No tienes una cuenta aún?
							</span>
							&nbsp;&nbsp;
							<a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">
								Registrate
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
		<script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<script src="<?Php echo $vParamsViewBackEndLayout['root_backend_global_plugins']; ?>snippets/pages/user/login.js" type="text/javascript"></script>
	</body>
</html>
