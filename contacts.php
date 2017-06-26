<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

?>
<div class="main-inside">
            <div class="block2" style="width:auto;">
               <div id="content" >
                    <div id="contacts-title-word">
                        КОНТАКТЫ
                    </div>
                    <div id="contacts-email">
                        Единый e-mail: info@nordiceng.ru
                    </div>
                </div> 

            </div>
            <div class="delimiter"></div>
             <div class="block">
                 <div class="contacts-city-photo">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/contacts_moscow2.png" alt="Москва" />
                </div>
                 <div style="clear:both;"></div>
                <div class="contacts-city-adress">
                    <div class="contacts-city-adress-city">
                        Москва
                    </div>
                    <div style="clear:both;"></div>
                    <div class="contacts-city-adress-adress">
                        119019, Гоголевский б-р, д. 11<br/>
                        Тел: +7-(495)-287-35-00
                    </div>
                </div>
            </div>
             <div class="block">
                 <div class="contacts-city-photo">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/contacts_spb2.png" alt="Санкт Петербург" />
                </div>
                 <div style="clear:both;"></div>
                <div class="contacts-city-adress">
                    <div class="contacts-city-adress-city">
                        Санкт-Петербург
                    </div>
                    <div style="clear:both;"></div>
                    <div class="contacts-city-adress-adress">
                        195196, ул. Рижская, д. 3<br/>
                        Тел: +7-(812)-426-13-38
                    </div>
                </div>
            </div>
             <div class="block block-last in-developing">
                 <div class="contacts-city-photo">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/contacts_vld.png" alt="Владивосток" />
                     <span>планируется</span>
                </div>
                 <div style="clear:both;"></div>
                <div class="contacts-city-adress">
                    <div class="contacts-city-adress-city">
                        Владивосток
                    </div>
                    <div style="clear:both;"></div>
                    <div class="contacts-city-adress-adress">
                    </div>
                </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>