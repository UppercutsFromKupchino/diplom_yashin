<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="css/index.css" rel="stylesheet"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Главная</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
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
    <body>
        <div style="height: 110vh">
            <div style ="display: flex; justify-content: center">
               <div class="headerBar" style="width: 90%">
                   <div class="headerBarLeft">
                   <!--<img src="images/logo.png">-->
                       <a href="/about">О нас</a>
                       <div>Мебель на заказ</div>
                       <div>Реставрация</div>
                       <a href="/courses">МАСТЕР КЛАССЫ</a>
                       <div>Дизайнерам</div>
                   </div>
                   <div>
                       Контакты
                   </div>
               </div>
            </div>
           <div style ="display: flex; justify-content: center">
               <div class="firstPageHeader">
                    <div style="display: flex"><div>Столярная мастерская</div></div>
                    <div style="display: flex; justify-content: center; padding: 5%"><div><h1>Yashin Brothers</h1></div></div>
                    <div style="display: flex; justify-content: flex-end;"><div>Уникальные решения вашего интерьера</div></div>
               </div>
           </div>
        </div>

        <div style="display: flex; justify-content: center">
        <div class="secondScrText" style="justify-content: space-around">
                <div style="padding: 5% 15% 5% 15%; width: 50%">Интерьер как ничто отражает индивидуальность, утонченный вкус своего владельца, зрелость личности и смелые
                    сформированные взгляды. Он становится местом для творчества и вдохновения, местом гениальных идей и комфортного отдыха.
                    Для достижения этого необходим только индивидуальный подход к каждому нюансу.</div>
                <div style="margin: 5% 15% 5% 0%; padding-right: 10%; overflow: hidden; white-space: nowrap; width: 50%; align-self: center;
                border-bottom: 2px solid #000000;">подробнее о нас</div>

        </div>
        </div>
        <div class="secondScrText" style="padding: 10% 10% 5% 10%; justify-content: center">
            <div class="picture" style="align-self: center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.</div>
            <div style="padding: 7%">
                <div class="picRows" style="justify-content: space-around; padding: 2%">
                    <div class="picture">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    <div class="picture">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    <div class="picture">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                </div>
                <div class="picRows" style="justify-content: space-around">
                    <div class="picture">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    <div class="picture">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    <div class="picture">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                </div>
            </div>
        </div>
        <div class="secondScrText" style="justify-content: center; padding-bottom: 5%">Мы делаем</div>
        <div class="secondScrText" style="justify-content: center">
            <div class="secondScrText" style="justify-content:space-around; margin: 0% 5% 5% 5%">
                <div style="width: 33%; padding: 5%">
                    <div>Мебель на заказ
                        <p></p>
                        <div>Изготовление мебели и предметов интерьера по индивидуальным заказам под ключ. Проектирование,
                            создание реплик или копий в любом стилевом направлении.</div>
                    </div>
                </div>
                <div style="width: 33%; padding: 5%" >
                    <div>Реставрация
                        <p></p>
                        <div>Реставрация антикварной мебели, дверей, предметов интерьера</div>
                    </div>
                </div>
                <div style="width: 33%; padding: 5%">
                    <div>Мастер классы
                        <p></p>
                        <div>Расскажем о своей работе и познакомим с тонкостями реставрации мебели</div>
                    </div>

                </div>
            </div>
        </div>

        <div class="secondScrText" style="justify-content: center; padding: 10%">
            <div class="secondScrText" style="width: 33%; justify-content: flex-end; margin-right: 10%; align-items: flex-end">Yashin Brothers</div>
            <div style="width: 66%; margin-right: 20%"><h1>"В современном мире, когда мебельное производство поставлено на поток, мебель ручной работы в том числе
            и антикварная высоко ценится за свою неповторимость и уникальность."</h1></div>
        </div>
        <div style="margin: 15% 40% 0% 10%; font-size: 110px">Нужна консультация</div>
        <div style="margin: 2% 40% 5% 10%; font-size: 20px">Оставьте номер телефона. Мы перезвоним и ответим на все вопросы. Предоставим бесплатную консультацию</div>



        <form class="secondScrText" style="margin: 5% 20% 5% 20%" action="/api/add_cons" method="post">
            <div class="secondScrText" style="width:80%; border-bottom: 2px solid #000000; margin-right: 3%; align-items: center;">
                <div style="font-size: 80px">+7</div>
                <input id="phone" name="phone" width="500px">
            </div>
            <button style="width:20%; border: 2px solid #000000; padding: 3%; font-size: 20px" name="button" type="submit" value="send">Отправить
            </button>

        </form>





        <div style="margin: 15% 20% 0% 10% ">
            <div style="font-size: 150px; margin-left: 3%">Контакты</div>
            <div class="thirdScrText" style="margin-bottom: 5%; margin-top: 5%; font-size: 23px">
                <div>
                    <div>г. Санкт-Петербург</div>
                    <div>ул. Автовская, д. 31, к. 1</div>
                </div>
                <div>
                    <div>пн.-пт.</div>
                    <div>c 10:00 до 20:00</div>
                </div>
                <div>
                    <div>8 951 670-19-14</div>
                    <div>8 951 670-19-16</div>
                </div>

                <div>
                    <p></p>
                    <div>yashinbrothers@mail.ru</div>
                </div>
            </div>
        </div>
        <div class="fourthScrText" style="margin: 8% 12% 4% 12%">
            <div>© Все правы защищены. Yashin Brothers</div>
            <div>VK/INST</div>
        </div>
        <script src="js/index.js"></script>
    </body>
</html>
