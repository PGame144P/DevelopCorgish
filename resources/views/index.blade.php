<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Tue Sep 19 2023 16:26:57 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6488518879e3a9444162df2d" data-wf-site="6488518879e3a9444162df1c">
<head>
  <meta charset="utf-8">
  <title>Corgish</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/corgish-b65903.webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Material Icons Round:regular","Material Icons Outlined:regular"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset('images/webclip.png') }}" rel="apple-touch-icon">
</head>
<body>
  <div data-w-id="c76e5ec7-b7a8-317f-f78c-28bf1a3f5d11" data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="header-wrapper w-nav">
    <div class="container-default w-container">
      <div class="header-content-wrapper">
        <a href="index.html" aria-current="page" class="header-logo-link w-nav-brand w--current"><img src="{{ asset('images/Logo.png') }}" alt="Corgish logo" width="198.5" class="header-logo"></a>
        <div class="header-middle">
          <nav role="navigation" class="header-nav-menu-wrapper w-nav-menu">
            <ul role="list" class="header-nav-menu-list">
              <li class="header-nav-list-item middle">
                <a href="nav-page/test.html" class="header-nav-link w-nav-link">Библиотека</a>
              </li>
              <li class="header-nav-list-item middle">
                <a href="nav-page/corgish-ai.html" class="header-nav-link w-nav-link">Corgish Ai</a>
              </li>
              <li class="header-nav-list-item middle">
                <div data-hover="true" data-delay="0" data-w-id="c76e5ec7-b7a8-317f-f78c-28bf1a3f5d20" class="dropdown-wrapper w-dropdown">
                  <div class="dropdown-toggle w-dropdown-toggle">
                    <div>Ресурсы</div><img src="images/arrow-black-brix-templates.svg" loading="eager" alt="Arrow down button" class="icon-dropdown">
                  </div>
                  <nav class="dropdown-column-wrapper w-dropdown-list">
                    <div class="dropdown-pd">
                      <div class="w-layout-grid grid-1-column dropdown-link-column">
                        <a href="#" class="dropdown-link w-dropdown-link">Corgish app</a>
                        <a href="#" class="dropdown-link w-dropdown-link">Видео</a>
                        <a href="nav-page/news-and-action/news-and-action.html" class="dropdown-link w-dropdown-link">Новости и Акции</a>
                        <a href="#" class="dropdown-link w-dropdown-link">Магазин</a>
                        <a href="nav-page/support.html" class="dropdown-link w-dropdown-link">Помощь</a>
                      </div>
                    </div>
                  </nav>
                </div>
              </li>
              <li class="header-nav-list-item middle">
                <a href="nav-page/price.html" class="header-nav-link w-nav-link">Цены</a>
              </li>
              <li class="header-nav-list-item show-in-tablet">
                <div class="wg-element mobile">
                  <div class="wg-element-wrapper sw7">
                    <div data-hover="false" data-delay="0" data-w-id="c76e5ec7-b7a8-317f-f78c-28bf1a3f5d38" class="wg-dropdown-1 w-dropdown">
                      <div lang="en" class="wg-dd-1-togle w-dropdown-toggle">
                        <div class="wg-selector-text-wrapper">
                          <div class="wg-left-side">
                            <div class="wg-flag"><img src="{{ asset('images/avatar.png') }}" loading="eager" alt="Avatar login" class="wg-flag-icon"></div>
                            <div>name</div>
                          </div>
                        </div>
                      </div>
                      <nav class="wg-dd-1-list wg-dropdown-link-flag w-dropdown-list">
                        <div class="wg-dropdown-list">
                          <a lang="es" href="#" class="wg-dropdown-1-link w-inline-block">
                            <div class="wg-selector-text-wrapper">
                              <div class="wg-left-side hover">
                                <div>Профиль</div>
                              </div>
                            </div>
                          </a>
                          <a lang="es" href="#" class="wg-dropdown-1-link w-inline-block">
                            <div class="wg-selector-text-wrapper">
                              <div class="wg-left-side hover">
                                <div>Мои Тесты</div>
                              </div>
                            </div>
                          </a>
                          <a lang="es" href="#" class="wg-dropdown-1-link w-inline-block">
                            <div class="wg-selector-text-wrapper">
                              <div class="wg-left-side hover">
                                <div>Ссылка</div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </nav>
                    </div>
                  </div>
                  <div class="wg-code w-embed w-script">
                    <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
                    <script>
    Weglot.initialize({
        api_key: 'wg_10ec997f45d514f63c2ff0f274ff2fbc1'
    });
