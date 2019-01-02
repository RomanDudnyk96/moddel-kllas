<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package   theme_klass
 * @copyright 2015 LMSACE Dev Team,lmsace.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_klass_get_html_for_settings($OUTPUT, $PAGE);

if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}

$PAGE->requires->js('/theme/klass/javascript/bootstrap-carousel.js');
$PAGE->requires->js('/theme/klass/javascript/bootstrap-transition.js');
$courserenderer = $PAGE->get_renderer('core', 'course');

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="/theme/klass/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">

    <link rel="stylesheet" type="text/css" href="/theme/klass/css/main.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="/theme/klass/js/scripts.min.js"></script>
</head>

<body


    <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php  require_once(dirname(__FILE__) . '/includes/header.php');  ?>
<!--Custom theme header-->
<div class="">

    <div id="home-page" class="page">
        <div class="container fluid">


        </div>
        <div>
            <div class="block-background-img">
                <div class="row">
                    <div class="columns small-12  large-4 medium-8">
                        <div class="img">
                            <img src="/theme/klass/img/layer-4.png" alt="">
                            <img src="/theme/klass/img/layer-3.png" alt="">
                        </div>
                        <div class="add-kurs">
                            <a href="#">Присоединиться к курсу</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-first-stage">
            <div class="row mob">
                <div class="row">
                    <div class="columns small-12 medium-5 ">
                        <h3 class="title">
                            Первая ступень учений
                        </h3>
                    </div>
                    <div class="block-first-stage-bottom medium-3 medium-offset-4 columns">
                        <a href="#">Показать больше</a>
                    </div>
                </div>
                <div class=" orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
                    <div class="orbit-wrapper">
                        <div class="orbit-controls">
                            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                        </div>
                        <ul class="orbit-container">
                            <li class="is-active orbit-slide">
                                <div class="columns small-12 medium-4">
                                    <div class="block-stage first-block-active block-active">
                                    </div>
                                    <div class="first-block">
                                        <div class="two-block">
                                            <div class="img">
                                                <img src="/theme/klass/img/111.png" alt="logo">
                                            </div>
                                            <div class="text-block">
                                                <h6 class="title">
                                                    Курс открыт
                                                </h6>
                                                <h3 class="title">
                                                    «Базовый курс»
                                                </h3>
                                                <div>
                                                    <p>
                                                        Из курса «Базовое учение», разделенного на четыре части, можно узнать об основных постулатах Санатана Дхармы, единого вселенского закона существования нашей вселенной. Изучить «Катехизис садху ведической традиции», в котором отражены смыслы, ценности, цели человека, стремящегося жить дхармичной жизнью, а так-же, кто такой саддху – практикующий путь Освобождения. Узнать, что такое 4 осознанности, которые необходимо помнить и постоянно для себя прояснять в течении всей жизни. По каждой статье курса можно пройти тест, позволяющий определить уровень знаний по вопросу.
                                                    </p>
                                                </div>
                                                <div>
                                                    <ul>
                                                        <li class="title">
                                                            Уровень:
                                                        </li>
                                                        <li class="text">
                                                            Начальний
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title">
                                                            Времия прохождения:
                                                        </li>
                                                        <li class="text">
                                                            2 месяца
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="linck-1">
                                                    <a>
                                                        Зарегистрироваться
                                                        <div class="border"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="is-active orbit-slide">
                                <div class="columns small-12 medium-4">
                                    <div class="block-stage first-block-active block-active">
                                    </div>
                                    <div class="first-block">
                                        <div class="two-block">
                                            <div class="img">
                                                <img src="/theme/klass/img/y2.png" alt="logo">
                                            </div>
                                            <div class="text-block">
                                                <h6 class="title">
                                                    Курс открыт
                                                </h6>
                                                <h3 class="title">
                                                    «Базовый курс»
                                                </h3>
                                                <div>
                                                    <p>
                                                        Из второго курса вы можете узнать о структуре ведической Вселенной и какое место занимает наш мир в этом мироздании. Ограничениях сознания, какие малы(ограничения), клеши (загрязнения) закабалили наше сознание и как от них освобождаться. Какие существуют этапы омрачения сознания. Вы познакомитесь с очень глубоким исследованием закона кармы, и исходя из его понимания сможете проанализировать свою карму и все механизмы ее действия. Вы сможете изучить общие понятия учения Адвайта веданты: Признаки учения Адвайты, Учение об антахкарана панчаке, Типы тел в йоге сиддхов, Четыре уровня Учения сиддхов, Восьмиступенчатая Аштанга-йога Патанджали, Пракрийи Веданты: двадцать четыре таттвы и др.
                                                    </p>
                                                </div>
                                                <div>
                                                    <ul>
                                                        <li class="title">
                                                            Уровень:
                                                        </li>
                                                        <li class="text">
                                                            Начальний
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title">
                                                            Времия прохождения:
                                                        </li>
                                                        <li class="text">
                                                            2 месяца
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="linck-1">
                                                    <a>
                                                        Зарегистрироваться
                                                        <div class="border"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="is-active orbit-slide">
                                <div class="columns small-12 medium-4">
                                    <div class="block-stage first-block-active block-active">
                                    </div>
                                    <div class="first-block">
                                        <div class="two-block">
                                            <div class="img">
                                                <img src="/theme/klass/img/yoga-upward-planks-600-600-80-int.png" alt="logo">
                                            </div>
                                            <div class="text-block">
                                                <h6 class="title">
                                                    Курс открыт
                                                </h6>
                                                <h3 class="title">
                                                    «Базовый курс»
                                                </h3>
                                                <div>
                                                    <p>
                                                        Третий курс включает в себя учение об усмирении ума, переданное нам божеством Даттатрейей, риши Васиштхой и другими святыми.
                                                        Какие существуют типы живых существ в нашей вселенной. Эта информация уникальна тем, что мы узнаем какое место, занимает класс существ - люди во вселенской иерархии. Кто такие саддху, сиддхи, джняни, боги, стоящие в эволюционной лестнице выше уровня человека и куда нужно направлять свое сознание нам для духовной эволюции.
                                                        Гуру-йога – очень важная тема в жизни практикующих саддху. Какие бывают Гуру, как строятся отношения между Гуру и учениками, какими качествами должен обладать и Гуру и ученик, какие есть этапы в Гуру йоге.
                                                    </p>
                                                </div>
                                                <div>
                                                    <ul>
                                                        <li class="title">
                                                            Уровень:
                                                        </li>
                                                        <li class="text">
                                                            Начальний
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title">
                                                            Времия прохождения:
                                                        </li>
                                                        <li class="text">
                                                            1-2 года
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="linck-1">
                                                    <a>
                                                        Зарегистрироваться
                                                        <div class="border"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="is-active orbit-slide">
                                <div class="columns small-12 medium-4">
                                    <div class="block-stage first-block-active block-active">
                                    </div>
                                    <div class="first-block">
                                        <div class="two-block">
                                            <div class="img">
                                                <img src="/theme/klass/img/111.png" alt="logo">
                                            </div>
                                            <div class="text-block">
                                                <h6 class="title">
                                                    Курс открыт
                                                </h6>
                                                <h3 class="title">
                                                    «Базовый курс»
                                                </h3>
                                                <div>
                                                    <p>
                                                        В этом курсе вы сможете ознакомиться с выдержками из книг Свами Шивананды «Йога и сила мысли», «Бхакти-йога», «Медитация на Ом» и «Пути достижения успеха в жизни».
                                                    </p>
                                                </div>
                                                <div>
                                                    <ul>
                                                        <li class="title">
                                                            Уровень:
                                                        </li>
                                                        <li class="text">
                                                            Начальний
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title">
                                                            Времия прохождения:
                                                        </li>
                                                        <li class="text">
                                                            2 месяца
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="linck-1">
                                                    <a>
                                                        Зарегистрироваться
                                                        <div class="border"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="is-active orbit-slide">
                                <div class="columns small-12 medium-4">
                                    <div class="block-stage first-block-active block-active">
                                    </div>
                                    <div class="first-block">
                                        <div class="two-block">
                                            <div class="img">
                                                <img src="/theme/klass/img/y2.png" alt="logo">
                                            </div>
                                            <div class="text-block">
                                                <h6 class="title">
                                                    Курс открыт
                                                </h6>
                                                <h3 class="title">
                                                    «Праджня-янтра»
                                                </h3>
                                                <div>
                                                    <p>
                                                        Из курса «Праджня-янтра», в двух частях, можно почерпнуть знания, касающиеся работы с сознанием в Лайя-йоге, в частности, об общих понятиях Праджня-янтры, трех сущностных принципах, древе учения Лайя-йоги, пятеричной формуле самоосвобождения, ментальном самоосвобождении и шестнадцати стадиях нарастания луны внутреннего осознавания.
                                                    </p>
                                                </div>
                                                <div>
                                                    <ul>
                                                        <li class="title">
                                                            Уровень:
                                                        </li>
                                                        <li class="text">
                                                            Начальний
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title">
                                                            Времия прохождения:
                                                        </li>
                                                        <li class="text">
                                                            2 месяца
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="linck-1">
                                                    <a>
                                                        Зарегистрироваться
                                                        <div class="border"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="is-active orbit-slide">
                                <div class="columns small-12 medium-4">
                                    <div class="block-stage first-block-active block-active">
                                    </div>
                                    <div class="first-block">
                                        <div class="two-block">
                                            <div class="img">
                                                <img src="/theme/klass/img/yoga-upward-planks-600-600-80-int.png" alt="logo">
                                            </div>
                                            <div class="text-block">
                                                <h6 class="title">
                                                    Курс открыт
                                                </h6>
                                                <h3 class="title">
                                                    «Шакти-янтра»
                                                </h3>
                                                <div>
                                                    <p>Курс «Шакти-янтра» знакомит с основными понятиями, касающимися теории и практики работы с энергией, рассказывает о трех гунах, тонких телах, энергии Кундалини, узлах и чакрах, о месте, времени и условиях для йогической практики, о том, как преодолеть препятствия и болезни, о видениях и духовных опытах, а также содержит выдержки из книги Свами Шивананды «Кундалини-йога».</p>
                                                </div>
                                                <div>
                                                    <ul>
                                                        <li class="title">
                                                            Уровень:
                                                        </li>
                                                        <li class="text">
                                                            Начальний
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title">
                                                            Времия прохождения:
                                                        </li>
                                                        <li class="text">
                                                            2 месяца
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="linck-1">
                                                    <a>
                                                        Зарегистрироваться
                                                        <div class="border"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>



                            <li class="is-active orbit-slide">
                                <div class="columns small-12 medium-4">
                                    <div class="block-stage first-block-active block-active">
                                    </div>
                                    <div class="first-block">
                                        <div class="two-block">
                                            <div class="img">
                                                <img src="/theme/klass/img/111.png" alt="logo">
                                            </div>
                                            <div class="text-block">
                                                <h6 class="title">
                                                    Курс открыт
                                                </h6>
                                                <h3 class="title">
                                                    «Нидра-янтра»
                                                </h3>
                                                <div>
                                                    <p>
                                                        Курс «Нидра-янтра» рассказывает о понятиях, связанных с тонким телом человека и измерением тайджаса, об общем понимании принципа чистой страны, о янтре чистой страны, о взаимосвязи йоги чистой страны с йогой сновидений и йогой иллюзорного тела и о том, как выполняется базовая визуализация чистой страны и размещение главных божеств по сторонам света.
                                                    </p>
                                                </div>
                                                <div>
                                                    <ul>
                                                        <li class="title">
                                                            Уровень:
                                                        </li>
                                                        <li class="text">
                                                            Начальний
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title">
                                                            Времия прохождения:
                                                        </li>
                                                        <li class="text">
                                                            2 месяца
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="linck-1">
                                                    <a>
                                                        Зарегистрироваться
                                                        <div class="border"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="is-active orbit-slide">
                                <div class="columns small-12 medium-4">
                                    <div class="block-stage first-block-active block-active">
                                    </div>
                                    <div class="first-block">
                                        <div class="two-block">
                                            <div class="img">
                                                <img src="/theme/klass/img/y2.png" alt="logo">
                                            </div>
                                            <div class="text-block">
                                                <h6 class="title">
                                                    Курс открыт
                                                </h6>
                                                <h3 class="title">
                                                    «Методы»
                                                </h3>
                                                <div>
                                                    <p>
                                                        На курсе «Методы», в двух частях, можно обучиться практической стороне Лайя-йоги, освоить выполнение практики внешнего принятия Прибежища, молитвы Прибежища, Гуру-йоги с мантрой Ом, грубой и тонкой концентрации, наблюдению за телом, базовой практике ходьбы, ходьбы с мантрой Ом, практике укоренения, шат-карме, научиться выполнению асан, пранаям, мудр и бандх. Всего курс содержит около сорока различных практик, помогающих йогину очистить свои физическое и тонкие тела.
                                                    </p>
                                                </div>
                                                <div>
                                                    <ul>
                                                        <li class="title">
                                                            Уровень:
                                                        </li>
                                                        <li class="text">
                                                            Начальний
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title">
                                                            Времия прохождения:
                                                        </li>
                                                        <li class="text">
                                                            2 месяца
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="linck-1">
                                                    <a>
                                                        Зарегистрироваться
                                                        <div class="border"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="is-active orbit-slide">
                                <div class="columns small-12 medium-4">
                                    <div class="block-stage first-block-active block-active">
                                    </div>
                                    <div class="first-block">
                                        <div class="two-block">
                                            <div class="img">
                                                <img src="/theme/klass/img/yoga-upward-planks-600-600-80-int.png" alt="logo">
                                            </div>
                                            <div class="text-block">
                                                <h6 class="title">
                                                    Курс открыт
                                                </h6>
                                                <h3 class="title">
                                                    «Знание священных текстов»
                                                </h3>
                                                <div>
                                                    <p>Курс «Знание священных текстов» предлагает информацию о тройном каноне (прастхана-трайя) и текстах, которые в нем содержатся, о Шанти-мантре, а также о гимнах «Тотакаштакам», «Нирванаштакам» и «Рудраштакам».</p>
                                                </div>
                                                <div>
                                                    <ul>
                                                        <li class="title">
                                                            Уровень:
                                                        </li>
                                                        <li class="text">
                                                            Начальний
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title">
                                                            Времия прохождения:
                                                        </li>
                                                        <li class="text">
                                                            2 месяца
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="linck-1">
                                                    <a>
                                                        Зарегистрироваться
                                                        <div class="border"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="is-active orbit-slide">
                                <div class="columns small-12 medium-4">
                                    <div class="block-stage first-block-active block-active">
                                    </div>
                                    <div class="first-block">
                                        <div class="two-block">
                                            <div class="img">
                                                <img src="/theme/klass/img/111.png" alt="logo">
                                            </div>
                                            <div class="text-block">
                                                <h6 class="title">
                                                    Курс открыт
                                                </h6>
                                                <h3 class="title">
                                                    «Агиография»
                                                </h3>
                                                <div>
                                                    <p>
                                                        Из курса «Агиография» можно узнать об избранном божестве традиции Лайя-йоги Авадхуте Даттатрейе и его аватарах Шрипаде Шри Валлабхе и Нарасимхе Сарасвати, о Парамгуру традиции Свами Брахмананде Махарадже, а также о жизни великих риши, святых и сиддхов Санатана Дхармы, таких как Шри Ади Шанкарачарья, Матсиендранатх, Горакшанатх, Шри Рамана Махарши, Рамалинга Свамигал, Боганатар, Агастьяр, Сараха, Васиштха, Атри, Вишвамитра, Гаутама, Бхарадваджа, Джамадагни, Кашьяпа и Вьяса.
                                                    </p>
                                                </div>
                                                <div>
                                                    <ul>
                                                        <li class="title">
                                                            Уровень:
                                                        </li>
                                                        <li class="text">
                                                            Начальний
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title">
                                                            Времия прохождения:
                                                        </li>
                                                        <li class="text">
                                                            2 месяца
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="linck-1">
                                                    <a>
                                                        Зарегистрироваться
                                                        <div class="border"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="is-active orbit-slide">
                                <div class="columns small-12 medium-4">
                                    <div class="block-stage first-block-active block-active">
                                    </div>
                                    <div class="first-block">
                                        <div class="two-block">
                                            <div class="img">
                                                <img src="/theme/klass/img/y2.png" alt="logo">
                                            </div>
                                            <div class="text-block">
                                                <h6 class="title">
                                                    Курс открыт
                                                </h6>
                                                <h3 class="title">
                                                    «Мифология»
                                                </h3>
                                                <div>
                                                    <p>
                                                        Курс «Мифология» содержит информацию о божествах индуистского пантеона, среди которых Брахма, Вишну и Шива, их супруги Сарасвати, Лакшми и Парвати, о десяти аватарах Вишну, о Таре, Индре, Сурье, Агни, Ганеше и Айяппе.
                                                    </p>
                                                </div>
                                                <div>
                                                    <ul>
                                                        <li class="title">
                                                            Уровень:
                                                        </li>
                                                        <li class="text">
                                                            Начальний
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title">
                                                            Времия прохождения:
                                                        </li>
                                                        <li class="text">
                                                            2 месяца
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="linck-1">
                                                    <a>
                                                        Зарегистрироваться
                                                        <div class="border"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="is-active orbit-slide">
                                <div class="columns small-12 medium-4">
                                    <div class="block-stage first-block-active block-active">
                                    </div>
                                    <div class="first-block">
                                        <div class="two-block">
                                            <div class="img">
                                                <img src="/theme/klass/img/yoga-upward-planks-600-600-80-int.png" alt="logo">
                                            </div>
                                            <div class="text-block">
                                                <h6 class="title">
                                                    Курс открыт
                                                </h6>
                                                <h3 class="title">
                                                    «Этика»
                                                </h3>
                                                <div>
                                                    <p>Какие существуют этические правила и принципы в общине Санатана Дхармы. (Курс для тех, кто является членом общины)</p>
                                                </div>
                                                <div>
                                                    <ul>
                                                        <li class="title">
                                                            Уровень:
                                                        </li>
                                                        <li class="text">
                                                            Начальний
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class="title">
                                                            Времия прохождения:
                                                        </li>
                                                        <li class="text">
                                                            2 месяца
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="linck-1">
                                                    <a>
                                                        Зарегистрироваться
                                                        <div class="border"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>
                    <!--<nav class="orbit-bullets">-->
                    <!--<button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>-->
                    <!--<button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>-->
                    <!--<button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>-->

                    <!--</nav>-->
                </div>
            </div>
            <div class="comp">
                <div class="block-first-stage-top">
                    <div class="row">
                        <div class="columns small-12 medium-5 ">
                            <h3 class="title">
                                Первая ступень учений
                            </h3>
                        </div>
                        <div class="block-first-stage-bottom medium-3 medium-offset-4 columns">
                            <a href="#">Показать больше</a>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="columns small-12 medium-4">
                        <div class="block-stage first-block-active block-active">
                            <h6 class="title">
                                Курс открыт
                            </h6>
                            <h3 class="title">
                                «Бозовое учение»
                            </h3>
                            <div>
                                <ul>
                                    <li class="title">
                                        Уровень:
                                    </li>
                                    <li class="text">
                                        Начальний
                                    </li>
                                </ul>
                                <ul>
                                    <li class="title">
                                        Времия прохождения:
                                    </li>
                                    <li class="text">
                                        2 месяца
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>
                                    Из курса «Базовое учение», разделенного на четыре части, можно узнать об основных постулатах Санатана Дхармы, единого вселенского закона существования нашей вселенной.
                                    Изучить «Катехизис садху ведической традиции», в котором отражены смыслы, ценности, цели человека, стремящегося жить дхармичной жизнью, а так-же, кто такой саддху – практикующий путь Освобождения.
                                    Узнать, что такое 4 осознанности, которые необходимо помнить и постоянно для себя прояснять в течении всей жизни.
                                    По каждой статье курса можно пройти тест, позволяющий определить уровень знаний по вопросу.
                                </p>
                            </div>
                            <div class="toggle">
                                <div class="linck-1">
                                    <a>
                                        Свернуть
                                        <div class="border"></div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="first-block">
                            <div class="two-block">
                                <div class="img">
                                    <img src="/theme/klass/img/111.png" alt="logo">
                                </div>
                                <div class="text-block">
                                    <h6 class="title">
                                        Курс открыт
                                    </h6>
                                    <h3 class="title">
                                        «Базовый курс»
                                    </h3>
                                    <div>
                                        <ul>
                                            <li class="title">
                                                Уровень:
                                            </li>
                                            <li class="text">
                                                Начальний
                                            </li>
                                        </ul>
                                        <ul>
                                            <li class="title">
                                                Времия прохождения:
                                            </li>
                                            <li class="text">
                                                2 месяца
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="toggle">
                                        <div class="linck-1">
                                            <a>
                                                Узнать подробнее
                                                <div class="border"></div>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="columns small-12 medium-4">
                        <div class="block-stage two-block-active block-active">
                            <h6 class="title">
                                Курс открыт
                            </h6>
                            <h3 class="title">
                                «Бозовое учение»
                            </h3>
                            <div>
                                <ul>
                                    <li class="title">
                                        Уровень:
                                    </li>
                                    <li class="text">
                                        Начальний
                                    </li>
                                </ul>
                                <ul>
                                    <li class="title">
                                        Времия прохождения:
                                    </li>
                                    <li class="text">
                                        2 месяца
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>
                                    Из второго курса вы можете узнать о структуре ведической Вселенной и какое место занимает наш мир в этом мироздании.
                                    Ограничениях сознания, какие малы(ограничения), клеши (загрязнения) закабалили наше сознание и как от них освобождаться. Какие существуют этапы омрачения сознания.
                                    Вы познакомитесь с очень глубоким исследованием закона кармы, и исходя из его понимания сможете проанализировать свою карму и все механизмы ее действия.
                                    Вы сможете изучить общие понятия учения Адвайта веданты: Признаки учения Адвайты, Учение об антахкарана панчаке, Типы тел в йоге сиддхов, Четыре уровня Учения сиддхов, Восьмиступенчатая Аштанга-йога Патанджали, Пракрийи Веданты: двадцать четыре таттвы и др.
                                </p>
                            </div>
                            <div class="toggle">
                                <div class="linck-1">
                                    <a>
                                        Свернуть
                                        <div class="border"></div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="two-block two-block-d">
                            <div class="img">
                                <img src="/theme/klass/img/y2.png" alt="logo">
                            </div>
                            <div class="text-block">
                                <h6 class="title">
                                    Курс открыт
                                </h6>
                                <h3 class="title">
                                    «Праджня-янтра»
                                </h3>
                                <div>
                                    <ul>
                                        <li class="title">
                                            Уровень:
                                        </li>
                                        <li class="text">
                                            Начальний
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="title">
                                            Времия прохождения:
                                        </li>
                                        <li class="text">
                                            2 месяца
                                        </li>
                                    </ul>
                                </div>
                                <div class="toggle">
                                    <div class="linck-1">
                                        <a>
                                            Узнать подробнее
                                            <div class="border"></div>
                                        </a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="columns small-12 medium-4">
                        <div class="block-stage three-block-active block-active">
                            <h6 class="title">
                                Курс открыт
                            </h6>
                            <h3 class="title">
                                «Бозовое учение»
                            </h3>
                            <div>
                                <ul>
                                    <li class="title">
                                        Уровень:
                                    </li>
                                    <li class="text">
                                        Начальний
                                    </li>
                                </ul>
                                <ul>
                                    <li class="title">
                                        Времия прохождения:
                                    </li>
                                    <li class="text">
                                        2 месяца
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>
                                    Третий курс включает в себя учение об усмирении ума, переданное нам божеством Даттатрейей, риши Васиштхой и другими святыми.
                                    Какие существуют типы живых существ в нашей вселенной. Эта информация уникальна тем, что мы узнаем какое место, занимает класс существ - люди во вселенской иерархии. Кто такие саддху, сиддхи, джняни, боги, стоящие в эволюционной лестнице выше уровня человека и куда нужно направлять свое сознание нам для духовной эволюции.
                                    Гуру-йога – очень важная тема в жизни практикующих саддху. Какие бывают Гуру, как строятся отношения между Гуру и учениками, какими качествами должен обладать и Гуру и ученик, какие есть этапы в Гуру йоге.
                                </p>
                            </div>
                            <div class="toggle">
                                <div class="linck-1">
                                    <a>
                                        Свернуть
                                        <div class="border"></div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="three-block-d">
                            <div class="two-block">
                                <div class="img">
                                    <img src="/theme/klass/img/yoga-upward-planks-600-600-80-int.png" alt="logo">
                                </div>
                                <div class="text-block">
                                    <h6 class="title">
                                        Курс открыт
                                    </h6>
                                    <h3 class="title">
                                        «Базовый курс»
                                    </h3>
                                    <div>
                                        <ul>
                                            <li class="title">
                                                Уровень:
                                            </li>
                                            <li class="text">
                                                Начальний
                                            </li>
                                        </ul>
                                        <ul>
                                            <li class="title">
                                                Времия прохождения:
                                            </li>
                                            <li class="text">
                                                2 месяца
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="toggle">
                                        <div class="linck-1">
                                            <a>
                                                Узнать подробнее
                                                <div class="border"></div>
                                            </a>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="row row-kurs">
                    <div class="columns small-12 medium-4">
                        <div class="block-stage fourth-block-active block-active">
                            <h6 class="title">
                                Курс открыт
                            </h6>
                            <h3 class="title">
                                «Базовое учение»
                            </h3>
                            <div>
                                <ul>
                                    <li class="title">
                                        Уровень:
                                    </li>
                                    <li class="text">
                                        Начальний
                                    </li>
                                </ul>
                                <ul>
                                    <li class="title">
                                        Времия прохождения:
                                    </li>
                                    <li class="text">
                                        2 месяца
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>
                                    В этом курсе вы сможете ознакомиться с выдержками из книг Свами Шивананды «Йога и сила мысли», «Бхакти-йога», «Медитация на Ом» и «Пути достижения успеха в жизни».
                                </p>
                            </div>
                            <div class="toggle">
                                <div class="linck-1">
                                    <a>
                                        Свернуть
                                        <div class="border"></div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="fourth-block">
                            <div class="two-block">
                                <div class="img">
                                    <img src="/theme/klass/img/111.png" alt="logo">
                                </div>
                                <div class="text-block">
                                    <h6 class="title">
                                        Курс открыт
                                    </h6>
                                    <h3 class="title">
                                        «Базовое учение»
                                    </h3>
                                    <div>
                                        <ul>
                                            <li class="title">
                                                Уровень:
                                            </li>
                                            <li class="text">
                                                Начальний
                                            </li>
                                        </ul>
                                        <ul>
                                            <li class="title">
                                                Времия прохождения:
                                            </li>
                                            <li class="text">
                                                2 месяца
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="toggle">
                                        <div class="linck-1">
                                            <a>
                                                Узнать подробнее
                                                <div class="border"></div>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="columns small-12 medium-4">
                        <div class="block-stage fifth-block-active block-active">
                            <h6 class="title">
                                Курс открыт
                            </h6>
                            <h3 class="title">
                                «Праджня-янтра»
                            </h3>
                            <div>
                                <ul>
                                    <li class="title">
                                        Уровень:
                                    </li>
                                    <li class="text">
                                        Начальний
                                    </li>
                                </ul>
                                <ul>
                                    <li class="title">
                                        Времия прохождения:
                                    </li>
                                    <li class="text">
                                        2 месяца
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>
                                    Из курса «Праджня-янтра», в двух частях, можно почерпнуть знания, касающиеся работы с сознанием в Лайя-йоге, в частности, об общих понятиях Праджня-янтры, трех сущностных принципах, древе учения Лайя-йоги, пятеричной формуле самоосвобождения, ментальном самоосвобождении и шестнадцати стадиях нарастания луны внутреннего осознавания.
                                </p>
                            </div>
                            <div class="toggle">
                                <div class="linck-1">
                                    <a>
                                        Свернуть
                                        <div class="border"></div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="two-block fifth-block-d">
                            <div class="img">
                                <img src="/theme/klass/img/y2.png" alt="logo">
                            </div>
                            <div class="text-block">
                                <h6 class="title">
                                    Курс открыт
                                </h6>
                                <h3 class="title">
                                    «Праджня-янтра»
                                </h3>
                                <div>
                                    <ul>
                                        <li class="title">
                                            Уровень:
                                        </li>
                                        <li class="text">
                                            Начальний
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="title">
                                            Времия прохождения:
                                        </li>
                                        <li class="text">
                                            2 месяца
                                        </li>
                                    </ul>
                                </div>
                                <div class="toggle">
                                    <div class="linck-1">
                                        <a>
                                            Узнать подробнее
                                            <div class="border"></div>
                                        </a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="columns small-12 medium-4">
                        <div class="block-stage six-block-active block-active">
                            <h6 class="title">
                                Курс открыт
                            </h6>
                            <h3 class="title">
                                «Шакти-янтра»
                            </h3>
                            <div>
                                <ul>
                                    <li class="title">
                                        Уровень:
                                    </li>
                                    <li class="text">
                                        Начальний
                                    </li>
                                </ul>
                                <ul>
                                    <li class="title">
                                        Времия прохождения:
                                    </li>
                                    <li class="text">
                                        2 месяца
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>
                                    Курс «Шакти-янтра» знакомит с основными понятиями, касающимися теории и практики работы с энергией, рассказывает о трех гунах, тонких телах, энергии Кундалини, узлах и чакрах, о месте, времени и условиях для йогической практики, о том, как преодолеть препятствия и болезни, о видениях и духовных опытах, а также содержит выдержки из книги Свами Шивананды «Кундалини-йога».
                                </p>
                            </div>
                            <div class="toggle">
                                <div class="linck-1">
                                    <a>
                                        Свернуть
                                        <div class="border"></div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="six-block-d">
                            <div class="two-block">
                                <div class="img">
                                    <img src="/theme/klass/img/yoga-upward-planks-600-600-80-int.png" alt="logo">
                                </div>
                                <div class="text-block">
                                    <h6 class="title">
                                        Курс открыт
                                    </h6>
                                    <h3 class="title">
                                        «Шакти-янтра»
                                    </h3>
                                    <div>
                                        <ul>
                                            <li class="title">
                                                Уровень:
                                            </li>
                                            <li class="text">
                                                Начальний
                                            </li>
                                        </ul>
                                        <ul>
                                            <li class="title">
                                                Времия прохождения:
                                            </li>
                                            <li class="text">
                                                2 месяца
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="toggle">
                                        <div class="linck-1">
                                            <a>
                                                Узнать подробнее
                                                <div class="border"></div>
                                            </a>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="row row-kurs">
                    <div class="columns small-12 medium-4">
                        <div class="block-stage seventh-block-active block-active">
                            <h6 class="title">
                                Курс открыт
                            </h6>
                            <h3 class="title">
                                «Нидра-янтра»
                            </h3>
                            <div>
                                <ul>
                                    <li class="title">
                                        Уровень:
                                    </li>
                                    <li class="text">
                                        Начальний
                                    </li>
                                </ul>
                                <ul>
                                    <li class="title">
                                        Времия прохождения:
                                    </li>
                                    <li class="text">
                                        2 месяца
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>
                                    Курс «Нидра-янтра» рассказывает о понятиях, связанных с тонким телом человека и измерением тайджаса, об общем понимании принципа чистой страны, о янтре чистой страны, о взаимосвязи йоги чистой страны с йогой сновидений и йогой иллюзорного тела и о том, как выполняется базовая визуализация чистой страны и размещение главных божеств по сторонам света.
                                </p>
                            </div>
                            <div class="toggle">
                                <div class="linck-1">
                                    <a>
                                        Свернуть
                                        <div class="border"></div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="seventh-block">
                            <div class="two-block">
                                <div class="img">
                                    <img src="/theme/klass/img/111.png" alt="logo">
                                </div>
                                <div class="text-block">
                                    <h6 class="title">
                                        Курс открыт
                                    </h6>
                                    <h3 class="title">
                                        «Нидра-янтра»
                                    </h3>
                                    <div>
                                        <ul>
                                            <li class="title">
                                                Уровень:
                                            </li>
                                            <li class="text">
                                                Начальний
                                            </li>
                                        </ul>
                                        <ul>
                                            <li class="title">
                                                Времия прохождения:
                                            </li>
                                            <li class="text">
                                                2 месяца
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="toggle">
                                        <div class="linck-1">
                                            <a>
                                                Узнать подробнее
                                                <div class="border"></div>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="columns small-12 medium-4">
                        <div class="block-stage eighth-block-active block-active">
                            <h6 class="title">
                                Курс открыт
                            </h6>
                            <h3 class="title">
                                «Методы»
                            </h3>
                            <div>
                                <ul>
                                    <li class="title">
                                        Уровень:
                                    </li>
                                    <li class="text">
                                        Начальний
                                    </li>
                                </ul>
                                <ul>
                                    <li class="title">
                                        Времия прохождения:
                                    </li>
                                    <li class="text">
                                        2 месяца
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>
                                    На курсе «Методы», в двух частях, можно обучиться практической стороне Лайя-йоги, освоить выполнение практики внешнего принятия Прибежища, молитвы Прибежища, Гуру-йоги с мантрой Ом, грубой и тонкой концентрации, наблюдению за телом, базовой практике ходьбы, ходьбы с мантрой Ом, практике укоренения, шат-карме, научиться выполнению асан, пранаям, мудр и бандх. Всего курс содержит около сорока различных практик, помогающих йогину очистить свои физическое и тонкие тела.
                                </p>
                            </div>
                            <div class="toggle">
                                <div class="linck-1">
                                    <a>
                                        Свернуть
                                        <div class="border"></div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="two-block eighth-block-d">
                            <div class="img">
                                <img src="/theme/klass/img/y2.png" alt="logo">
                            </div>
                            <div class="text-block">
                                <h6 class="title">
                                    Курс открыт
                                </h6>
                                <h3 class="title">
                                    «Методы»
                                </h3>
                                <div>
                                    <ul>
                                        <li class="title">
                                            Уровень:
                                        </li>
                                        <li class="text">
                                            Начальний
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="title">
                                            Времия прохождения:
                                        </li>
                                        <li class="text">
                                            2 месяца
                                        </li>
                                    </ul>
                                </div>
                                <div class="toggle">
                                    <div class="linck-1">
                                        <a>
                                            Узнать подробнее
                                            <div class="border"></div>
                                        </a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="columns small-12 medium-4">
                        <div class="block-stage ninth-block-active block-active">
                            <h6 class="title">
                                Курс открыт
                            </h6>
                            <h3 class="title">
                                «Знание священных текстов»
                            </h3>
                            <div>
                                <ul>
                                    <li class="title">
                                        Уровень:
                                    </li>
                                    <li class="text">
                                        Начальний
                                    </li>
                                </ul>
                                <ul>
                                    <li class="title">
                                        Времия прохождения:
                                    </li>
                                    <li class="text">
                                        2 месяца
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>
                                    Курс «Знание священных текстов» предлагает информацию о тройном каноне (прастхана-трайя) и текстах, которые в нем содержатся, о Шанти-мантре, а также о гимнах «Тотакаштакам», «Нирванаштакам» и «Рудраштакам».
                                </p>
                            </div>
                            <div class="toggle">
                                <div class="linck-1">
                                    <a>
                                        Свернуть
                                        <div class="border"></div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="ninth-block-d">
                            <div class="two-block">
                                <div class="img">
                                    <img src="/theme/klass/img/yoga-upward-planks-600-600-80-int.png" alt="logo">
                                </div>
                                <div class="text-block">
                                    <h6 class="title">
                                        Курс открыт
                                    </h6>
                                    <h3 class="title">
                                        «Знание священных текстов»
                                    </h3>
                                    <div>
                                        <ul>
                                            <li class="title">
                                                Уровень:
                                            </li>
                                            <li class="text">
                                                Начальний
                                            </li>
                                        </ul>
                                        <ul>
                                            <li class="title">
                                                Времия прохождения:
                                            </li>
                                            <li class="text">
                                                2 месяца
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="toggle">
                                        <div class="linck-1">
                                            <a>
                                                Узнать подробнее
                                                <div class="border"></div>
                                            </a>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="row row-kurs">
                    <div class="columns small-12 medium-4">
                        <div class="block-stage tenth-block-active block-active">
                            <h6 class="title">
                                Курс открыт
                            </h6>
                            <h3 class="title">
                                «Агиография»
                            </h3>
                            <div>
                                <ul>
                                    <li class="title">
                                        Уровень:
                                    </li>
                                    <li class="text">
                                        Начальний
                                    </li>
                                </ul>
                                <ul>
                                    <li class="title">
                                        Времия прохождения:
                                    </li>
                                    <li class="text">
                                        2 месяца
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>
                                    Из курса «Агиография» можно узнать об избранном божестве традиции Лайя-йоги Авадхуте Даттатрейе и его аватарах Шрипаде Шри Валлабхе и Нарасимхе Сарасвати, о Парамгуру традиции Свами Брахмананде Махарадже, а также о жизни великих риши, святых и сиддхов Санатана Дхармы, таких как Шри Ади Шанкарачарья, Матсиендранатх, Горакшанатх, Шри Рамана Махарши, Рамалинга Свамигал, Боганатар, Агастьяр, Сараха, Васиштха, Атри, Вишвамитра, Гаутама, Бхарадваджа, Джамадагни, Кашьяпа и Вьяса.
                                </p>
                            </div>
                            <div class="toggle">
                                <div class="linck-1">
                                    <a>
                                        Свернуть
                                        <div class="border"></div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="tenth-block">
                            <div class="two-block">
                                <div class="img">
                                    <img src="/theme/klass/img/111.png" alt="logo">
                                </div>
                                <div class="text-block">
                                    <h6 class="title">
                                        Курс открыт
                                    </h6>
                                    <h3 class="title">
                                        «Агиография»
                                    </h3>
                                    <div>
                                        <ul>
                                            <li class="title">
                                                Уровень:
                                            </li>
                                            <li class="text">
                                                Начальний
                                            </li>
                                        </ul>
                                        <ul>
                                            <li class="title">
                                                Времия прохождения:
                                            </li>
                                            <li class="text">
                                                2 месяца
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="toggle">
                                        <div class="linck-1">
                                            <a>
                                                Узнать подробнее
                                                <div class="border"></div>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="columns small-12 medium-4">
                        <div class="block-stage eleventh-block-active block-active">
                            <h6 class="title">
                                Курс открыт
                            </h6>
                            <h3 class="title">
                                «Мифология»
                            </h3>
                            <div>
                                <ul>
                                    <li class="title">
                                        Уровень:
                                    </li>
                                    <li class="text">
                                        Начальний
                                    </li>
                                </ul>
                                <ul>
                                    <li class="title">
                                        Времия прохождения:
                                    </li>
                                    <li class="text">
                                        2 месяца
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>
                                    Курс «Мифология» содержит информацию о божествах индуистского пантеона, среди которых Брахма, Вишну и Шива, их супруги Сарасвати, Лакшми и Парвати, о десяти аватарах Вишну, о Таре, Индре, Сурье, Агни, Ганеше и Айяппе.
                                </p>
                            </div>
                            <div class="toggle">
                                <div class="linck-1">
                                    <a>
                                        Свернуть
                                        <div class="border"></div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="two-block eleventh-block-d">
                            <div class="img">
                                <img src="/theme/klass/img/y2.png" alt="logo">
                            </div>
                            <div class="text-block">
                                <h6 class="title">
                                    Курс открыт
                                </h6>
                                <h3 class="title">
                                    «Мифология»
                                </h3>
                                <div>
                                    <ul>
                                        <li class="title">
                                            Уровень:
                                        </li>
                                        <li class="text">
                                            Начальний
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="title">
                                            Времия прохождения:
                                        </li>
                                        <li class="text">
                                            2 месяца
                                        </li>
                                    </ul>
                                </div>
                                <div class="toggle">
                                    <div class="linck-1">
                                        <a>
                                            Узнать подробнее
                                            <div class="border"></div>
                                        </a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="columns small-12 medium-4">
                        <div class="block-stage twelfth-block-active block-active">
                            <h6 class="title">
                                Курс открыт
                            </h6>
                            <h3 class="title">
                                «Этика»
                            </h3>
                            <div>
                                <ul>
                                    <li class="title">
                                        Уровень:
                                    </li>
                                    <li class="text">
                                        Начальний
                                    </li>
                                </ul>
                                <ul>
                                    <li class="title">
                                        Времия прохождения:
                                    </li>
                                    <li class="text">
                                        2 месяца
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>
                                    Какие существуют этические правила и принципы в общине Санатана Дхармы. (Курс для тех, кто является членом общины)
                                </p>
                            </div>
                            <div class="toggle">
                                <div class="linck-1">
                                    <a>
                                        Свернуть
                                        <div class="border"></div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="twelfth-block-d">
                            <div class="two-block">
                                <div class="img">
                                    <img src="/theme/klass/img/yoga-upward-planks-600-600-80-int.png" alt="logo">
                                </div>
                                <div class="text-block">
                                    <h6 class="title">
                                        Курс открыт
                                    </h6>
                                    <h3 class="title">
                                        «Этика»
                                    </h3>
                                    <div>
                                        <ul>
                                            <li class="title">
                                                Уровень:
                                            </li>
                                            <li class="text">
                                                Средний
                                            </li>
                                        </ul>
                                        <ul>
                                            <li class="title">
                                                Времия прохождения:
                                            </li>
                                            <li class="text">
                                                0.5-2 года
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="toggle">
                                        <div class="linck-1">
                                            <a>
                                                Узнать подробнее
                                                <div class="border"></div>
                                            </a>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>

        <div class="row">
            <div class="block-icon">
                <div class="columns small-12">
                    <h3 class="title">
                        Двенадцать аспектов видья садханы:
                    </h3>
                </div>
                <div class="medium-4 medium-offset-4">
                    <h6>Внимательность, ясность, спокойствие и даже сила воли <br>
                        — это не данность, а навыки, которые можно развивать.
                    </h6>
                </div>
                <div class="icon row-icon">
                    <div class="row">
                        <div class="columns small-12 medium-6">
                            <div class="row">
                                <div class="columns small-3 medium-2 medium-offset-1">
                                    <div class="img">
                                        <img src="/theme/klass/img/1.png" alt="">
                                    </div>
                                </div>
                                <div class="columns small-9 medium-9">
                                    <h5 class="title">
                                        Прибежище
                                    </h5>
                                    <p class="text">
                                        возможность принять Прибежище, то есть установить сакральную связь с Тремя Сокровищами и Древом Прибежища, чтобы получать благословение, духовную поддержку и защиту
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="columns small-12 medium-6">
                            <div class="row">
                                <div class="columns small-3 medium-2 medium-offset-1">
                                    <div class="img">
                                        <img src="/theme/klass/img/2.png" alt="">
                                    </div>
                                </div>
                                <div class="columns small-9 medium-9">
                                    <h5 class="title">
                                        Сатсанг
                                    </h5>
                                    <p class="text">
                                        возможность присутствовать на сатсангах, получать прямую передачу
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-icon">
                        <div class="columns small-12 medium-6">
                            <div class="row">
                                <div class="columns small-3 medium-2 medium-offset-1">
                                    <div class="img">
                                        <img src="/theme/klass/img/4.png" alt="">
                                    </div>
                                </div>
                                <div class="columns small-9 medium-9">
                                    <h5 class="title">
                                        Даршан
                                    </h5>
                                    <p class="text">
                                        возможность иметь консультации при личном общении с Гуру
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="columns small-12 medium-6">
                            <div class="row">
                                <div class="columns small-3 medium-2 medium-offset-1">
                                    <div class="img">
                                        <img src="theme/klass/img/33.png" alt="">
                                    </div>
                                </div>
                                <div class="columns small-9 medium-9">
                                    <h5 class="title">
                                        Дикша
                                    </h5>
                                    <p class="text">
                                        возможность получать различные инициации, например — шастра-крипа-самскара, инициацию в карма-санньяси и др
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-icon">
                        <div class="columns small-12 medium-6">
                            <div class="row">
                                <div class="columns small-3 medium-2 medium-offset-1">
                                    <div class="img">
                                        <img src="/theme/klass/img/5.png" alt="">
                                    </div>
                                </div>
                                <div class="columns small-9 medium-9">
                                    <h5 class="title">
                                        Сева

                                    </h5>
                                    <p class="text">
                                        возможность выполнять служение божественным силам Просветления в мандале Гуру, исполнять миссию просвещения на благо всего человечества и освобождать себя от эгоизма
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="columns small-12 medium-6">
                            <div class="row">
                                <div class="columns small-3 medium-2 medium-offset-1">
                                    <div class="img">
                                        <img src="theme/klass/img/6.png" alt="">
                                    </div>
                                </div>
                                <div class="columns small-9 medium-9">
                                    <h5 class="title">
                                        Свадхьяя
                                    </h5>
                                    <p class="text">
                                        возможность слушать лекции, изучать священные тексты и получать комментарии Гуру к ним, проясняя тонкости Учения
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-icon">
                        <div class="columns small-12 medium-6">
                            <div class="row">
                                <div class="columns small-3 medium-2 medium-offset-1">
                                    <div class="img">
                                        <img src="/theme/klass/img/7.png" alt="">
                                    </div>
                                </div>
                                <div class="columns small-9 medium-9">
                                    <h5 class="title">
                                        Самайя

                                    </h5>
                                    <p class="text">
                                        особые правила взаимоотношений, которые ученик устанавливает с Гуру
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="columns small-12 medium-6">
                            <div class="row">
                                <div class="columns small-3 medium-2 medium-offset-1">
                                    <div class="img">
                                        <img src="/theme/klass/img/8.png" alt="">
                                    </div>
                                </div>
                                <div class="columns small-9 medium-9">
                                    <h5 class="title">
                                        Садхана
                                    </h5>
                                    <p class="text">
                                        возможность вести духовную практику Лайя-йоги в особых условиях — ритриты в Монастыре и т.д.).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-icon">
                        <div class="columns small-12 medium-6">
                            <div class="row">
                                <div class="columns small-3 medium-2 medium-offset-1">
                                    <div class="img">
                                        <img src="/theme/klass/img/9.png" alt="">
                                    </div>
                                </div>
                                <div class="columns small-9 medium-9">
                                    <h5 class="title">
                                        Гуру-йога
                                    </h5>
                                    <p class="text">
                                        медитация на естественное состояние и принцип Гуру, смешивание потока сознания ученика с потоком сознания Гуру
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="columns small-12 medium-6">
                            <div class="row">
                                <div class="columns small-3 medium-2 medium-offset-1">
                                    <div class="img">
                                        <img src="/theme/klass/img/10.png" alt="">
                                    </div>
                                </div>
                                <div class="columns small-9 medium-9">
                                    <h5 class="title">
                                        Паломничество
                                    </h5>
                                    <p class="text">
                                        возможность посещать великие священные места планеты, храмы, ашрамы, духовные праздники, в Индии, Непале и т.д., и получать благословения
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-icon">
                        <div class="columns small-12 medium-6">
                            <div class="row">
                                <div class="columns small-3 medium-2 medium-offset-1">
                                    <div class="img">
                                        <img src="/theme/klass/img/11.png" alt="">
                                    </div>
                                </div>
                                <div class="columns small-9 medium-9">
                                    <h5 class="title">
                                        Передача методов Учения
                                    </h5>
                                    <p class="text">
                                        для личной практики от Гуру и его ближайших учеников-монахов
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="columns small-12 medium-6">
                            <div class="row">
                                <div class="columns small-3 medium-2 medium-offset-1">
                                    <div class="img">
                                        <img src="/theme/klass/img/12.png" alt="">
                                    </div>
                                </div>
                                <div class="columns small-9 medium-9">
                                    <h5 class="title">
                                        Коллективные практики
                                    </h5>
                                    <p class="text">
                                        ежедневные баджаны созерцания, призывания божеств и святых линии передачи
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="course-arranged">
            <div class="row">
                <div class="colums medium-6">
                    <h2 class="title">
                        Как устроен курс?
                    </h2>
                    <ul class="tabs vertical" id="example-vert-tabs" data-tabs>
                        <li id="text-1" class="tabs-title is-active"><span class="line"></span><a href="#tab1" aria-selected="true">Задания курса</a>
                            <p class="text text-1">
                                Каждый курс — это интерактивный учебник, который содержит видеоматериалы, аудиоматериалы, тесты и проекты.
                            </p>
                        </li>
                        <li id="text-2" class="tabs-title "><span class="line"></span><a href="#tab2">Помощь и поддержка</a>
                            <p class="text text-2">
                                Общайтесь с тысячами других учащихся: обсуждайте идеи, материалы курса и помогайте друг другу осваивать новые понятия.


                            </p>
                        </li>
                        <li id="text-3"  class="tabs-title comp-tex "><span class="line"></span><a href="#tab3">Подтверждение изучения</a>
                            <p class="text text-3">

                                Получите документы об учебе и поделитесь своим успехом с друзьями, коллегами и работодателями.

                            </p>
                        </li>
                        <li id="text-mob"  class="tabs-title mob-tex"><span class="line"></span><a href="#tab3">Сертификат</a>
                            <p class="text text-3">

                                Получите документы об учебе и поделитесь своим успехом с друзьями, коллегами и работодателями.

                            </p>
                        </li>

                    </ul>

                </div>
                <div class="colums medium-6">
                    <div class="tabs-content vertical" data-tabs-content="example-vert-tabs" id="tab_content">
                        <div class="tabs-panel is-active" id="tab1">
                            <img src="/theme/klass/img/img-1.png" alt="">
                        </div>
                        <div class="tabs-panel" id="tab2">
                            <img src="/theme/klass/img/img-2.png" alt="">
                        </div>
                        <div class="tabs-panel" id="tab3">
                            <img src="/theme/klass/img/certificate.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--<div class="how-course-work">-->
        <!--<div class="row">-->

        <!--</div>-->
        <!--</div>-->
        <div class="about-learning">
            <div class="row">
                <div class="columns small-12 medium-6">
                    <h2 class="title">
                        Об обучении <br><span>Dharma Vichara</span>
                    </h2>
                    <div class="text">
                        <p class="text">Наша видья садхана — это изучение философии Санатана Дхармы, Адвайта веданты, изучение учения шиваизма, древнее знание Упанишад, которое считается переданным самим Брахмой творцом. Это знание освобождает душу от неведения и позволяет взглянуть на мир глазами Джняни, глазами мудрецов. Изменить взгляд на мир и освободить себя от ненужной деятельности...
                            Мы изучаем Учение как подношение богине Сарасвати и развиваем высшие контуры сознания, буддхи — интуицию.
                            Курс состоит из вопросов по разным разделам Учения. Сначала располагаются тексты с ответами на вопросы, после их изучения нужно пройти проверочный тест. В конце прохождения темы предлагаются дополнительные творческие задания для закрепления и углубления понимания учения. В конце курса выдается Диплом-свиток, который позволяет вам легко сдать экзамен на присвоение ступени.</p>
                    </div>
                    <div class="linck-1">
                        <a href="/theme/klass/about-training.html">
                            Читать подробней
                            <div class="border"></div>
                        </a>
                    </div>
                </div>
                <div class="columns small-12 medium-6">
                    <img src="/theme/klass/img/vichara.png" alt="">
                </div>
            </div>
        </div>
        <div class="our-other-projects">
            <div class="row">
                <div class="columns small-2 small-offset-5 medium-2 medium-offset-5">
                    <div class="logo-img">
                        <img src="/theme/klass/img/lotus.png" alt="">
                    </div>
                </div>
                <h2 class="title">
                    Наши другие проекты
                </h2>
            </div>
            <div class="row">
                <div class="columns small-12 medium-4">
                    <div class="our-projects-block">
                        <div class="img">
                            <img src="/theme/klass/img/sredniy-4.png" alt="">
                        </div>
                        <h6 class="our-projects-block-title">
                            Экология мышления
                        </h6>
                        <div class="text">
                            <p class="text">
                                Значимость этих проблем настолько очевидна, что постоянное <br>информационно-пропагандистское обеспечение нашей деятельности способствует подготовки <br>и реализации системы обучения <br> кадров, соответствует насущным потребностям.
                            </p>
                        </div>
                        <div class="go-to-site">
                            <a href="#">
                                Перейти на сайт
                                <div class="border"></div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="columns small-12 medium-4">
                    <div class="our-projects-tw0-block">
                        <div class="img">
                            <img src="/theme/klass/img/om-top.png" alt="">
                        </div>
                        <h6 class="our-projects-block-title">
                            Сайт Свами Вишнудевананда Гири
                        </h6>
                        <div class="text">
                            <p class="text">
                                Не следует, однако забывать, что постоянный количественный рост и сфера нашей активности позволяет выполнять важные задания по разработке существенных финансовых и административных условий. Разнообразный и богатый опыт начало повседневной работы.
                            </p>
                        </div>
                        <div class="go-to-site">
                            <a href="#">
                                Перейти на сайт
                                <div class="border"></div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="columns small-12 medium-4">
                    <div class="our-projects-third-block">
                        <div class="img">
                            <img src="/theme/klass/img/logss.png" alt="">
                        </div>
                        <h6 class="our-projects-block-title">
                            Сайт последователей Санатана Дхармы
                        </h6>
                        <div class="text">
                            <p class="text">
                                Разнообразный и богатый опыт начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки дальнейших направлений развития. Таким образом дальнейшее развитие различных форм деятельности требуют от нас анализа форм развития.
                            </p>
                        </div>
                        <div class="go-to-site">
                            <a href="#">
                                Перейти на сайт
                                <div class="border"></div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="calendar-block">
            <div class="row">
                <div class="columns small-12">
                    <h2 class="title">
                        Календарь мероприятий
                    </h2>
                </div>

                <div class="columns small-12 medium-6">
                    <div class="text">
                        <p class="text">
                            Разнообразный и богатый опыт консультация с широким активом позволяет  важные задания по разработке форм развития. Не следует, однако забывать, что реализация намеченных плановых в формировании новых предложений.

                        </p>
                    </div>
                </div>
                <div class="columns small-12 ">
                    <div class="calendar-block-row">
                        <div class="row">
                            <div class="columns medium-2 small-4 img">
                                <img src="/theme/klass/img/11238.png" alt="">
                            </div>
                            <div class="columns medium-8 small-8 text-block">
                                <h3 class="title">
                                    КУМБХА МЕЛА с участием ШРИ ГУРУ СВАМИ ВИШНУДЕВАНАНДА ГИРИ
                                </h3>
                                <ul class="first">
                                    <li class="title">
                                        Дата проведения:
                                    </li>
                                    <li class="text">
                                        3-11 февраля
                                    </li>
                                </ul>
                                <ul >
                                    <li class="title">
                                        Место:
                                    </li>
                                    <li class="text">
                                        Аллахабад, Индия
                                    </li>
                                </ul>
                            </div>
                            <div class="columns medium-2 button-group">
                                <div class="block">
                                    <a href="/theme/klass/calendar.html" class="button button-2 right">Узнать подробнее
                                    </a>
                                    <a href="#" class="linck"><span> Узнать подробнее</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="calendar-block-row">
                        <div class="row">
                            <div class="columns medium-2 small-4 img">
                                <img src="/theme/klass/img/11238-copy.png" alt="">
                            </div>
                            <div class="columns medium-8 small-8 text-block">
                                <h3 class="title">
                                    КУМБХА МЕЛА с участием ШРИ ГУРУ СВАМИ ВИШНУДЕВАНАНДА ГИРИ
                                </h3>
                                <ul class="first">
                                    <li class="title">
                                        Дата проведения:
                                    </li>
                                    <li class="text">
                                        3-11 февраля
                                    </li>
                                </ul>
                                <ul >
                                    <li class="title">
                                        Место:
                                    </li>
                                    <li class="text">
                                        Аллахабад, Индия
                                    </li>
                                </ul>
                            </div>
                            <div class="columns medium-2 button-group">
                                <div class="block">
                                    <a href="#" class="button button-2 right">Узнать подробнее
                                    </a>
                                    <a href="#" class="linck"><span> Узнать подробнее</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="calendar-block-row">
                        <div class="row">
                            <div class="columns medium-2 small-4 img">
                                <img src="/theme/klass/img/11238-copy-2.png" alt="">
                            </div>
                            <div class="columns medium-8 small-8 text-block">
                                <h3 class="title">
                                    КУМБХА МЕЛА с участием ШРИ ГУРУ СВАМИ ВИШНУДЕВАНАНДА ГИРИ
                                </h3>
                                <ul class="first">
                                    <li class="title">
                                        Дата проведения:
                                    </li>
                                    <li class="text">
                                        3-11 февраля
                                    </li>
                                </ul>
                                <ul >
                                    <li class="title">
                                        Место:
                                    </li>
                                    <li class="text">
                                        Аллахабад, Индия
                                    </li>
                                </ul>
                            </div>
                            <div class="columns medium-2 button-group">
                                <div class="block">
                                    <a href="#" class="button button-2 right">Узнать подробнее
                                    </a>
                                    <a href="#" class="linck"><span> Узнать подробнее</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="calendar-block-row">
                        <div class="row">
                            <div class="columns medium-2 small-4 img">
                                <img src="/theme/klass/img/11238-copy-3.png" alt="">
                            </div>
                            <div class="columns medium-8 small-8 text-block">
                                <h3 class="title">
                                    КУМБХА МЕЛА с участием ШРИ ГУРУ СВАМИ ВИШНУДЕВАНАНДА ГИРИ
                                </h3>
                                <ul class="first">
                                    <li class="title">
                                        Дата проведения:
                                    </li>
                                    <li class="text">
                                        3-11 февраля
                                    </li>
                                </ul>
                                <ul >
                                    <li class="title">
                                        Место:
                                    </li>
                                    <li class="text">
                                        Аллахабад, Индия
                                    </li>
                                </ul>
                            </div>
                            <div class="columns medium-2 button-group">
                                <div class="block">
                                    <a href="#" class="button button-2 right">Узнать подробнее
                                    </a>
                                    <a href="#" class="linck"><span> Узнать подробнее</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="columns small-8 small-offset-3 medium-4 medium-offset-4 large-2 large-offset-5 ">
                            <div class="linck-1 comp">
                                <a href="#">
                                    Больше событий
                                    <div class="border"></div>
                                </a>
                            </div>
                            <div class="button-group mob">
                                <a href="#" class="button button-1">Больше событий</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="take-colection">
            <div class="row">
                <div class="columns  small-12">
                    <div class="take-colection-background">
                        <div class="columns  medium-5 medium-offset-6" >
                            <h2 class="title">
                                Загляните в нашу коллекцию знаний библиотеки и аудиотеки
                            </h2>
                            <div class="text">
                                <p class="text">
                                    Разнообразный и богатый опыт с широким активом  важные задания по разработке форм развития.
                                </p>
                            </div>
                            <div class="button-group">
                                <a href="#" class="button button-1">Узнать подробнее</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
<!--Custom theme slider-->

<!--Custom theme Who We Are block-->
<div id="page" class="container-fluid">

    <div id="page-content" class="row-fluid">


        <div id="<?php echo $regionbsid ?>" class="span9">
					<?php


						echo $OUTPUT->main_content();

          ?>
        </div>


    </div>
</div>
<?php  require_once(dirname(__FILE__) . '/includes/footer.php');  ?>
<!--Custom theme footer-->

</body>
</html>
