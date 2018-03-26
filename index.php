
<?php get_header (); ?>
<section id="about" class="s_about bg_white" >
		<div class="section_header">
			<h2>Обо мне</h2>
			<div class="s_descr_wrap">
				<div class="s_descr">Познакомимся ближе</div>
			</div>
		</div>
		<div class="section_content">
			<div class="container">
				<div class="row">
					<div class="col-md-4 about_center col-md-push-4">
						<h3>Фото</h3>
						<div class="person">
							<a href="<?php echo get_template_directory_uri(); ?>/img/my_photo.jpg" class="popup"><img src="<?php echo get_template_directory_uri(); ?>/img/my_photo.jpg" alt="Alt" ></a>
						</div>
					</div>
					<div class="col-md-4 about_left col-md-pull-4">
						<h3>Немного о себе</h3>
						<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное ой дубликации "Здесь ваш текст.. </p>
						<p>Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem скрытой в середине абзаца.</p>
						<p>Давно выяснено, что при оценке дизайна </p>
					</div>
					<div class="col-md-4 about_right">
						<h3>Персональная информация</h3>
						<h2> Егор Синьков</h2>
						<ul>
							<li>Профессиональное создание сайтов: разработка дизайна, HTML верстка, посадка на CMS WordPress</li>
							<li>День рожденья: 7 октября 1994 года</li>
							<li>Номер телефона: <a href="tel:+3 8 093 700 38 75">+380937003875</a></li>
							<li>E-mail: <a href="mailto:egorkatornado@gmail.com">egorkatornado@gmail.com</a></li>
						</ul>
					
						<div class="social">
							<ul>
								<li><a href="tg://>" target="_blank"><i class="fa fa-paper-plane"></i></a></li>
								<li><a href="https://www.facebook.com/profile.php?id=100004614883523" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/ESinkov" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="skype:tornado.ukr" target="_blank"><i class="fa fa-skype"></i></a></li>
								<li><a href="https://github.com/yehorsinkov" target="_blank"><i class="fa fa-github"></i></a></li>
							</ul>
						</div>
					</div>
				
				</div>
			</div>
		</div>		
	</section>

<section id="standart" class="s_standart bg_light" >
		<div class="section_header">
			<h2>Стандарты</h2>
			<div class="s_descr_wrap">
				<div class="s_descr"> Работа с версткой </div>
			</div>
		</div>		
		<div class="section_content">
			<div class="container">
				<div class="row">

					<div class="col-md-6 col-sm-6  left " >
						<h3 class="title_left">Свойства</h3>
						<div >
							<div class="left_box">
								<h3 class="text_left">Кроссбраузерность<span class="fa fa-cog fa-2x"></span> </h3>
								<p>Сайт отображается и работает во всех популярных браузерах идентично, т.е. отсутствует развал верстки и материал отображается с одинаковой степенью читабельности.</p>
							</div>
						</div>
						<div >
							<div class="left_box">
								<h3 class="text_left">Адаптивность<span class="fa fa-desktop fa-2x"></span></h3>
								<p>Корректное отображение сайта на различных устройствах и его динамическое изменение под заданные размеры окна браузера.</p>
							</div>
						</div>
						<div >	
							<div 	class="left_box">
								<h3 class="text_left">Валидность<span class="fa fa-check-square-o fa-2x"></span></h3>
								<p>Это верстка, выполненная в соответствии со стандартами W3C.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6  right">
						<h3 class="title_right">Требования </h3>
						<div >
							<div class="right_box">
								<h3 class="text_right "><span class="fa fa-wordpress fa-2x"></span>Ориентация на WordPress</h3>
								<p>Верстка сайта впоследствии может быть легко внедрена программистом  систему WordPress без внесения правок и корректировок в сверстанный макет.</p>
							</div>
						</div>
						<div >
							<div class="right_box">
							
							<h3 class="text_right "> <span class="fa fa-clock-o fa-2x"></span>Соблюдение deadline</h3>
							<p>Работа всегда выполняется в оговоренные сроки.</p>
							</div>
						</div>
						<div >
							<div class="right_box">
								<h3 class="text_right "> <span class="fa fa-files-o fa-2x"> </span>Соответствие макету </h3>
								<p>Сайт полностью соответствует полученному от дизайнера/заказчика макету.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>

