<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Нордик Инжиниринг");
$APPLICATION->SetPageProperty("keywords", "главная, нордик инжиниринг");
$APPLICATION->SetPageProperty("description", "Главная страница");
$APPLICATION->SetTitle("Главная страница"); ?><!--<div class="carousel">
    <div class="carousel-info">
        <div class="carousel-info-inner">
            <div class="carousel-info__text">
                Мировой лидер в производстве<br/>
                высокотехнологичных и инновационных судов
                в области арктического судоходства
            </div>
            <div class="carousel-info__button">
                Подробнее
            </div>
        </div>
    </div>
</div>-->
<div class="main-video"></div>
<div class="about-company">
	<div class="about-company-text">
		<div class="about-company-text__caption">
			 О КОМПАНИИ
		</div>
		<div style="clear: both;">
		</div>
		<div class="about-company-text__logo">
		</div>
		<div style="clear: both;">
		</div>
		<div class="about-company-text__text">
			<div class="about-company-text__text-caption">
				 Высокотехнологичное судостроение
			</div>
			<div style="clear: both;">
			</div>
			<div class="about-company-text__text-text">
                Российская проектная компания АО «Нордик Инжиниринг» является частью крупнейшего немецкого судостроительного холдинга «НордикЯрдс Холдинг ГмбХ» и начала свою деятельность в 2009 году. Компания специализируется на анализе рынка судостроения, а также проектировании морских судов (совместно с «НордикЯрдс») для российских заказчиков и под требования российских квалифицированных обществ.
            </div>
			<div class="about-company-text__text-text">
                За долгие годы работы в составе немецкого судостроительного холдинга, в сотрудничестве с российскими заказчиками, ведомствами и классификационными обществами, инженеры компании наработали колоссальный опыт в области проектирования сложных морских конструкций, арктических судов и других объектов.
            </div>
            <div class="about-company-text__text-text">
                Важнейшим видом деятельности компании является инжиниринг. АО «Нордик Инжиниринг» решает сложные и амбициозные задачи, предоставляя услугу комплексного инжиниринга, в которую входит проработка проекта с учетом анализа места базирования судна, района плавания и особенностей эксплуатации.Решение этой сложной задачи позволяет заказчику минимизировать все технологические и экономические риски, связанные с работой построенного по проекту АО «Нордик Инжиниринг» судна.
            </div>
            <div class="about-company-text__text-text">
                Компания АО «Нордик Инжиниринг» предоставляет своим клиентам дополнительные услуги по аудиту судостроительных предприятий, поставкам уникального оборудования на строящиеся суда и сопровождению проекта на протяжении всего жизненного цикла. Компания имеет базу совместных наработанных проектов от буксиров до круизных судов.
            </div>
		</div>
	</div>
	<div class="about-company-images">
		<div class="about-company-images__image">
 <img src="/local/templates/sitetest/img/main_about_company_1.jpg" alt="Логотип">
		</div>
		<div class="about-company-images__image">
 <img src="/local/templates/sitetest/img/main_about_company_2.jpg" alt="Логотип">
		</div>
	</div>
</div>
<div style="clear: both;">
</div>
<div class="services">
	<div class="services__caption">
		 Услуги
	</div>
	<div style="clear: both;">
	</div>
<!--
	<div class="services__text">
		 Текстовый блок об услугах Текстовый блок об услугах Текстовый блок об услугах Текстовый блок об услугах Текстовый блок об услугах Текстовый блок об услугах
	</div>
-->
<div class="services-list services-list-main">
		 <?$ElementID = $APPLICATION->IncludeComponent(
        "bitrix:nordic.services",
        "def",
        Array(),
        false
    );?>
	</div>
</div>
<div class="last_news_ajax">
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>