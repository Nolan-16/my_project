import * as Vue from "vue";
import { ref } from "vue";

const application = {
    setup() {
        const page = ref(1);
        const name = ref("");
        const validateResult = ref("");
        const title = ref("vue test title");

        let buttonclick = function(){
            title.value = "value update.";
        };

        let validate = function(){
            let isKana = name.value.match(/^[ぁ-んー　]*$/);
            validateResult.value=isKana ? "正常" :"ひらがな以外が入力されています。";
        };

        return {
            title,
            buttonclick,

            name,
            validateResult,
            validate,

            page,
        };
    },
};

try {
    let mainElement = document.getElementsByTagName("main")[0];
    Vue.createApp(application).mount(mainElement);
} catch (e) {}
