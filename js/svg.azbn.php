
<div class="azbn-infra-block" >

<style>

.azbn-infra-block {
	margin:40px 0;
}

.clearboth {
	clear:both;
}

.azbn-svg-cont {
	max-width:991px;
	max-height:684px;
	width:100%;
	margin:0 auto 0 0;
}
/*@media (max-width: 1599px) and (min-width: 1400px)*/
@media (max-width: 1599px) {
	.azbn-svg-cont {
		max-width:65%;
	}
}
@media (max-width: 991px) {
	.azbn-svg-cont {
		max-width:100%;
		margin:0 auto;
	}
}

.azbn-svg-cont svg#azbn-svg .theme-block .black-area {
	opacity:0;
}
.azbn-svg-cont svg#azbn-svg .theme-block .theme-block-btn {
	opacity:0;
	overflow:visible;
	pointer-events: visible;
	cursor:pointer;
	transition:all 0.4s ease;
}

.azbn-svg-cont svg#azbn-svg .theme-block .desc-cont {
	//opacity:0;
	pointer-events: none;
	overflow:visible;
	fill:#ffffff;
	font-size:14px;
	font-family: Calibri;
	text-align: left;
	color:#ffffff;
	position:relative;
	transform-origin:0 0;
	transform:scale(0);
	transition-delay:0s;
	transition:all 0.4s ease;
}
@media (max-width: 1599px) {
	.azbn-svg-cont svg#azbn-svg .theme-block .desc-cont {
		display:none;
	}
}


.azbn-svg-cont svg#azbn-svg .theme-block .desc-line {
	stroke: #82b9d4;
	stroke-width: 2px;
	transform-origin:0 0;
	transform:scale(0);
	transition-delay:0s;
	transition:all 0.4s ease;
}
@media (max-width: 1599px) {
	.azbn-svg-cont svg#azbn-svg .theme-block .desc-line {
		display:none;
	}
}

.azbn-svg-cont svg#azbn-svg .theme-block .desc-cont .cont {
	background-color:rgba(0, 0, 0, 0.65);
	padding: 20px 16px;
}
.azbn-svg-cont svg#azbn-svg .theme-block .desc-cont .color-stick {
	content:'';
	display:none;
	position:fixed;
	left:0;
	top:0;
	width:2px;
	height:0px;
	background-color:#82b9d4;
	transition-delay:0.7s;
	transition:all 0.4s ease;
}
.azbn-svg-cont svg#azbn-svg .theme-block .desc-cont .title {
	font-size: 20px;
	font-weight: 700;
	text-transform:uppercase;
}
.azbn-svg-cont svg#azbn-svg .theme-block .desc-cont .desc {
	font-size: 18px;
	line-height:1.25em;
	margin-top:10px;
}
.azbn-svg-cont svg#azbn-svg .theme-block[data-hovered="1"] .desc-line {
	transform:scale(1);
	//opacity:1;
}
.azbn-svg-cont svg#azbn-svg .theme-block[data-hovered="1"] .desc-cont {
	transform:scale(1);
	//opacity:1;
}
.azbn-svg-cont svg#azbn-svg .theme-block[data-hovered="1"] .desc-cont .color-stick {
	/*height:175px;*/
	min-height:175px;
}
.azbn-svg-cont svg#azbn-svg .theme-block[data-hovered="1"] .desc-cont .cont {
	opacity:1;
}

.azbn-svg-cont svg#azbn-svg .theme-block[data-hovered="1"] .theme-block-btn {
	opacity:1;
}
.azbn-svg-cont svg#azbn-svg .theme-block .colored-border {
	opacity:0;
	pointer-events: none;
	display:inline;
	transition:all 0.4s ease;
}
.azbn-svg-cont svg#azbn-svg .theme-block[data-hovered="1"] .colored-border {
	opacity:0.53;
}

.azbn-service-list {
	float:right;
	position:relative;
	transition:all 0.4s ease;
}
@media (min-width: 992px) and (max-width: 1199px) {
	.azbn-service-list {
		min-height: 620px;
	}
}
@media (max-width: 991px) {
	.azbn-service-list {
		float:inherit;
	}
}

.azbn-service-list ul {
	margin:0;
	padding:0;
	position:absolute;
	right:0;
	top:0;
	transition:all 0.4s ease;
}
@media (max-width: 991px) {
	.azbn-service-list ul {
		position:relative;
	}
}


.azbn-service-list ul li {
	margin: 0 0 12px;
	padding:0;
	display:block;
	text-align: right;
}
@media (max-width: 991px) {
	.azbn-service-list ul li {
		text-align: left;
	}
}


.azbn-service-list ul li a {
	font-family: Calibri;
	color: #8cc7e2;
	font-size: 14px;
	font-weight: 400;
	letter-spacing: 0.7px;
	line-height: 19px;
	text-transform:uppercase;
	display:inline-block;
	white-space: nowrap;
	padding: 2px 14px;
	border-radius: 28px;
	border:1px transparent solid;
	transition:all 0.4s ease;
}
@media (max-width: 1599px) {
	.azbn-service-list ul li a {
		font-size: 12px;
	}
}

.azbn-service-list ul li.active a {
	color: #ffffff;
	border:1px #ffffff solid;
}

.azbn-service-list ul li .desc {
	font-size: 12px;
	padding-top:15px;
}
@media (min-width: 1599px) {
	.azbn-service-list ul li .desc {
		display:none;
	}
}


</style>


<div class="azbn-service-list" >
	<ul >
		<li><a href="#link" data-area-id="1" >Система холодоснабжения</a></li>
		<li><a href="#link" data-area-id="2" >Система электроснабжения</a></li>
		<li><a href="#link" data-area-id="4" >Система резервного гарантированного электроснабжения</a></li>
		<li><a href="#link" data-area-id="5" >Система автоматизации и диспетчеризации</a></li>
		<li><a href="#link" data-area-id="6" >Система газового пожаротушения</a></li>
		<li><a href="#link" data-area-id="3" >Система контроля доступа,<br />охранной сигнализации и видеонаблюдения</a></li>
		<li><a href="#link" data-area-id="7" >Фальшпол</a></li>
	</ul>
