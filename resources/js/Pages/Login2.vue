<template>
    <div class="drop_menu">
        <div class="cont">
            <a href="/" class="item">Продукты</a>
            <a href="/login1" class="item">Создание 1</a>
            <a href="/login2" class="item">Создание 2</a>
            <a href="/login3" class="item">Создание 3</a>
            <a href="/login4" class="item">Создание 4</a>
            <a href="/login5" class="item">Создание 5</a>
            <a href="/login6" class="item">Создание 6</a>
            <a href="/login7" class="item">Создание 7</a>
        </div>
    </div>

    <header>
        <div class="container">
            <div class="flex">
                <a href="/" class="item">Продукты</a>
                <a href="/login1" class="item">Создание 1</a>
                <a href="/login2" class="item">Создание 2</a>
                <a href="/login3" class="item">Создание 3</a>
                <a href="/login4" class="item">Создание 4</a>
                <a href="/login5" class="item">Создание 5</a>
                <a href="/login6" class="item">Создание 6</a>
                <a href="/login7" class="item">Создание 7</a>
            </div>

            <div class="burger" id="burder" @click="openMenu">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </div>
        </div>
    </header>

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
                axios.post('/login2_post', {
                    title: this.inputs[0].value,
                    price: this.inputs[2].value,
                })
                    .then((response) => {
                        console.log(response)
                    })
            } catch (e) {
                console.log(e);
            }
        },

        clear: function () {
            for (let i = 0; i < 3; i++) {
                delete this.inputs[i].value
            }
        },

        openMenu: function () {
            document.querySelector('.drop_menu').style.transform = 'translateX(0)'
        }
    }
}
</script>
