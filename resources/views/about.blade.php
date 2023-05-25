<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="css/about.css" rel="stylesheet"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>О нас</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
        <div>
            <div class="bgimg">
                <div style="background: rgba(0, 0, 0, 0.5)";>
                    <div style="height: 110vh">
                        <div style ="display: flex; justify-content: center">
                           <div class="headerBar" style="width: 74%; padding-right: 5%">
                               <div class="headerBarLeft">
                               <a href="/"><img src="images/logo.png" style="width: 63px; height: auto"></a>
                                   <a href="/about">О НАС</a>
                                   <a href="/furniture">МЕБЕЛЬ НА ЗАКАЗ</a>
                                   <a href="https://google.com">РЕСТАВРАЦИЯ</a>
                                   <a href="/courses">МАСТЕР КЛАССЫ</a>
                                   <a href="https://google.com">ДИЗАЙНЕРАМ</a>
                               </div>
                               <div class="flex" style="align-items: center">
                                   <a href="https://google.com">КОНТАКТЫ</a>
                               </div>
                           </div>
                        </div>

                       <div style ="display: flex; width: 50%">
                           <div class="firstPageHeader" style="margin-left: 40%; margin-top: 10%">
                                <div style="display: flex; font-size: 110px; line-height: 1"><div>ИСТОРИЯ БРЕНДА</div></div>
                                <div style="display: flex; margin: 7% 25% 10% 0%; font-size: 20px">Идея создания мастерской возникла от большого желания создавать
                                        необычные и красивые вещи.</div>
                           </div>
                       </div>

                    </div>
                </div>
            </div>



        <div style="display: flex; justify-content: center; margin: 8% 20% 0% 20%">
            <div class="secondScrText" style="justify-content: space-between">
                <div style="width: 60%; font-size: 20px">
                    <div style="display: flex; font-size: 110px; align-items: flex-start">О НАС</div>
                    <div style="padding-right: 30%;">Как и многое хорошее, все начинается в детстве.
                        Мы выросли в творческой семье и были окружены красотой. Любовь и интерес к работе с деревом нам была привита отцом.
                        С ним мы сделали свои первые шаги к будущей профессии.
                        Мы являемся выпускниками СПбГУКиИ Факультета Истории Русской Культуры отделения реставрации мебели.
                        Имеем художественное образование.
                        <div>Идея создания мастерской возникла от большого желания создавать необычные и красивые вещи.</div></div>
                </div>
                <div style="width:40%"><img src="images/menbw.png" style="width: 100%"></div>
            </div>
        </div>

        <div style="margin: 5% 20% 0% 20%">
            <img src="images/verstak.jpg" style="width: 100%">
        </div>

        <div class="secondScrText" style="margin:5% 20% 0% 20%; justify-content: space-between">
            <div class="smallText" style="width: 50%; padding-right: 7%">Наша мастерская специализируется на проектировании, изготовлении мебели и предметов интерьера на заказ.
                Эти предметы максимально отвечают требованиям заказчика, поскольку созданы исходя из его предпочтений и
                желаний под определенный интерьер.</div>
            <div class="smallText" style="width: 50%; padding-left: 7%">В своих изделиях мы используем проверенные материалы.<br/>
                <div> Имеем большой опыт работ в изготовлении мебели для жилых и общественных интерьеров.</div>
               </div>
        </div>

        <div style="margin:3% 20% 0% 20%; width: 12%; border-bottom: 2px solid #000000">
            <a href="https://google.com">
            <div class="secondScrText" style="justify-content: space-between; font-size: 20px">
            <div>галерея работ</div>
            <svg id="arrow-gallery" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none" style="transition: transform 0.5s"> <path d="M1 1H14M14 1L1 14M14 1V14" stroke="#292C2F" stroke-width="2"/> </svg>
            </div>
            </a>
        </div>

        <div style="margin:5% 20% 0% 20%">
            <div class="bigText" style="margin-bottom: 3%">ПОЧЕМУ МЫ?</div>
            <div class="smallText" style="width: 67%">Наша мастерская это семейное дело и поэтому большая ответственность при подходе к любой работе.
                А это значит, что каждое наше изделие выполнено на высоком уровне.</div>
            <div class="secondScrText" style="margin: 2% 0% 0% 25%; flex-wrap: wrap">
                <div class="whyListLined">
                    <div class="whyListNumber">01</div>
                    <div class="whyListText">Многолетний опыт</div>
                </div>
                <div class="whyListLined">
                    <div class="whyListNumber">02</div>
                    <div class="whyListText">Исключительное качество</div>
                </div>
                <div class="whyList">
                    <div class="whyListNumber">03</div>
                    <div class="whyListText">Уникальные решения</div>
                </div>
                <div class="whyList">
                    <div class="whyListNumber">04</div>
                    <div class="whyListText">Проверенные материалы</div>
                </div>
            </div>
        </div>

        <div style="background-color: #ad8653; height: 135vh">
            <div style="margin: 5% 20% 5% 20%; padding-top: 7%">
                <div class="bigText" style="margin-bottom: 5%; color: #FFFFFF">НАША КОМАНДА</div>
                <div class="secondScrText" style="justify-content: space-between">
                    <div class="nameBlock">
                        <div style="padding: 4% 15% 10% 10%; height: 36%">
                        <div class="namesText">Кирилл Яшин</div>
                        <div class="smallText" style="margin-top: 5%">Руководитель мастерской</div>
                        </div>
                        <img src="images/man1.jpg" style="width: 100%">
                    </div>
                    <div class="nameBlock">
                        <div style="padding: 4% 15% 10% 10%; height: 36%">
                            <div class="namesText">Данила Яшин</div>
                            <div class="smallText" style="margin-top: 5%">Мастер по производству</div>
                        </div>
                        <div><img src="images/man2.jpg" style="width: 100%"></div>
                    </div>
                    <div class="nameBlock">
                        <div style="padding: 4% 15% 10% 10%; height: 36%">
                            <div class="namesText">Николай Бохончик</div>
                            <div class="smallText" style="margin-top: 5%">Конструктор-проектировщик мебели</div>
                        </div>
                        <img src="images/man3.png" style="width: 100%; height: 487.66px">
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-left: 20%; margin-right: 20%">
        <div class="bigText" style="margin: 5% 40% 0% 0%">Нужна консультация</div>
        <div style="margin: 2% 40% 5% 0%; font-size: 20px">Оставьте номер телефона. Мы перезвоним и ответим на все вопросы. Предоставим бесплатную консультацию</div>
        <div class="secondScrText" style="margin: 5% 0% 12% 0%">
            <div class="secondScrText" style="width:80%; border-bottom: 2px solid #000000; margin-right: 3%; align-items: center;">
                <div style="font-size: 80px">+7</div>
                <input type="tel" id="phone" name="phone" width="500px"
                       pattern="9[0-9]{2}-[0-9]{3}-[0-9]{4}"
                       required>
            </div>
            <div class="secondScrText" style="width:20%; border: 2px solid #000000; padding: 3%; justify-content: center; align-items: center">
                <input class="sendButton" type="button" value="Отправить">
            </div>
        </div>
        </div>

        <div style="background-color: #292727">
            <div style="margin: 0% 20% 0% 20%; padding-bottom: 3%; padding-top: 5%">
                <div style="margin: 0% 0% 0% 0%">
                    <div class="bigText" style="color: #FFFFFF">КОНТАКТЫ</div>
                    <div class="thirdScrText" style="margin-bottom: 5%; margin-right:10%; margin-top: 3%">
                        <div class="smallText" style="color: #FFFFFF">
                            <div>г. Санкт-Петербург</div>
                            <div>ул. Автовская, д. 31, к. 1</div>
                        </div>
                        <div class="smallText" style="color: #FFFFFF">
                            <div>пн.-пт.</div>
                            <div>c 10:00 до 20:00</div>
                        </div>
                        <div class="smallText" style="color: #FFFFFF">
                            <div>8 951 670-19-14</div>
                            <div>8 951 670-19-16</div>
                        </div>
                        <div class="flex" style="align-items: flex-end">
                            <div class="smallText" style="color: #FFFFFF">yashinbrothers@mail.ru</div>
                        </div>
                    </div>
                </div>
                    <div class="fourthScrText" style="margin-top: 8%; color: #FFFFFF">
                        <div>© Все правы защищены. Yashin Brothers</div>
                        <div class="socialNetworks" style="width: 6%">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 99 99"
                                 xml:space="preserve">
                                <path style="fill:#ffffff;"
                                 fill-rule="evenodd" clip-rule="evenodd" d="M49 98C76.062 98 98 76.062 98 49C98 21.938 76.062 0 49 0C21.938 0 0 21.938 0 49C0 76.062 21.938 98 49 98ZM22 34C22.4442 55.3198 33.1042 68.1323 51.7933 68.1323H52.8527V55.9351C59.7202 56.6182 64.9132 61.6409 66.9973 68.1323H76.7008C74.0359 58.4292 67.0314 53.0649 62.658 51.0149C67.0314 48.4866 73.1814 42.3367 74.6505 34H65.8353C63.922 40.7649 58.251 46.915 52.8527 47.4958V34H44.0374V57.6433C38.5707 56.2766 31.6692 49.6482 31.3617 34H22Z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px"
                                 height="30px" viewBox="0 0 30 30" xml:space="preserve">
                                <path style="fill:#ffffff;" d="M15,11.014 C12.801,11.014 11.015,12.797 11.015,15 C11.015,17.202 12.802,18.987 15,18.987 C17.199,18.987 18.987,17.202 18.987,15 C18.987,12.797 17.199,11.014 15,11.014 L15,11.014 Z M15,17.606 C13.556,17.606 12.393,16.439 12.393,15 C12.393,13.561 13.556,12.394 15,12.394 C16.429,12.394 17.607,13.561 17.607,15 C17.607,16.439 16.444,17.606 15,17.606 L15,17.606 Z"></path><path style="fill:#ffffff;" d="M19.385,9.556 C18.872,9.556 18.465,9.964 18.465,10.477 C18.465,10.989 18.872,11.396 19.385,11.396 C19.898,11.396 20.306,10.989 20.306,10.477 C20.306,9.964 19.897,9.556 19.385,9.556 L19.385,9.556 Z"></path><path style="fill:#ffffff;" d="M15.002,0.15 C6.798,0.15 0.149,6.797 0.149,15 C0.149,23.201 6.798,29.85 15.002,29.85 C23.201,29.85 29.852,23.202 29.852,15 C29.852,6.797 23.201,0.15 15.002,0.15 L15.002,0.15 Z M22.666,18.265 C22.666,20.688 20.687,22.666 18.25,22.666 L11.75,22.666 C9.312,22.666 7.333,20.687 7.333,18.28 L7.333,11.734 C7.333,9.312 9.311,7.334 11.75,7.334 L18.25,7.334 C20.688,7.334 22.666,9.312 22.666,11.734 L22.666,18.265 L22.666,18.265 Z"></path>
                            </svg>

                        </div>
                    </div>
            </div>
        </div>

    </div>
    </body>
</html>
