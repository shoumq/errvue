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

    <div class="container mt70">
        <div class="list-title">Все продукты</div>

        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            <tr v-for="item in products">
                <td>{{ item.id }}</td>
                <td>{{ item.title }}</td>
                <td>{{ item.description }}</td>
                <td>{{ item.price }}</td>
            </tr>
        </table>
    </div>
</template>


<script>
export default {
    props: ['products']
}
</script>


<style lang="sass" scoped>

.mt70
    margin-top: 70rem

table
    margin-top: 30rem
    font-family: arial, sans-serif
    border-collapse: collapse
    width: 100%

td, th
    border: 1px solid #b2b2b2
    text-align: left
    padding: 8rem
    font-size: 15rem


tr:nth-child(even)
    background-color: #dddddd

.list-title
    font-size: 25rem
    font-weight: 500
</style>
