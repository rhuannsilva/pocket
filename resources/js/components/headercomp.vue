<template>
    <div class="container">
        <div class="head">
            <h1>Control My Pocket</h1>
        </div>
    </div>    
</template>

<style scoped>
.container{
    width: 100%;
    height: 8vh;
    padding: 10px;
    background-color: #03045E;
    border-radius: 0 0 10px 10px;
}
.head h1{
    color: #fff;
}
</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