<!-- PORTFOLIO -->
	<section id="portfolio" class="s_portfolio bg_dark" >
		<div class="section_header">
			<h2>Портфолио</h2>
			<div class="s_descr_wrap">
				<div class="s_descr">Мои последние работы</div>
			</div>
		</div>
		<div class="section_content">
			<div class="container">
				<div class="row">
					<div class="filter_div controls">
						<ul>
							<li class="filter active" data-filter="all">Все работы</li>
							<li class="filter" data-filter=".category-1">Верстка</li>
							<li class="filter" data-filter=".category-2">Разработка</li>
						</ul>
					</div>
					<div id="portfolio_grid">
						<!-- ======================= Item 1 =================== -->
						<div class="mix col-md-4 col-sm-6 col-xs-12  portfolio_item category-1">
							<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/1.jpg" alt="Alt">
							<div class="port_item_cont">
								<h3>Cuda</h3>
								<p>Landing Page Cuda Описание</p>
								<a href="#work_1" class="popup_content">Посмотреть</a>
							</div>
							<div class="hidden">
								<div class="podrt_descr" id="work_1">
									<div class="modal-box-content">
										<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
										<h3><a href="<?php echo get_template_directory_uri(); ?>/cuda.php" target="_blank">Cuda</a></h3>
										<p>Landing Page Cuda Описание</p>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/1.jpg" alt="Alt" />
									</div>
								</div>
							</div>	
						</div>
 						<!-- ======================= Item 2 =================== -->
						<div class="mix col-md-4 col-sm-6 col-xs-12   portfolio_item category-1">
							<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/2.jpg" alt="Alt">
							<div class="port_item_cont">
								<h3>Работа</h3>
								<p>Описание работы</p>
								<a href="#work_2" class="popup_content">Посмотреть</a>
							</div>
							<div class="hidden">
								<div class="podrt_descr" id="work_2">
									<div class="modal-box-content">
										<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
										<h3><a href="#" target="_blank">Заголовок работы</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/2.jpg" alt="Alt" />
									</div>
								</div>
							</div>	
						</div>
						<!-- ======================= Item 3 =================== -->
						<div class="mix col-md-4 col-sm-6 col-xs-12   portfolio_item category-2">
							<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/3.jpg" alt="Alt">
							<div class="port_item_cont">
								<h3>Работа</h3>
								<p>Описание работы</p>
								<a href="#work_3" class="popup_content">Посмотреть</a>
							</div>
							<div class="hidden">
								<div class="podrt_descr" id="work_3">
									<div class="modal-box-content">
										<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
										<h3><a href="" target="_blank">Заголовок работа</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/3.jpg" alt="Alt" />
									</div>
								</div>
							</div>	
						</div>
						<!-- ======================= Item 4 =================== -->
						<div class="mix col-md-4 col-sm-6 col-xs-12   portfolio_item category-1">
							<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/4.jpg" alt="Alt">
							<div class="port_item_cont">
								<h3>Работа</h3>
								<p>Описание работы</p>
								<a href="#work_4" class="popup_content">Посмотреть</a>
							</div>
							<div class="hidden">
								<div class="podrt_descr" id="work_4">
									<div class="modal-box-content">
										<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
										<h3><a href="">Заголовок работы</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/4.jpg" alt="Alt" />
									</div>
								</div>
							</div>	
						</div>
						<!-- ======================= Item 5 =================== -->
						<div class="mix col-md-4 col-sm-6 col-xs-12   portfolio_item category-2">
							<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/5.jpg" alt="Alt">
							<div class="port_item_cont">
								<h3>Работа</h3>
								<p>Описание работы</p>
								<a href="#work_5" class="popup_content">Посмотреть</a>
							</div>
							<div class="hidden">
								<div class="podrt_descr" id="work_5">
									<div class="modal-box-content">
										<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
										<h3><a href="">	Заголовок работы</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/5.jpg" alt="Alt" />
									</div>
								</div>
							</div>	
						</div>
						<!-- ======================= Item 6 =================== -->
						<div class="mix col-md-4 col-sm-6 col-xs-12   portfolio_item category-1">
							<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/6.jpg" alt="Alt">
							<div class="port_item_cont">
								<h3>Работа</h3>
								<p>Описание работы</p>
								<a href="#work_6" class="popup_content">Посмотреть</a>
							</div>
							<div class="hidden">
								<div class="podrt_descr" id="work_6" >
									<div class="modal-box-content">
										<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
										<h3><a href="">	Заголовок работы</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum cupiditate, dignissimos quo. Dolore, omnis totam quibusdam voluptatibus cum, nulla dolores sunt iste? Sunt nam illum, animi magni veniam adipisci non.</p>
										<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-images/6.jpg" alt="Alt" />
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>			
	</section>

	
<!-- CONTACT -->
	<section id="contact" class="s_contact bg_light" >
		<div class="section_header">
			<h2>Контакты</h2>
			<div class="s_descr_wrap">
				<div class="s_descr">Связь со мной</div>
			</div>
		</div>
			
		<div class="section_content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 ">
						<div class="contact_box">
							<span class="contact_icon icon-basic-smartphone"></span>
							<h3>Телефон</h3>
							<p><a href="tel:+3 8 093 700 38 75">+380937003875</a></p>
						</div>
						<div class="contact_box">
							<span class="contact_icon icon-basic-webpage-img-txt"></span>
							<h3>Вебсайт</h3>
							<p><a href="esinkov.com" target="_blank">esinkov.com</a></p>
						</div>
						<div class="contact_box">
							<span class="contact_icon icon-basic-geolocalize-01"></span>
							<h3>Адрес</h3>
							<p>Город Киев</p>
						</div>
					</div>
					<div class="col-md-6  col-sm-6">
						<form id="form" action="https://formspree.io/egorkatornado@gmail.com" class="main_form" novalidate target="_blank" method="post">
							<label class="form-group">
								<span class="color_element">*</span> Ваше имя:
								<input type="text" name="name" placeholder="Ваше имя" data-validation-required-message="Вы не ввели имя" required />
								<span class="help-block text-danger"></span>
							</label>
							<label class="form-group">
								<span class="color_element">*</span> Ваш E-mail:
								<input type="email" name="email" placeholder="Ваш E-mail" data-validation-required-message="Не корректно введен E-mail" required />
								<span class="help-block text-danger"></span>
							</label>
							<label class="form-group">
								<span class="color_element">*</span> Ваше сообщение:
								<textarea name="message" placeholder="Ваше сообщение" data-validation-required-message="Вы не ввели сообщение" required></textarea>
								<span class="help-block text-danger"></span>
							</label>
							<button>Отправить</button>
						</form>	
					</div>
				</div>
			</div>
		</div>		
	</section>
<?php get_footer(); ?>
