<template>
    <div class="container">
        <div class="login">
            <input id="user" type="text" placeholder="Login">
            <input id="password" type="password" placeholder="Senha">
            <button @click="userVerification">Entrar</button>
        </div>
    </div>
</template>

<style scoped>
.container{
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 200px 0;
}
.login{
    display: flex;
    padding: 20px;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 20px;
    height: 400px;
    width: 440px;
    border-radius: 20px;
    box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.25);
}
.login input{
    border-radius: 6px;
    height: 50px;
    width: 250px;
    padding: 10px;
    border: none;
    box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.25);
}
.login button{
    background-color: #03045E;
    color: #fff;
    width: 100px;
    padding: 15px;
    border-radius: 5px;
    cursor: pointer;
}
.login button:hover{
    background-color: #03055e70;
    transition: 0.2s;
}
</style>

<script>
    export default {
        // mounted() {
        //     console.log('Component mounted.')
        // },
        methods: {
            nextPage(){
                location.href = 'dashboard';
            },
            userVerification(){
                var userCheck = document.getElementById('user').value;
                var passCheck = document.getElementById('password').value;

                if (userCheck === "rhuann@gmail" && passCheck === "1234") {
                    this.nextPage()
                }else{
                    alert("Senha incorreta")
                }
            }
        },
    }
</script>