// on Weglot init
Weglot.on('initialized', ()=>{
	// get the current active language
  const currentLang = Weglot.getCurrentLang();
  // call updateFlagDropdownLinks function
  updateSW6FlagDropdownLinks(currentLang);
});
// for each of the .wg-element-wrapper language links
document.querySelectorAll('.wg-element-wrapper.sw7 [lang]').forEach((link)=>{
		// add a click event listener
		link.addEventListener('click', function(e){
    	// prevent default
			e.preventDefault();
      // switch to the current active language      
      Weglot.switchTo(this.getAttribute('lang'));
      // call updateDropdownLinks function
      updateSW6FlagDropdownLinks(this.getAttribute('lang'));
		});
});
// updateFlagDropdownLinks function
function updateSW6FlagDropdownLinks(currentLang){
	// get the wrapper element
	const $wrapper = document.querySelector('.wg-element-wrapper.sw7'); 
  // if the .w-dropdown-toggle is not the current active language
 	if($wrapper.querySelector('.w-dropdown-toggle').getAttribute('lang') !== currentLang){
  	// swap the dropdown toggle's innerHTML with the current active language link innerHTML
  	const $activeLangLink = $wrapper.querySelector('[lang='+currentLang+']');
    const childDiv = $activeLangLink.innerHTML;
    const $toggle = $wrapper.querySelector('.w-dropdown-toggle');
    const toggleDiv = $toggle.innerHTML;
    $toggle.innerHTML = childDiv;
    $activeLangLink.innerHTML = toggleDiv;
    // swap the dropdown toggle's lang attr with the current active language link lang attr
		const lang = $activeLangLink.getAttribute('lang');
   	const toggleLang = $toggle.getAttribute('lang');
		$toggle.setAttribute('lang', lang);
		$activeLangLink.setAttribute('lang', toggleLang);
  }
}
</script>
                  </div>
                </div>
              </li>
              <li class="header-nav-list-item show-in-tablet">
                <a href="#" class="btn-primary small w-button">Войти <span class="icon-btn">login</span></a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="header-right-side">
          <div class="wg-element desktop">
            <div class="wg-element-wrapper sw6">
              <div data-hover="false" data-delay="0" data-w-id="c76e5ec7-b7a8-317f-f78c-28bf1a3f5d5a" class="wg-dropdown-1 w-dropdown">
                <div lang="en" class="wg-dd-1-togle w-dropdown-toggle">
                  <div class="wg-selector-text-wrapper">
                    <div class="wg-left-side">
                      <div class="wg-flag"><img src="{{ asset('images/avatar.png') }}" loading="eager" width="125" alt="Avatar login" class="wg-flag-icon"></div>
                      <div>Name</div>
                    </div>
                  </div>
                </div>
                <nav class="wg-dd-1-list wg-dropdown-link-flag w-dropdown-list">
                  <div class="wg-dropdown-list">
                    <a lang="es" href="#" class="wg-dropdown-1-link w-inline-block">
                      <div class="wg-selector-text-wrapper">
                        <div class="wg-left-side hover">
                          <div>Профиль</div>
                        </div>
                      </div>
                    </a>
                    <a lang="es" href="#" class="wg-dropdown-1-link w-inline-block">
                      <div class="wg-selector-text-wrapper">
                        <div class="wg-left-side hover">
                          <div>Мои тесты</div>
                        </div>
                      </div>
                    </a>
                    <a lang="es" href="#" class="wg-dropdown-1-link w-inline-block">
                      <div class="wg-selector-text-wrapper">
                        <div class="wg-left-side hover">
                          <div>Ссылка</div>
                        </div>
                      </div>
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="wg-code w-embed"></div>
          </div>
          <div class="hamburger-menu-wrapper w-nav-button">
            <div class="hamburger-menu-bar top"></div>
            <div class="hamburger-menu-bar bottom"></div>
          </div>
          <a href="registration/registration.html" class="btn-primary small header-btn-hidde-on-mb w-button">Войти <span class="icon-btn">login</span></a>
        </div>
      </div>
    </div>
  </div>
  <section class="section_main">
    <div class="container">
      <div class="banner test-page">
        <div class="banner_content">
          <div class="banner_title">
            <div class="title_h1">Используйте CORGISH чтобы изучение языка проходило весело и с пользой! </div>
          </div><img src="{{ asset('images/image_corgish_dogsandgirl.png') }}" loading="lazy" width="314" height="314" alt="Image_banner" srcset="images/image_corgish_dogsandgirl-p-500.png 500w, images/image_corgish_dogsandgirl.png 628w" sizes="(max-width: 479px) 92vw, 314px" class="image_corgish_dogsandgirl">
        </div>
      </div>
      <div class="btn_container">
        <a href="#" class="btn-primary yellowlable w-inline-block">
          <div class="p-button">Одиночная игра</div>
        </a>
        <a href="#" class="btn-primary bluelable w-inline-block">
          <div class="p-button">Создать тест</div>
        </a>
      </div>
      <div class="text_container">
        <h2 class="title_h2">Образование с Corgish</h2>
        <div class="p-main-box">
          <div class="p-main"><span class="p-main">Если у вас есть </span><span class="p-bold">интерес к изучению</span><span class="p-main"> английского языка и </span><span class="p-bold">желание улучшить свой уровень знания</span><span class="p-main">, то недостаток времени на посещение курсов и занятия с репетитором не должен стать препятствием на вашем пути к успеху. В нашем современном мире существует </span><span class="p-bold">множество эффективных способов изучения языка</span><span class="p-main">, которые можно освоить даже в условиях ограниченного времени. Например, вы можете использовать </span><span class="p-bold">приложение Corgish</span><span class="p-main"> для изучения языка или самостоятельно изучать язык с помощью </span><span class="p-bold">одиночной игры Corgish.</span><span class="p-main"> Главное, не останавливайтесь на достигнутом и продолжайте улучшать свои навыки, так как знание английского языка может открыть перед вами </span><span class="p-bold">множество новых возможностей</span><span class="p-main"> как в личной, так и в профессиональной жизни.</span></div>
        </div>
      </div>
      <div class="about_img"><img src="{{ asset('images/image_01.png') }}" loading="lazy" width="359.8963623046875" height="220" alt="Учиница девочка и мальчик ученик разглядывают обучающие тесты на планшете" srcset="images/image_01-p-500.png 500w, images/image_01.png 720w" sizes="(max-width: 991px) 100vw, (max-width: 1439px) 36vw, 359.890625px" class="image-2"><img src="{{ asset('images/image_02.png') }}" loading="lazy" width="276" height="336.2525939941406" alt="" srcset="{{ asset('images/image_02-p-500.png') }} 500w, {{ asset('images/image_02.png') }} 553w" sizes="(max-width: 767px) 100vw, 276px" class="image-3"><img src="{{ asset('images/Image_03.png') }}" loading="lazy" width="334.9726867675781" height="240" alt="" srcset="{{ asset('images/Image_03-p-500.png') }} 500w, {{ asset('images/Image_03.png') }} 670w" sizes="(max-width: 479px) 100vw, (max-width: 991px) 334.96875px, (max-width: 1439px) 34vw, 334.96875px" class="image-4"></div>
      <div class="lear_container">
        <div class="text_container">
          <h2 class="title_h2">Удобство обучения с Corgish</h2>
          <div class="p-main-box">
            <div class="p-main-box"><span class="p-bold">Учить язык вместе с Corgish - это увлекательное и интересное приключение</span><span class="p-main">, которое позволит вам расширить свои профессиональные качества. Если вы хотите обучать детей в игровой форме, то для вас идеальным решением будут тесты созданные при помощи нашего приложения. </span><span class="p-bold">Corgish позволяет гибко планировать свой график занятий</span><span class="p-main"> и экономить своё время. Кроме того, Corgish обеспечивает индивидуальный подход и персонализацию обучения. Вы сможете </span><span class="p-bold">создать тесты, которые будут наилучшими для ваших учеников</span><span class="p-main"> и разработать индивидуальную программу обучения, учитывающую потребности и цели ваших учащихся.</span></div>
          </div>
        </div>
        <div class="learn_img"><img src="{{ asset('images/josh-applegate-p_KJvKVsH14-unsplash.png') }}" loading="lazy" width="555" height="370" alt="" srcset="images/josh-applegate-p_KJvKVsH14-unsplash-p-500.png 500w, images/josh-applegate-p_KJvKVsH14-unsplash-p-800.png 800w, images/josh-applegate-p_KJvKVsH14-unsplash-p-1080.png 1080w, images/josh-applegate-p_KJvKVsH14-unsplash.png 1110w" sizes="(max-width: 479px) 96vw, (max-width: 767px) 95vw, (max-width: 991px) 96vw, (max-width: 1439px) 47vw, 670px" class="image"><img src="{{ asset('images/annie-spratt-O1TNdLNvJLM-unsplash.png') }}" loading="lazy" height="" alt="" width="555" srcset="images/annie-spratt-O1TNdLNvJLM-unsplash-p-500.png 500w, images/annie-spratt-O1TNdLNvJLM-unsplash-p-800.png 800w, images/annie-spratt-O1TNdLNvJLM-unsplash-p-1080.png 1080w, images/annie-spratt-O1TNdLNvJLM-unsplash.png 1110w" sizes="(max-width: 479px) 96vw, (max-width: 767px) 95vw, (max-width: 991px) 96vw, (max-width: 1439px) 47vw, 670px" class="image"></div>
      </div>
    </div>
  </section>
  <div class="section-faq">
    <div class="content-wrapper slim w-container">
      <div class="header-center-box _75">
        <h3 class="title_h3">Начни сейчас бесплатно!<br></h3>
        <div class="p-main">Не откладывайте свои планы на будущее — <strong class="p-bold">начните использовать приложение Corgish прямо сейчас </strong>и откройте новые горизонты в обучении прямо сейчас!</div>
      </div>
      <div class="accordion-wrapper">
        <div class="accordion-item">
          <div id="q1" class="accordion-item-trigger">
            <h4 class="accordion-heading"><strong class="accordion-heading">Можно ли использовать Corgish бесплатно?</strong></h4>
            <div class="icon_style_white accordion-icon">keyboard_arrow_down</div>
          </div>
          <div class="accordion-item-content">
            <p class="p-accordion">Да. Corgish имеет стартовую подписку, которая бесплтана для всех. Однако, для более эффективной формы обучения мы рекомендуем воспользоваться платной подпиской. Так вы сможете оценить всю эффективность приложения Corgish.</p>
          </div>
        </div>
        <div class="accordion-item">
          <div id="q2" class="accordion-item-trigger">
            <h4 class="accordion-heading"><strong class="accordion-heading">Действительно ли игровая форма обучения хорошо усваиваивается?</strong></h4>
            <div class="icon_style_white accordion-icon">keyboard_arrow_down</div>
          </div>
          <div class="accordion-item-content">
            <p class="p-accordion">Да, игровая форма обучения может быть очень эффективной для усвоения материала. Игры могут быть привлекательными и мотивирующими, что способствует активному участию и вовлеченности учащихся. Игровая форма обучения это — отличная мотивация, активное участие учеников, кроме того, ошибки рассматриваются как нормальная часть процесса.</p>
          </div>
        </div>
        <div class="accordion-item">
          <div id="q3" class="accordion-item-trigger">
            <h4 class="accordion-heading"><strong class="accordion-heading">Чем полезны тесты при обучении?</strong></h4>
            <div class="icon_style_white accordion-icon">keyboard_arrow_down</div>
          </div>
          <div class="accordion-item-content">
            <p class="p-accordion">Тесты при обучении имеют несколько полезных аспектов. Во-первых, они позволяют оценить текущий уровень знаний учащихся по определенной теме или предмету. Это помогает преподавателям и учащимся понять, насколько хорошо они усвоили материал и выявить области, требующие дополнительной работы.<br><br>Тесты при обучении полезны для: Оценки уровня знаний, предоставления обратной связи, закрепления материала, мотивации к обучению, отслеживания прогресса.</p>
          </div>
        </div>
        <div class="accordion-item">
          <div id="q4" class="accordion-item-trigger">
            <h4 class="accordion-heading">Могу ли я как учитель использовать готовые тесты?<br></h4>
            <div class="icon_style_white accordion-icon">keyboard_arrow_down</div>
          </div>
          <div class="accordion-item-content">
            <p class="p-accordion">Да. Некоторые тесты мы создаем сами, используя лучшие методики и практики, для того, чтобы преподавателям было проще работать со своими учениками. Кроме того, для быстрого создания тестов вы можете использовать искусственный интелект от Corgish, который обучен специально для обучения иностранным языкам.</p>
          </div>
        </div>
      </div>
      <div class="text-center-small">Остались вопросы? Перейдите в разде <a href="#" class="p-link-small">помощь</a> или напшите нам на почту свой вопрос <a href="mailto:support@example.com?subject=Question%20Regarding%20Example.com" class="p-link-small">support@corgish.ru</a>
      </div>
    </div>
  </div>
  <section class="section_btn">
    <div class="btn_container">
      <a href="#" class="btn-primary yellowlable w-inline-block">
        <div class="p-button">Одиночная игра</div>
      </a>
      <a href="#" class="btn-primary bluelable w-inline-block">
        <div class="p-button">Создать тест</div>
      </a>
    </div>
  </section>
  <div class="futter">
    <div class="futter_contaner">
      <div class="futteer_about_us">
        <a href="index.html" aria-current="page" class="header-logo-link w-nav-brand w--current"><img src="{{ asset('images/Logo.png') }}" alt="Corgish logo" width="198.5" class="header-logo"></a>
        <div class="p-main_futter">© 2023 ООО «Коргиш». Все права защищены. Перепечатка и любое использование материалов возможно только при наличии ссылки на первоисточник.</div>
      </div>
      <div class="futter_menu">
        <div class="title_h4">app.corgish.ru</div>
        <div class="p-accordion">Главная</div>
        <div class="p-accordion">Новости и акции</div>
        <div class="p-accordion">Помощь</div>
        <div class="p-accordion">Магазин</div>
        <div class="p-accordion">Цены</div>
        <div class="p-accordion">Политика конфиденциальности</div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6488518879e3a9444162df1c" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>