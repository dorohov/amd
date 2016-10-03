<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Инженерная инфраструктура");
?>


<div class="body-inner second">

<?

$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/tpl/_/preloader/index.php',
		'EDIT_TEMPLATE' => '',
	),
false
);

?>

<?

$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/tpl/_/navbar/second.php',
		'EDIT_TEMPLATE' => '',
	),
false
);

?>

<div class="infrastructure-page-content content-site " style="min-height: auto !important;" >	
	<div class="container"> 
		<h1 class="heading-site">Инженерная инфраструктура для технологичных помещений</h1>	
	</div>
</div>



<div class="infrastructure-page-content content-site second" style="background-image:url(<?=SITE_TEMPLATE_PATH;?>/img/infrastructure/texture.png);background-position:center center; background-repeat:repeat;" >	
	<div class="container"  > 
		
<?
include('svg.azbn.php');
?>
		
		
		<!--
		<div class="_sipc__notsmart">
			<div class="tabs-site">
				<ul>				
					<li class="active"><a href="#sipc-item1" data-toggle="tab">Система холодоснабжения</a></li>
					<li><a href="#sipc-item2" data-toggle="tab">Система электроснабжения</a></li>
					<li><a href="#sipc-item3" data-toggle="tab">Система резервного гарантированного электроснабжения</a></li>
					<li><a href="#sipc-item4" data-toggle="tab">Система автоматизации и диспетчеризации</a></li>
					<li><a href="#sipc-item5" data-toggle="tab">Система газового пожаротушения</a></li>
					<li><a href="#sipc-item6" data-toggle="tab">Система контроля доступа, охранной сигнализации и видеонаблюдения</a></li>
					<li><a href="#sipc-item7" data-toggle="tab">Фальшпол</a></li>
				</ul>
			</div> 
			<div class="tab-content _sipc__content">
				<div class="tab-pane active" id="sipc-item1">
					<div class="_sipc__block azbn-infrast-block">
						<img src="<?=SITE_TEMPLATE_PATH;?>/img/infrastructure/item1.png" alt="">
						<div class="_sipc__note">
							<h4>Система холодоснабжения</h4>
							<div>Бесперебойная работа высокотехнологичных объектов напрямую зависит от качеств системы кондиционирования и вентиляции. Мы сконцентрировали свой опыт в разработке и применении прецизионного оборудования для обеспечения высокой эффективности и надежности круглогодичного поддержания заданных параметров микроклимата в помещении.</div>
							<div>Гибкость решений и низкие эксплуатационные расходы придают дополнительные преимущества всей IT-инфраструктуре Заказчика.</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="sipc-item2">
					<div class="_sipc__block azbn-infrast-block">
						<img src="<?=SITE_TEMPLATE_PATH;?>/img/infrastructure/item2.png" alt="">
						<div class="_sipc__note">
							<h4>Система электроснабжения</h4>
							<div>Непрерывность работы современного высокотехнологичного оборудования зависит от слаженной работы многих систем, нуждающихся в бесперебойном электропитании. </div>
							<div>При проектировании и расчете объема системы электроснабжения учитываются все имеющиеся устройства : ИБП, генераторы, электронные преобразователи, устройства отопления, вентиляции и кондиционирования воздуха, освещения и т.п. Оценка потребностей в энергоснабжении должна делаться с учетом требуемой избыточности и будущего роста.</div>
							<div>Наш департамент электроснабжения предлагает комплексные и энергоэффективные решения качественного электропитания технологичного объекта, что позволяет вашему бизнесу работать бесперебойно.</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="sipc-item3">
					<div class="_sipc__block azbn-infrast-block">
						<img src="<?=SITE_TEMPLATE_PATH;?>/img/infrastructure/item3.png" alt="">
						<div class="_sipc__note">
							<h4>Система резервного гарантированного электроснабжения</h4>
							<div>Для предотвращения остановки работы оборудования устанавливается резервный источник питания, чаще всего дизель-генераторная установка (ДГУ). В случае аварийной ситуации резервный дизель-генератор быстро запускается в автоматическом режиме, что позволяет сократить, а то и вовсе исключить, финансовые потери. При проектировании системы резервного электроснабжения важно правильно рассчитать мощность ДГУ для нормального функционирования объекта в целом.</div>
							<div>Мы выделяем систему резервного гарантированного электроснабжения как систему, отвечающую за качество, надежность и безопасность электропитания ответственных потребителей.</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="sipc-item4">
					<div class="_sipc__block azbn-infrast-block">
						<img src="<?=SITE_TEMPLATE_PATH;?>/img/infrastructure/item4.png" alt="">
						<div class="_sipc__note">
							<h4>Система автоматизации и диспетчеризации</h4>
							<div>Современный высокотехнологичный объект представляет собой комплекс сложных инженерных систем. Внезапные неполадки и сбои в работе могут негативно отразиться на работе объекта в целом, и для быстрого и эффективного реагирования на любые внештатные ситуации приходят на помощь системы диспетчеризации и автоматизации.</div>
							<div>С помощью данных систем Вы сможете установить централизованный мониторинг и управление инженерными системами, снизить расход энергоресурсов, оптимизировать работу инженерного оборудования, организовать разграничение доступа к информации, оперативно оповещать о неполадках оборудования, обеспечить автоматическое накопление и хранение информации о функционировании систем, повысить уровень комфорта технологичного объекта и многое другое.</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="sipc-item5">
					<div class="_sipc__block azbn-infrast-block">
						<img src="<?=SITE_TEMPLATE_PATH;?>/img/infrastructure/item5.png" alt="">
						<div class="_sipc__note">
							<h4>Система газового пожаротушения</h4>
							<div>Безопасность объекта и непрерывная работа всех инженерных систем – первоочередная задача. Любое задымление может остановить работу объекта, что приведет к сбою или отказу работы оборудования. Чтобы не произошло подобного казуса необходимо заранее позаботиться о пожарной безопасности своего объекта.</div>
							<div>Мы предлагаем устанавливать современную систему газового пожаротушения, обеспечивающую максимальную защиту и надежность.</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="sipc-item6">
					<div class="_sipc__block azbn-infrast-block">
						<img src="<?=SITE_TEMPLATE_PATH;?>/img/infrastructure/item6.png" alt="">
						<div class="_sipc__note">
							<h4>Система контроля доступа, охранной сигнализации и видеонаблюдения</h4>
							<div>Каждый объект должен быть максимально защищен от постороннего проникновения. Современные технологии позволяют устанавливать передовые технологии систем контроля доступа, сигнализации и видеонаблюдения.</div>
							<div>С помощью данных систем можно контролировать дату и время прохода сотрудников в помещения, идентифицировать сотрудников, отследить их перемещение по охраняемому объекту, разграничить доступ в помещения, вести базы данных сотрудников и посетителей, осуществлять визуальный контроль объекта в режиме реального времени, записывать и хранить информацию, создавать архивы видеозаписей и многое другое.</div>
							<div>Безопасность объекта – прежде всего.</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="sipc-item7">
					<div class="_sipc__block azbn-infrast-block">
						<img src="<?=SITE_TEMPLATE_PATH;?>/img/infrastructure/item7.png" alt="">
						<div class="_sipc__note">
							<h4>Фальшпол</h4>
							<div>Для комфортной разводки инженерных систем и расположения большого количества кабелей используется поднятый пол. Фальшпол – прочное, удобное покрытие, придает эстетичный вид на объекте.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="_sipc__smart">
			<div class="panel-group _sipc__panel-group" id="accordion">
				<div class="panel _sipc__panel">
					<a class="_sipc__panel-heading" data-toggle="collapse" data-parent="#accordion" href="#xs-item1" aria-expanded="true">
						Система холодоснабжения
					</a>
					<div id="xs-item1" class="panel-collapse _sipc__panel-collapse collapse in">
						<div>Бесперебойная работа высокотехнологичных объектов напрямую зависит от качеств системы кондиционирования и вентиляции. Мы сконцентрировали свой опыт в разработке и применении прецизионного оборудования для обеспечения высокой эффективности и надежности круглогодичного поддержания заданных параметров микроклимата в помещении.</div>
						<div>Гибкость решений и низкие эксплуатационные расходы придают дополнительные преимущества всей IT-инфраструктуре Заказчика.</div>
					</div>
				</div>
				<div class="panel _sipc__panel">
					<a class="_sipc__panel-heading" data-toggle="collapse" data-parent="#accordion" href="#xs-item2" aria-expanded="false">
						Система электроснабжения
					</a>
					<div id="xs-item2" class="panel-collapse _sipc__panel-collapse collapse">						
						<div>Непрерывность работы современного высокотехнологичного оборудования зависит от слаженной работы многих систем, нуждающихся в бесперебойном электропитании. </div>
						<div>При проектировании и расчете объема системы электроснабжения учитываются все имеющиеся устройства : ИБП, генераторы, электронные преобразователи, устройства отопления, вентиляции и кондиционирования воздуха, освещения и т.п. Оценка потребностей в энергоснабжении должна делаться с учетом требуемой избыточности и будущего роста.</div>
						<div>Наш департамент электроснабжения предлагает комплексные и энергоэффективные решения качественного электропитания технологичного объекта, что позволяет вашему бизнесу работать бесперебойно.</div>
					</div>
				</div>
				<div class="panel _sipc__panel">
					<a class="_sipc__panel-heading" data-toggle="collapse" data-parent="#accordion" href="#xs-item3" aria-expanded="false">
						Система резервного гарантированного электроснабжения
					</a>
					<div id="xs-item3" class="panel-collapse _sipc__panel-collapse collapse">						
						<div>Для предотвращения остановки работы оборудования устанавливается резервный источник питания, чаще всего дизель-генераторная установка (ДГУ). В случае аварийной ситуации резервный дизель-генератор быстро запускается в автоматическом режиме, что позволяет сократить, а то и вовсе исключить, финансовые потери. При проектировании системы резервного электроснабжения важно правильно рассчитать мощность ДГУ для нормального функционирования объекта в целом.</div>
						<div>Мы выделяем систему резервного гарантированного электроснабжения как систему, отвечающую за качество, надежность и безопасность электропитания ответственных потребителей.</div>
					</div>
				</div>
				<div class="panel _sipc__panel">
					<a class="_sipc__panel-heading" data-toggle="collapse" data-parent="#accordion" href="#xs-item4" aria-expanded="false">
						Система автоматизации и диспетчеризации
					</a>
					<div id="xs-item4" class="panel-collapse _sipc__panel-collapse collapse">
						<div>Современный высокотехнологичный объект представляет собой комплекс сложных инженерных систем. Внезапные неполадки и сбои в работе могут негативно отразиться на работе объекта в целом, и для быстрого и эффективного реагирования на любые внештатные ситуации приходят на помощь системы диспетчеризации и автоматизации.</div>
						<div>С помощью данных систем Вы сможете установить централизованный мониторинг и управление инженерными системами, снизить расход энергоресурсов, оптимизировать работу инженерного оборудования, организовать разграничение доступа к информации, оперативно оповещать о неполадках оборудования, обеспечить автоматическое накопление и хранение информации о функционировании систем, повысить уровень комфорта технологичного объекта и многое другое.</div>
					</div>
				</div>
				<div class="panel _sipc__panel">
					<a class="_sipc__panel-heading" data-toggle="collapse" data-parent="#accordion" href="#xs-item5" aria-expanded="false">
						Система газового пожаротушения
					</a>
					<div id="xs-item5" class="panel-collapse _sipc__panel-collapse collapse">						
						<div>Безопасность объекта и непрерывная работа всех инженерных систем – первоочередная задача. Любое задымление может остановить работу объекта, что приведет к сбою или отказу работы оборудования. Чтобы не произошло подобного казуса необходимо заранее позаботиться о пожарной безопасности своего объекта.</div>
						<div>Мы предлагаем устанавливать современную систему газового пожаротушения, обеспечивающую максимальную защиту и надежность.</div>
					</div>
				</div>
				<div class="panel _sipc__panel">
					<a class="_sipc__panel-heading" data-toggle="collapse" data-parent="#accordion" href="#xs-item6" aria-expanded="false">
						Система контроля доступа, охранной сигнализации и видеонаблюдения
					</a>
					<div id="xs-item6" class="panel-collapse _sipc__panel-collapse collapse">
						<div>Каждый объект должен быть максимально защищен от постороннего проникновения. Современные технологии позволяют устанавливать передовые технологии систем контроля доступа, сигнализации и видеонаблюдения.</div>
						<div>С помощью данных систем можно контролировать дату и время прохода сотрудников в помещения, идентифицировать сотрудников, отследить их перемещение по охраняемому объекту, разграничить доступ в помещения, вести базы данных сотрудников и посетителей, осуществлять визуальный контроль объекта в режиме реального времени, записывать и хранить информацию, создавать архивы видеозаписей и многое другое.</div>
						<div>Безопасность объекта – прежде всего.</div>
					</div>
				</div>
				<div class="panel _sipc__panel">
					<a class="_sipc__panel-heading" data-toggle="collapse" data-parent="#accordion" href="#xs-item7" aria-expanded="false">
						Фальшпол
					</a>
					<div id="xs-item7" class="panel-collapse _sipc__panel-collapse collapse">						
						<div>Для комфортной разводки инженерных систем и расположения большого количества кабелей используется поднятый пол. Фальшпол – прочное, удобное покрытие, придает эстетичный вид на объекте.</div>
					</div>
				</div>
			</div>
		</div>
		-->
		
	</div>
