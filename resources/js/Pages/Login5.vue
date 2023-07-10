<template>
    <div class="container">
        <div class="window">
            <div class="title">Добавить продукт</div>

            <div class="input_div">
                <label :for="item.id" v-for="item in inputs">{{ item.title }}
                    <input type="text" :id="item.id" v-model="item.value" :placeholder="item.placeholder">
                </label>
            </div>

            <div class="btns">
                <button class="btn" @click="sendRequest">Добавить</button>
                <button class="btn" @click="clear">Почисить</button>
            </div>
        </div>
    </div>
</template>


<script>
import axios from 'axios';

export default {
    data() {
        return {
            inputs: [
                {
                    title: "Title",
                    id: "title",
                    placeholder: "Самса",
                    value: ""
                },
                {
                    title: "Description",
                    id: "description",
                    placeholder: "Очень вкусная, с курицей",
                    value: ""
                },
                {
                    title: "Price",
                    id: "price",
                    placeholder: "169.99",
                    value: ""
                },
            ]
        }
    },

    methods: {
        sendRequest: function () {
            try {
                axios.post('/login5_post', {
                    title: this.inputs[0].value,
                    description: this.inputs[1].value,
                    price: this.inputs[2].value,
                })
            } catch (e) {
                console.log(e);
            }
        },

        clear: function () {
            for (let i = 0; i < 3; i++) {
                delete this.inputs[i].value
            }
        }
    }
}
</script>
