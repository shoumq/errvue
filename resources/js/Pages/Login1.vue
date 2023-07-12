<template>
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
        sendRequest: function () { },

        clear: function () {
            for (let i = 0; i < 3; i++) {
                delete this.inputs[i].value
            }
        }
    }
}
</script>