</div>

<!--
<div class="dropdown services-dropdown azbn-service-list ">
	<a data-toggle="dropdown" class="_btn" href="#"><span class="caret"></span> Инженерная инфраструктура</a>
	<div class="dropdown-menu" role="menu">
		<ul class="_inner">
			<li><a href="#link" data-area-id="1" >Система холодоснабжения</a></li>
			<li><a href="#link" data-area-id="2" >Система электроснабжения</a></li>
			<li><a href="#link" data-area-id="4" >Система резервного гарантированного электроснабжения</a></li>
			<li><a href="#link" data-area-id="5" >Система автоматизации и диспетчеризации</a></li>
			<li><a href="#link" data-area-id="6" >Система газового пожаротушения</a></li>
			<li><a href="#link" data-area-id="3" >Система контроля доступа, охранной сигнализации и видеонаблюдения</a></li>
			<li><a href="#link" data-area-id="7" >Фальшпол</a></li>
		</ul>
	</div>
</div>
-->



<div class="azbn-svg-cont" >
	<svg id="azbn-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1507 1040" style="enable-background:new 0 0 1507 1040;" xml:space="preserve">
		
		
		
		
		
		<g id="g-0" data-area-id="0" data-title="bg" render-order="0" >
			
			<image  width="1507" height="1040" id="XMLID_38_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/0/bg-grey.png"></image>
			
		</g>
		
		<g id="g-1" data-area-id="1" data-title="Система_холодоснабжения" class="theme-block" render-order="1" >
			
			<g class="colored-border" data-title="обводка" render-order="-1" >
				<image width="878" height="483" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/1/3.png" transform="matrix(1 0 0 1 293 57)"></image>
			</g>
			
			<g class="polygon-cont " render-order="1" >
				
				<defs><polygon id="pg-1-1" points="496.8,111.3 333.4,171.1 468.9,345.1 639,274 821,477 1118.2,342 1059,288 1059,282 998.5,220.5 993.5,221.5 951.5,181 952,174.5 895,118.5 664.5,211 663.5,228 616,245.5"></polygon></defs>
				<clippath id="cp-1-1" ><use xlink:href="#pg-1-1" ></use></clippath>
				<image class="theme-block-btn " style="clip-path:url(#cp-1-1);" width="1507" height="1040" id="XMLID_125_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/0/bg-color.jpg"></image>
				
			</g>
			
			<foreignObject class="desc-cont" x="700" y="600" width="650" >
				<body class="" xmlns="http://www.w3.org/1999/xhtml">
					<div class="color-stick" style="top:inherit;bottom:0;" ></div>
					<div class="cont" >
						<div class="title" >Система холодоснабжения</div>
						<div class="desc" >
							Бесперебойная работа высокотехнологичных объектов напрямую зависит от качеств системы кондиционирования и вентиляции. Мы сконцентрировали свой опыт в разработке и применении прецизионного оборудования для обеспечения высокой эффективности и надежности круглогодичного поддержания заданных параметров микроклимата в помещении.
							Гибкость решений и низкие эксплуатационные расходы придают дополнительные преимущества всей IT-инфраструктуре Заказчика.
						</div>
					</div>
				</body>
			</foreignObject>
			
			<g >
				<line class="desc-line" x1="700" y1="330" x2="700" y2="830" />
			</g>
			
		</g>
		
		<g id="g-2" data-area-id="2" data-title="Система_электроснабжения" class="theme-block" render-order="1" >
			
			<g class="colored-border" data-title="обводка" render-order="-1" >
				<image  width="620" height="597" id="XMLID_433_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/2/6.png" transform="matrix(1 0 0 1 151 121)"></image>
			</g>
			
			<g class=" polygon-cont" render-order="1" >
				<defs><polygon id="pg-2-1" points="343,167.2 484.5,342.4 325,404.2 193.5,223.3"></polygon></defs>
				<clippath id="cp-2-1"><use xlink:href="#pg-2-1" ></use></clippath>
				<image class="theme-block-btn " style="clip-path:url(#cp-2-1);" width="1507" height="1040" id="XMLID_4_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/0/bg-color.jpg"></image>
			</g>
			
			<g class=" polygon-cont" render-order="1" >
				<defs><polygon id="pg-2-2" points="614.2,361.6 649,404.2 649,446 680.1,432.3 715,476.1 715,494 378.9,644.7 358.7,652.6 	353.1,643.6 346.3,597.5 339,605.4 303.6,560.4 296.9,496.4"></polygon></defs>
				<clippath id="cp-2-2"><use xlink:href="#pg-2-2" ></use></clippath>
				<image class="theme-block-btn " style="clip-path:url(#cp-2-2);" width="1507" height="1040" id="XMLID_16_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/0/bg-color.jpg"></image>
			</g>
			
			<foreignObject class="desc-cont" x="800" y="300" width="700" >
				<body class="" xmlns="http://www.w3.org/1999/xhtml">
					<div class="color-stick" ></div>
					<div class="cont" >
						<div class="title" >Система электроснабжения</div>
						<div class="desc" >
							Непрерывность работы современного высокотехнологичного оборудования зависит от слаженной работы многих систем, нуждающихся в бесперебойном электропитании.<br />
							При проектировании и расчете объема системы электроснабжения учитываются все имеющиеся устройства : ИБП, генераторы, электронные преобразователи, устройства отопления, вентиляции и кондиционирования воздуха, освещения и т.п. Оценка потребностей в энергоснабжении должна делаться с учетом требуемой избыточности и будущего роста.<br />
							Наш департамент электроснабжения предлагает комплексные и энергоэффективные решения качественного электропитания технологичного объекта, что позволяет вашему бизнесу работать бесперебойно.
						</div>
					</div>
				</body>
			</foreignObject>
			
			<g >
				<line class="desc-line" x1="350" y1="300" x2="1500" y2="300" />
			</g>
			
		</g>
		
		<g id="g-3" data-area-id="3" data-title="Система_контроля_доступа_x2C__охранной_сигнализации_и_видеонаблюдения" class="theme-block" render-order="1" >
			
			<g class="colored-border" data-title="обводка" render-order="-1" >
				<g id="XMLID_49_" class="st5">	<image  width="213" height="148" id="XMLID_551_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/11.png" transform="matrix(1 0 0 1 697 542)"></image>
				</g>
				<g id="XMLID_50_" class="st5">	<image  width="209" height="157" id="XMLID_361_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/12.png" transform="matrix(1 0 0 1 702 565)"></image>
				</g>
				<g id="XMLID_51_" class="st5">	<image  width="125" height="124" id="XMLID_340_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/13.png" transform="matrix(1 0 0 1 714 407)"></image>
				</g>
				<g id="XMLID_52_" class="st5">	<image  width="99" height="111" id="XMLID_337_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/14.png" transform="matrix(1 0 0 1 587 236)"></image>
				</g>
				<g id="XMLID_53_" class="st5">	<image  width="102" height="109" id="XMLID_334_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/15.png" transform="matrix(1 0 0 1 588 239)"></image>
				</g>
				<g id="XMLID_55_" class="st5">	<image  width="103" height="116" id="XMLID_331_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/16.png" transform="matrix(1 0 0 1 589 240)"></image>
				</g>
				<g id="XMLID_56_" class="st5">	<image  width="107" height="110" id="XMLID_328_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/17.png" transform="matrix(1 0 0 1 585 245)"></image>
				</g>
				<g id="XMLID_57_" class="st5">	<image  width="102" height="118" id="XMLID_325_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/18.png" transform="matrix(1 0 0 1 582 247)"></image>
				</g>
				<g id="XMLID_58_" class="st5">	<image  width="99" height="114" id="XMLID_322_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/19.png" transform="matrix(1 0 0 1 582 250)"></image>
				</g>
				<g id="XMLID_63_" class="st5">	<image  width="110" height="109" id="XMLID_319_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/20.png" transform="matrix(1 0 0 1 570 254)"></image>
				</g>
				<g id="XMLID_64_" class="st5">	<image  width="103" height="121" id="XMLID_316_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/21.png" transform="matrix(1 0 0 1 567 234)"></image>
				</g>
				<g id="XMLID_65_" class="st5">	<image  width="99" height="125" id="XMLID_313_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/22.png" transform="matrix(1 0 0 1 569 237)"></image>
				</g>
				<g id="XMLID_66_" class="st5">	<image  width="109" height="117" id="XMLID_310_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/23.png" transform="matrix(1 0 0 1 569 246)"></image>
				</g>
				<g id="XMLID_68_" class="st5">	<image  width="99" height="119" id="XMLID_307_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/24.png" transform="matrix(1 0 0 1 571 242)"></image>
				</g>
				<g id="XMLID_69_" class="st5">	<image  width="110" height="115" id="XMLID_304_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/25.png" transform="matrix(1 0 0 1 581 228)"></image>
				</g>
				<g id="XMLID_70_" class="st5">	<image  width="106" height="108" id="XMLID_301_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/26.png" transform="matrix(1 0 0 1 579 232)"></image>
				</g>
				<g id="XMLID_71_" class="st5">	<image  width="99" height="111" id="XMLID_298_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/27.png" transform="matrix(1 0 0 1 181 392)"></image>
				</g>
				<g id="XMLID_72_" class="st5">	<image  width="105" height="109" id="XMLID_295_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/28.png" transform="matrix(1 0 0 1 185 392)"></image>
				</g>
				<g id="XMLID_73_" class="st5">	<image  width="109" height="113" id="XMLID_292_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/29.png" transform="matrix(1 0 0 1 195 395)"></image>
				</g>
				<g id="XMLID_74_" class="st5">	<image  width="103" height="120" id="XMLID_289_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/30.png" transform="matrix(1 0 0 1 200 401)"></image>
				</g>
				<g id="XMLID_76_" class="st5">	<image  width="102" height="116" id="XMLID_286_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/31.png" transform="matrix(1 0 0 1 198 404)"></image>
				</g>
				<g id="XMLID_78_" class="st5">	<image  width="121" height="110" id="XMLID_283_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/32.png" transform="matrix(1 0 0 1 176 409)"></image>
				</g>
				<g id="XMLID_79_" class="st5">	<image  width="107" height="112" id="XMLID_280_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/33.png" transform="matrix(1 0 0 1 169 404)"></image>
				</g>
				<g id="XMLID_80_" class="st5">	<image  width="102" height="118" id="XMLID_277_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/34.png" transform="matrix(1 0 0 1 170 393)"></image>
				</g>
				<g id="XMLID_81_" class="st5">	<image  width="101" height="108" id="XMLID_274_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/35.png" transform="matrix(1 0 0 1 178 391)"></image>
				</g>
				<g id="XMLID_82_" class="st5">	<image  width="99" height="110" id="XMLID_271_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/3/36.png" transform="matrix(1 0 0 1 183 390)"></image>
				</g>
			</g>
			
			<g class=" polygon-cont" render-order="1" >
				<defs><polygon id="pg-3-1" points="748.3,636.6 762,630 762,625 781.3,615.5 791,617.8 791,621 794,621.8 819.5,610.5 819.9,612.5 854,597.3 854,612 763.5,654.7"></polygon></defs>
				<clippath id="cp-3-1"><use xlink:href="#pg-3-1" ></use></clippath>
				<image class="theme-block-btn " style="clip-path:url(#cp-3-1);" width="1507" height="1040" id="XMLID_31_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/0/bg-color.jpg"></image>
			</g>
			
			<g class=" polygon-cont" render-order="1" >
				<defs><polygon id="pg-3-2" points="229,446 231,446 230,448.5 243.2,453.3 241.7,459.5 224.2,452.8 225.5,447.2 228.3,448.5"></polygon></defs>
				<clippath id="cp-3-2"><use xlink:href="#pg-3-2" ></use></clippath>
				<image class="theme-block-btn " style="clip-path:url(#cp-3-2);" width="1507" height="1040" id="XMLID_7_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/0/bg-color.jpg"></image>
			</g>
			
			<g class=" polygon-cont" render-order="1" >
				<defs><polygon id="pg-3-3" points="625.8,285.6 632.3,287.9 630.8,292 637,292 637,294 630.3,293.2 626.8,303.3 620,302"></polygon></defs>
				<clippath id="cp-3-3"><use xlink:href="#pg-3-3" ></use></clippath>
				<image class="theme-block-btn " style="clip-path:url(#cp-3-1);" width="1507" height="1040" id="XMLID_28_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/0/bg-color.jpg"></image>
			</g>
			
			<g class=" polygon-cont" render-order="1" >
				<defs><polygon id="pg-3-4" points="784,462 784,467 779.5,469 765,469 765,463"></polygon></defs>
				<clippath id="cp-3-4"><use xlink:href="#pg-3-4" ></use></clippath>
				<image class="theme-block-btn " style="clip-path:url(#cp-3-1);" width="1507" height="1040" id="XMLID_24_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/0/bg-color.jpg"></image>
			</g>
			
			<foreignObject class="desc-cont" x="900" y="250" width="600" >
				<body class="" xmlns="http://www.w3.org/1999/xhtml">
					<div class="color-stick" ></div>
					<div class="cont" >
						<div class="title" >Система контроля доступа, охранной сигнализации и видеонаблюдения</div>
						<div class="desc" >
							Каждый объект должен быть максимально защищен от постороннего проникновения. Современные технологии позволяют устанавливать передовые технологии систем контроля доступа, сигнализации и видеонаблюдения.<br />
							С помощью данных систем можно контролировать дату и время прохода сотрудников в помещения, идентифицировать сотрудников, отследить их перемещение по охраняемому объекту, разграничить доступ в помещения, вести базы данных сотрудников и посетителей, осуществлять визуальный контроль объекта в режиме реального времени, записывать и хранить информацию, создавать архивы видеозаписей и многое другое.<br />
							Безопасность объекта – прежде всего.
						</div>
					</div>
				</body>
			</foreignObject>
			
			<g >
				<line class="desc-line" x1="800" y1="615" x2="1500" y2="615"></line>
			</g>
			
		</g>
		
		<g id="g-4" data-area-id="4" data-title="Система_резервного_гарантированного_электроснабжения" class="theme-block" render-order="1" >
			
			<g class="colored-border" data-title="обводка" render-order="-1" >
				<g id="XMLID_84_" class="st5">	<image  width="227" height="288" id="XMLID_561_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/4/38.png" transform="matrix(1 0 0 1 155 170)"></image>
				</g>
				<g id="XMLID_85_" class="st5">	<image  width="206" height="159" id="XMLID_435_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/4/39.png" transform="matrix(1 0 0 1 167 343)"></image>
				</g>
				<g id="XMLID_86_" class="st5">	<image  width="115" height="219" id="XMLID_362_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/4/40.png" transform="matrix(1 0 0 1 168 390)"></image>
				</g>
				<g id="XMLID_87_" class="st5">	<image  width="227" height="291" id="XMLID_360_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/4/41.png" transform="matrix(1 0 0 1 64 311)"></image>
				</g>
				<g id="XMLID_88_" class="st5">	<image  width="118" height="216" id="XMLID_358_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/4/42.png" transform="matrix(1 0 0 1 45 213)"></image>
				</g>
				<g id="XMLID_89_" class="st5">	<image  width="104" height="159" id="XMLID_355_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/4/43.png" transform="matrix(1 0 0 1 53 270)"></image>
				</g>
				<g id="XMLID_91_" class="st5">	<image  width="106" height="151" id="XMLID_352_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/4/44.png" transform="matrix(1 0 0 1 55 269)"></image>
				</g>
				<g id="XMLID_92_" class="st5">	<image  width="207" height="148" id="XMLID_349_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/4/45.png" transform="matrix(1 0 0 1 47 175)"></image>
				</g>
			</g>
			
			<g class=" polygon-cont" render-order="1" >
				<defs><polygon id="pg-4-1" points="204,219 336,397.7 218,447.7 236,557 108.7,370.3 88,265"></polygon></defs>
				<clippath id="cp-4-1"><use xlink:href="#pg-4-1" ></use></clippath>
				<image class="theme-block-btn " style="clip-path:url(#cp-4-1);" width="1507" height="1040" id="XMLID_24_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/0/bg-color.jpg"></image>
			</g>
			
			<foreignObject class="desc-cont" x="500" y="300" width="700" >
				<body class="" xmlns="http://www.w3.org/1999/xhtml">
					<div class="color-stick" ></div>
					<div class="cont" >
						<div class="title" >Система резервного гарантированного электроснабжения</div>
						<div class="desc" >
							Для предотвращения остановки работы оборудования устанавливается резервный источник питания, чаще всего дизель-генераторная установка (ДГУ). В случае аварийной ситуации резервный дизель-генератор быстро запускается в автоматическом режиме, что позволяет сократить, а то и вовсе исключить, финансовые потери. При проектировании системы резервного электроснабжения важно правильно рассчитать мощность ДГУ для нормального функционирования объекта в целом.<br />
							Мы выделяем систему резервного гарантированного электроснабжения как систему, отвечающую за качество, надежность и безопасность электропитания ответственных потребителей.
						</div>
					</div>
				</body>
			</foreignObject>
			
			<g >
				<line class="desc-line" x1="200" y1="300" x2="1200" y2="300" />
			</g>
			
		</g>
		
		<g id="g-5" data-area-id="5" data-title="Система_автоматизации_и_диспетчеризации" class="theme-block" render-order="1" >
			
			<g class="colored-border" data-title="обводка" render-order="-1" >
				<g id="XMLID_94_">	<image  width="100" height="152" id="XMLID_564_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/47.png" transform="matrix(1 0 0 1 438 573)"></image>
				</g>
				<g id="XMLID_95_">	<image  width="155" height="199" id="XMLID_557_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/48.png" transform="matrix(1 0 0 1 421 622)"></image>
				</g>
				<g id="XMLID_96_">	<image  width="102" height="135" id="XMLID_436_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/49.png" transform="matrix(1 0 0 1 435 572)"></image>
				</g>
				<g id="XMLID_97_">	<image  width="246" height="168" id="XMLID_434_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/50.png" transform="matrix(1 0 0 1 438 505)"></image>
				</g>
				<g id="XMLID_98_">	<image  width="101" height="156" id="XMLID_432_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/51.png" transform="matrix(1 0 0 1 584 503)"></image>
				</g>
				<g id="XMLID_99_">	<image  width="113" height="109" id="XMLID_430_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/52.png" transform="matrix(1 0 0 1 587 549)"></image>
				</g>
				<g id="XMLID_100_">	<image  width="115" height="140" id="XMLID_428_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/53.png" transform="matrix(1 0 0 1 603 550)"></image>
				</g>
				<g id="XMLID_101_">	<image  width="103" height="108" id="XMLID_426_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/54.png" transform="matrix(1 0 0 1 618 584)"></image>
				</g>
				<g id="XMLID_102_">	<image  width="97" height="130" id="XMLID_424_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/55.png" transform="matrix(1 0 0 1 620 589)"></image>
				</g>
				<g id="XMLID_103_">	<image  width="98" height="124" id="XMLID_422_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/56.png" transform="matrix(1 0 0 1 621 601)"></image>
				</g>
				<g id="XMLID_104_">	<image  width="101" height="104" id="XMLID_420_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/57.png" transform="matrix(1 0 0 1 620 604)"></image>
				</g>
				<g id="XMLID_105_">	<image  width="101" height="104" id="XMLID_418_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/58.png" transform="matrix(1 0 0 1 619 605)"></image>
				</g>
				<g id="XMLID_106_">	<image  width="99" height="102" id="XMLID_416_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/59.png" transform="matrix(1 0 0 1 621 612)"></image>
				</g>
				<g id="XMLID_107_">	<image  width="116" height="128" id="XMLID_414_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/60.png" transform="matrix(1 0 0 1 622 617)"></image>
				</g>
				<g id="XMLID_108_">	<image  width="262" height="179" id="XMLID_412_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/61.png" transform="matrix(1 0 0 1 478 642)"></image>
				</g>
				<g id="XMLID_109_">	<image  width="100" height="104" id="XMLID_410_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/62.png" transform="matrix(1 0 0 1 439 616)"></image>
				</g>
				<g id="XMLID_110_">	<image  width="100" height="105" id="XMLID_408_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/63.png" transform="matrix(1 0 0 1 436 606)"></image>
				</g>
				<g id="XMLID_111_">	<image  width="99" height="104" id="XMLID_406_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/64.png" transform="matrix(1 0 0 1 437 601)"></image>
				</g>
				<g id="XMLID_112_">	<image  width="99" height="104" id="XMLID_404_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/65.png" transform="matrix(1 0 0 1 436 594)"></image>
				</g>
				<g id="XMLID_113_">	<image  width="98" height="104" id="XMLID_402_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/66.png" transform="matrix(1 0 0 1 435 590)"></image>
				</g>
				<g id="XMLID_114_">	<image  width="98" height="104" id="XMLID_400_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/67.png" transform="matrix(1 0 0 1 435 582)"></image>
				</g>
				<g id="XMLID_115_">	<image  width="100" height="104" id="XMLID_398_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/68.png" transform="matrix(1 0 0 1 433 579)"></image>
				</g>
				<g id="XMLID_116_">	<image  width="99" height="104" id="XMLID_396_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/69.png" transform="matrix(1 0 0 1 435 575)"></image>
				</g>
				<g id="XMLID_117_">	<image  width="102" height="103" id="XMLID_394_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/70.png" transform="matrix(1 0 0 1 429 646)"></image>
				</g>
				<g id="XMLID_118_">	<image  width="100" height="102" id="XMLID_392_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/71.png" transform="matrix(1 0 0 1 432 648)"></image>
				</g>
				<g id="XMLID_119_">	<image  width="98" height="102" id="XMLID_390_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/72.png" transform="matrix(1 0 0 1 610 568)"></image>
				</g>
				<g id="XMLID_120_">	<image  width="99" height="103" id="XMLID_388_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/73.png" transform="matrix(1 0 0 1 613 573)"></image>
				</g>
				<g id="XMLID_121_">	<image  width="97" height="102" id="XMLID_386_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/74.png" transform="matrix(1 0 0 1 611 566)"></image>
				</g>
				<g id="XMLID_122_">	<image  width="99" height="103" id="XMLID_384_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/75.png" transform="matrix(1 0 0 1 584 506)"></image>
				</g>
				<g id="XMLID_123_">	<image  width="100" height="104" id="XMLID_382_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/76.png" transform="matrix(1 0 0 1 589 512)"></image>
				</g>
				<g id="XMLID_124_">	<image  width="100" height="102" id="XMLID_380_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/77.png" transform="matrix(1 0 0 1 588 518)"></image>
				</g>
				<g id="XMLID_130_">	<image  width="99" height="102" id="XMLID_378_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/78.png" transform="matrix(1 0 0 1 588 523)"></image>
				</g>
				<g id="XMLID_132_">	<image  width="98" height="102" id="XMLID_376_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/79.png" transform="matrix(1 0 0 1 590 529)"></image>
				</g>
				<g id="XMLID_137_">	<image  width="99" height="102" id="XMLID_374_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/80.png" transform="matrix(1 0 0 1 588 535)"></image>
				</g>
				<g id="XMLID_138_">	<image  width="98" height="102" id="XMLID_372_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/81.png" transform="matrix(1 0 0 1 590 549)"></image>
				</g>
				<g id="XMLID_140_">	<image  width="100" height="102" id="XMLID_370_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/82.png" transform="matrix(1 0 0 1 589 549)"></image>
				</g>
				<g id="XMLID_141_">	<image  width="99" height="104" id="XMLID_368_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/5/83.png" transform="matrix(1 0 0 1 590 543)"></image>
				</g>
			</g>
			
			<g class=" polygon-cont" render-order="1" >
				<defs><polygon id="pg-5-1" points="481.7,619.3 487,672.3 473,678 480,687 483,711.3 524.7,767.3 689.7,690.7 665,662 664,635 	669.3,632.3 646.3,600.3 634,604.7 633.3,551"></polygon></defs>
				<clippath id="cp-5-1"><use xlink:href="#pg-5-1" ></use></clippath>
				<image class="theme-block-btn " style="clip-path:url(#cp-5-1);" width="1507" height="1040" id="XMLID_4_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/0/bg-color.jpg"></image>
			</g>
			
			<foreignObject class="desc-cont" x="585" y="150" width="700" >
				<body class="" xmlns="http://www.w3.org/1999/xhtml">
					<div class="color-stick" ></div>
					<div class="cont" >
						<div class="title" >Система автоматизации и диспетчеризации</div>
						<div class="desc" >
							Современный высокотехнологичный объект представляет собой комплекс сложных инженерных систем. Внезапные неполадки и сбои в работе могут негативно отразиться на работе объекта в целом, и для быстрого и эффективного реагирования на любые внештатные ситуации приходят на помощь системы диспетчеризации и автоматизации.<br />
							С помощью данных систем Вы сможете установить централизованный мониторинг и управление инженерными системами, снизить расход энергоресурсов, оптимизировать работу инженерного оборудования, организовать разграничение доступа к информации, оперативно оповещать о неполадках оборудования, обеспечить автоматическое накопление и хранение информации о функционировании систем, повысить уровень комфорта технологичного объекта и многое другое.
						</div>
					</div>
				</body>
			</foreignObject>
			
			<g >
				<line class="desc-line" x1="585" y1="150" x2="585" y2="600"></line>
			</g>
			
		</g>
		
		<g id="g-6" data-area-id="6" data-title="Система_пожаротушения" class="theme-block" render-order="1" >
			
			<g class="colored-border" data-title="обводка" render-order="-1" >
				<g id="XMLID_144_">	<image  width="164" height="194" id="XMLID_566_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/85.png" transform="matrix(1 0 0 1 189 404)"></image>
				</g>
				<g id="XMLID_145_">	<image  width="135" height="205" id="XMLID_563_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/86.png" transform="matrix(1 0 0 1 254 383)"></image>
				</g>
				<g id="XMLID_146_">	<image  width="182" height="197" id="XMLID_560_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/87.png" transform="matrix(1 0 0 1 267 378)"></image>
				</g>
				<g id="XMLID_147_">	<image  width="159" height="201" id="XMLID_554_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/88.png" transform="matrix(1 0 0 1 298 372)"></image>
				</g>
				<g id="XMLID_148_">	<image  width="201" height="144" id="XMLID_548_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/89.png" transform="matrix(1 0 0 1 194 350)"></image>
				</g>
				<g id="XMLID_149_">	<image  width="198" height="141" id="XMLID_542_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/90.png" transform="matrix(1 0 0 1 298 312)"></image>
				</g>
				<g id="XMLID_150_">	<image  width="195" height="146" id="XMLID_536_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/91.png" transform="matrix(1 0 0 1 405 265)"></image>
				</g>
				<g id="XMLID_151_">	<image  width="121" height="116" id="XMLID_530_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/92.png" transform="matrix(1 0 0 1 390 303)"></image>
				</g>
				<g id="XMLID_152_">	<image  width="161" height="125" id="XMLID_524_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/93.png" transform="matrix(1 0 0 1 509 241)"></image>
				</g>
				<g id="XMLID_170_">	<image  width="103" height="117" id="XMLID_518_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/94.png" transform="matrix(1 0 0 1 592 235)"></image>
				</g>
				<g id="XMLID_171_">	<image  width="106" height="109" id="XMLID_512_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/95.png" transform="matrix(1 0 0 1 585 241)"></image>
				</g>
				<g id="XMLID_172_">	<image  width="188" height="137" id="XMLID_506_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/96.png" transform="matrix(1 0 0 1 503 252)"></image>
				</g>
				<g id="XMLID_173_">	<image  width="98" height="101" id="XMLID_500_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/97.png" transform="matrix(1 0 0 1 295 372)"></image>
				</g>
				<g id="XMLID_174_">	<image  width="117" height="122" id="XMLID_494_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/98.png" transform="matrix(1 0 0 1 293 375)"></image>
				</g>
				<g id="XMLID_175_">	<image  width="167" height="200" id="XMLID_488_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/99.png" transform="matrix(1 0 0 1 504 287)"></image>
				</g>
				<g id="XMLID_176_">	<image  width="170" height="196" id="XMLID_482_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/100.png" transform="matrix(1 0 0 1 490 293)"></image>
				</g>
				<g id="XMLID_177_">	<image  width="291" height="179" id="XMLID_479_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/101.png" transform="matrix(1 0 0 1 300 294)"></image>
				</g>
				<g id="XMLID_178_">	<image  width="107" height="107" id="XMLID_476_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/102.png" transform="matrix(1 0 0 1 293 368)"></image>
				</g>
				<g id="XMLID_179_">	<image  width="129" height="112" id="XMLID_474_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/103.png" transform="matrix(1 0 0 1 251 438)"></image>
				</g>
				<g id="XMLID_180_">	<image  width="104" height="136" id="XMLID_472_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/104.png" transform="matrix(1 0 0 1 252 453)"></image>
				</g>
				<g id="XMLID_181_">	<image  width="135" height="117" id="XMLID_470_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/105.png" transform="matrix(1 0 0 1 213 484)"></image>
				</g>
				<g id="XMLID_182_">	<image  width="113" height="118" id="XMLID_468_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/106.png" transform="matrix(1 0 0 1 198 483)"></image>
				</g>
				<g id="XMLID_231_">	<image  width="109" height="118" id="XMLID_466_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/107.png" transform="matrix(1 0 0 1 202 480)"></image>
				</g>
				<g id="XMLID_235_">	<image  width="108" height="122" id="XMLID_464_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/108.png" transform="matrix(1 0 0 1 203 478)"></image>
				</g>
				<g id="XMLID_239_">	<image  width="104" height="112" id="XMLID_462_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/109.png" transform="matrix(1 0 0 1 200 484)"></image>
				</g>
				<g id="XMLID_242_">	<image  width="101" height="117" id="XMLID_460_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/110.png" transform="matrix(1 0 0 1 200 464)"></image>
				</g>
				<g id="XMLID_245_">	<image  width="102" height="104" id="XMLID_458_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/111.png" transform="matrix(1 0 0 1 200 477)"></image>
				</g>
				<g id="XMLID_248_">	<image  width="100" height="104" id="XMLID_456_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/112.png" transform="matrix(1 0 0 1 200 474)"></image>
				</g>
				<g id="XMLID_251_">	<image  width="99" height="105" id="XMLID_454_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/113.png" transform="matrix(1 0 0 1 198 465)"></image>
				</g>
				<g id="XMLID_254_">	<image  width="100" height="104" id="XMLID_452_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/114.png" transform="matrix(1 0 0 1 193 452)"></image>
				</g>
				<g id="XMLID_257_">	<image  width="100" height="104" id="XMLID_450_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/115.png" transform="matrix(1 0 0 1 198 444)"></image>
				</g>
				<g id="XMLID_258_">	<image  width="99" height="104" id="XMLID_448_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/116.png" transform="matrix(1 0 0 1 196 437)"></image>
				</g>
				<g id="XMLID_261_">	<image  width="101" height="134" id="XMLID_446_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/117.png" transform="matrix(1 0 0 1 200 425)"></image>
				</g>
				<g id="XMLID_264_">	<image  width="99" height="118" id="XMLID_444_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/118.png" transform="matrix(1 0 0 1 196 423)"></image>
				</g>
				<g id="XMLID_267_">	<image  width="117" height="114" id="XMLID_442_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/6/119.png" transform="matrix(1 0 0 1 181 401)"></image>
				</g>
			</g>
			
			<g class=" polygon-cont" render-order="1" >
				<defs><path id="pg-6-1" d="M631.3,291.3c-1,0-395.3,161.2-395.3,161.2l3,4.4l10-3.6l1.7,3.7l-7,13l1,8l7.7,1.3l-3,6.2L256,529h-4	l9.3,14.7l37.3-14.7l-4.7-34l35.7-16.7l-4.3-19.3l-3-4.2l-3.7-1.8H317l-1.7-5.3l-3.7,2.7l-4.3,1.7l-2.7-6.3l6.3-7.3l1.3-5	l-0.7-5.7l16-6.3l69,93.3l4.3-3l-69-92.3L537.3,335l73,87.3l2.7-1L541,334l93-37.3L631.3,291.3z"></path></defs>
				<clippath id="cp-6-1"><use xlink:href="#pg-6-1" ></use></clippath>
				<image class="theme-block-btn " style="clip-path:url(#cp-6-1);" width="1507" height="1040" id="XMLID_4_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/0/bg-color.jpg"></image>
			</g>
			
			<foreignObject class="desc-cont" x="290" y="50" width="700" >
				<body class="" xmlns="http://www.w3.org/1999/xhtml">
					<div class="color-stick" ></div>
					<div class="cont" >
						<div class="title" >Система газового пожаротушения</div>
						<div class="desc" >
							Безопасность объекта и непрерывная работа всех инженерных систем – первоочередная задача. Любое задымление может остановить работу объекта, что приведет к сбою или отказу работы оборудования. Чтобы не произошло подобного казуса необходимо заранее позаботиться о пожарной безопасности своего объекта.<br />
							Мы предлагаем устанавливать современную систему газового пожаротушения, обеспечивающую максимальную защиту и надежность.
						</div>
					</div>
				</body>
			</foreignObject>
			
			<g >
				<line class="desc-line" x1="290" y1="50" x2="290" y2="450"></line>
			</g>
			
		</g>
		
		<g id="g-7" data-area-id="7" data-title="Фальшпол" class="theme-block" render-order="1" >
			
			<g class="colored-border" data-title="обводка" render-order="-1" >
				<g id="XMLID_273_">	<image  width="99" height="116" id="XMLID_484_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/121.png" transform="matrix(1 0 0 1 185 499)"></image>
				</g>
				<g id="XMLID_276_">	<image  width="98" height="114" id="XMLID_487_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/122.png" transform="matrix(1 0 0 1 184 498)"></image>
				</g>
				<g id="XMLID_279_">	<image  width="100" height="103" id="XMLID_490_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/123.png" transform="matrix(1 0 0 1 182 499)"></image>
				</g>
				<g id="XMLID_282_">	<image  width="99" height="103" id="XMLID_493_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/124.png" transform="matrix(1 0 0 1 181 500)"></image>
				</g>
				<g id="XMLID_285_">	<image  width="99" height="104" id="XMLID_496_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/125.png" transform="matrix(1 0 0 1 180 504)"></image>
				</g>
				<g id="XMLID_288_">	<image  width="167" height="204" id="XMLID_499_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/126.png" transform="matrix(1 0 0 1 188 517)"></image>
				</g>
				<g id="XMLID_291_">	<image  width="171" height="208" id="XMLID_502_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/127.png" transform="matrix(1 0 0 1 262 627)"></image>
				</g>
				<g id="XMLID_294_">	<image  width="153" height="184" id="XMLID_505_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/128.png" transform="matrix(1 0 0 1 337 737)"></image>
				</g>
				<g id="XMLID_297_">	<image  width="134" height="150" id="XMLID_508_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/129.png" transform="matrix(1 0 0 1 395 825)"></image>
				</g>
				<g id="XMLID_300_">	<image  width="102" height="107" id="XMLID_511_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/130.png" transform="matrix(1 0 0 1 433 859)"></image>
				</g>
				<g id="XMLID_303_">	<image  width="103" height="107" id="XMLID_514_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/131.png" transform="matrix(1 0 0 1 433 852)"></image>
				</g>
				<g id="XMLID_306_">	<image  width="136" height="158" id="XMLID_517_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/132.png" transform="matrix(1 0 0 1 398 796)"></image>
				</g>
				<g id="XMLID_309_">	<image  width="139" height="165" id="XMLID_520_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/133.png" transform="matrix(1 0 0 1 361 741)"></image>
				</g>
				<g id="XMLID_312_">	<image  width="136" height="158" id="XMLID_523_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/134.png" transform="matrix(1 0 0 1 331 696)"></image>
				</g>
				<g id="XMLID_315_">	<image  width="145" height="168" id="XMLID_526_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/135.png" transform="matrix(1 0 0 1 294 645)"></image>
				</g>
				<g id="XMLID_318_">	<image  width="105" height="114" id="XMLID_529_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/136.png" transform="matrix(1 0 0 1 260 624)"></image>
				</g>
				<g id="XMLID_321_">	<image  width="141" height="157" id="XMLID_532_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/137.png" transform="matrix(1 0 0 1 270 607)"></image>
				</g>
				<g id="XMLID_324_">	<image  width="142" height="169" id="XMLID_535_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/138.png" transform="matrix(1 0 0 1 237 557)"></image>
				</g>
				<g id="XMLID_327_">	<image  width="148" height="172" id="XMLID_538_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/139.png" transform="matrix(1 0 0 1 204 508)"></image>
				</g>
				<g id="XMLID_330_">	<image  width="131" height="151" id="XMLID_541_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/140.png" transform="matrix(1 0 0 1 184 484)"></image>
				</g>
				<g id="XMLID_333_">	<image  width="127" height="141" id="XMLID_544_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/141.png" transform="matrix(1 0 0 1 186 517)"></image>
				</g>
				<g id="XMLID_336_">	<image  width="98" height="103" id="XMLID_547_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/142.png" transform="matrix(1 0 0 1 290 633)"></image>
				</g>
				<g id="XMLID_339_">	<image  width="108" height="123" id="XMLID_550_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/143.png" transform="matrix(1 0 0 1 261 589)"></image>
				</g>
				<g id="XMLID_342_">	<image  width="104" height="118" id="XMLID_553_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/144.png" transform="matrix(1 0 0 1 321 674)"></image>
				</g>
				<g id="XMLID_345_">	<image  width="115" height="128" id="XMLID_556_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/145.png" transform="matrix(1 0 0 1 390 784)"></image>
				</g>
				<g id="XMLID_348_">	<image  width="101" height="108" id="XMLID_559_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/146.png" transform="matrix(1 0 0 1 417 820)"></image>
				</g>
				<g id="XMLID_351_">	<image  width="97" height="102" id="XMLID_562_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/147.png" transform="matrix(1 0 0 1 322 671)"></image>
				</g>
				<g id="XMLID_354_">	<image  width="99" height="105" id="XMLID_565_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/7/148.png" transform="matrix(1 0 0 1 318 671)"></image>
				</g>
			</g>
			
			<g class=" polygon-cont" render-order="1" >
				<defs><polygon id="pg-7-1" points="232.7,545 235.3,559 474,911.7 474,897"></polygon></defs>
				<clippath id="cp-7-1"><use xlink:href="#pg-7-1" ></use></clippath>
				<image class="theme-block-btn " style="clip-path:url(#cp-7-1);" width="1507" height="1040" id="XMLID_4_" xlink:href="<?=SITE_TEMPLATE_PATH;?>/img/svg-img/0/bg-color.jpg"></image>
			</g>
			
			<foreignObject class="desc-cont" x="500" y="650" width="700" >
				<body class="" xmlns="http://www.w3.org/1999/xhtml">
					<div class="color-stick" ></div>
					<div class="cont" >
						<div class="title" >Фальшпол</div>
						<div class="desc" >
							Для комфортной разводки инженерных систем и расположения большого количества кабелей используется поднятый пол. Фальшпол – прочное, удобное покрытие, придает эстетичный вид на объекте.
						</div>
					</div>
				</body>
			</foreignObject>
			
			<g >
				<line class="desc-line" x1="300" y1="650" x2="1200" y2="650" />
			</g>
			
		</g>
		
	</svg>
</div>

<div class="clearboth" ></div>

</div>
