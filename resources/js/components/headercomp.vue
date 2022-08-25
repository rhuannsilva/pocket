<template>
<div class="container">
    <div class="head">
        <h1>Control My Pocket</h1>
    </div>
    <div ref="buttonadd" class="buttonadd">
        <button><img src="\images\icon-1.png" alt="">Novo</button>
    </div>
</div>
</template>

<style scoped>
.container {
    display: flex;
    width: 100%;
    height: 8vh;
    padding: 10px;
    background-color: #03045E;
    border-radius: 0 0 10px 10px;
    justify-content: space-between;
    align-items: center;
}

.head h1 {
    color: #fff;
}

.buttonadd button {
    border-radius: 20px;
    margin: 0 70px 0;
    border: none;
    display: flex;
    padding: 15px;
    align-items: center;
    gap: 10px;
}

.buttonadd button img {
    width: 15px;
}
</style>

<script>
export default {
    mounted() {
        var routeVerification = window.location.href;
        var isHomeRoute = routeVerification.slice(-1) === "/";
        var navbarStylePageScroll;

        if (isHomeRoute) {
            this.$refs.buttonadd.style.display = "none";
        } else {
            window.addEventListener("scroll", this.navbarStylePageScroll);
        }
    }
}
</script>