</div>



<div class="infrastructure-page-content content-site " style="min-height: auto !important;" >	
	<div class="container"  > 
		
		<div class="dropdown services-dropdown">
			<a data-toggle="dropdown" class="_btn" href="#"><span class="caret"></span> Инженерная инфраструктура</a>
			<div class="dropdown-menu" role="menu">
				<ul class="_inner">
					<li><a href="/services/infrastructure/">Инженерная инфраструктура</a></li>
					<li><a href="/services/project/">Проект под ключ</a></li>
					<li><a href="/services/service/">Сервис</a></li>
					<li><a href="/services/consulting/">Инжиниринговый консалтинг</a></li>
				</ul>
			</div>
		</div>	
	</div>
</div>


</div>

<?

$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/tpl/_/footer/second.php',
		'EDIT_TEMPLATE' => '',
	),
false
);

?>


<?
/*
$APPLICATION->IncludeComponent(
	'azbn:footer.second',
	'',
	array(
		//'AREA_FILE_SHOW' => 'page',
		//'PATH' => '/bitrix/templates/azbnbitrixtheme/components/footer/second.php'
		//'AREA_FILE_SUFFIX' => 'headerinc',
		//'AREA_FILE_RECURSIVE' => 'Y',
		//'EDIT_MODE' => 'html',
		//'EDIT_TEMPLATE' => 'second_footer.php',
	),
	false
);
*/
?>

<?
/*
$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/tpl/_/footer/second.php',
		'EDIT_TEMPLATE' => '',
	),
false
);
*/
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>