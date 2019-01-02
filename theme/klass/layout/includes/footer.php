<?php
$footnote = theme_klass_get_setting('footnote', 'format_html');

$fburl    = theme_klass_get_setting('fburl');
$pinurl   = theme_klass_get_setting('pinurl');
$twurl    = theme_klass_get_setting('twurl');
$gpurl    = theme_klass_get_setting('gpurl');

$address  = theme_klass_get_setting('address');
$emailid  = theme_klass_get_setting('emailid');
$phoneno  = theme_klass_get_setting('phoneno');
$copyright_footer = theme_klass_get_setting('copyright_footer');
$infolink = theme_klass_get_setting('infolink');

?>
    <footer>
        <div class="row">
            <div class="columns small-12 small-12">
                <div class="footer">
                    <div class="row">
                        <div class="columns  medium-3 medium-order-1 medium-offset-0 small-8 small-offset-2 small-order-4">
                            <div class="logo-block">
                                <div class="logo-footer">

                                    <img src="/theme/klass/img/l.svg" alt="">
                                </div>
                                <p class="copirite">
                                    Сайт академии Дхарма-вичара.<br>
                                    Все права защищены. 2018
                                </p>
                            </div>
                        </div>
                        <div class="columns  medium-4 medium-order-2 small-12 small-order-2 ">
                            <div class="menu-footer">
                                <ul>
                                    <li>
                                        <div class="linck-1">
                                            <a href="#">
                                                Направления
                                                <div class="border"></div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="linck-1">
                                            <a href="#">
                                                Новости
                                                <div class="border"></div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="linck-1">
                                            <a href="theme/klass">
                                                О курсе
                                                <div class="border"></div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="linck-1">
                                            <a href="/theme/klass/calendar.html">
                                                События
                                                <div class="border"></div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="linck-1">
                                            <a href="#">
                                                Об академии
                                                <div class="border"></div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="linck-1">
                                            <a href="#">
                                                Библиотека
                                                <div class="border"></div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="columns  medium-2 medium-order-3 medium-offset-0 small-8 small-offset-2 small-order-1">
                            <div class="footer-media media-icon right">
                                <ul>
                                    <li>
                                        <a href="">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fab fa-vk"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="columns  medium-3 medium-order-4 small-12 small-order-3">
                            <div class="footer-contact">
                                <h4 class="title">
                                    Контакты "Всемирной Общины <br>Санатана Дхармы":

                                </h4>

                                <h5 class="phone">
                                    Трайлокьядеви<br>
                                    +38 097-415-1900
                                </h5>
                                <h5 class="email">
                                    <a href="mailto:sadhuloka@gmail.com">
                                        sadhuloka@gmail.com
                                    </a>

                                </h5>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>



    </footer>
<!--E.O.Footer-->

<?php  echo $OUTPUT->standard_end_of_body_html() ?>