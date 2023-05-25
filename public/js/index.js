let vue = new Vue({
    el: '#lead-form',
    data: {
        message: 'Hello world',
    }
});
Vue.component({
    template: `<div class="secondScrText" style="margin: 5% 10% 5% 10%">
            <div class="secondScrText" style="width:80%; border-bottom: 2px solid #000000; margin-right: 3%; align-items: center;">
                <div style="font-size: 80px">+7</div>
                <input type="tel" id="phone" name="phone" width="500px"
                       pattern="9[0-9]{2}-[0-9]{3}-[0-9]{4}"
                       required>
            </div>
            <div class="secondScrText" style="width:20%; border: 2px solid #000000; padding: 3%;
             justify-content: center; align-items: center">
                <input class="sendButton" type="button" value="Отправить">
            </div>
        </div>
    `,
    data: function() {
        return {

        }
    }
});
