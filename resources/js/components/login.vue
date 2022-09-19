<template>
    <div class="container">
        <div class="login">
            <form  @submit.prevent="login">
                <input type="hidden" name="_token" :value="csrf_token">
                <input id="user" type="text" placeholder="Login" v-model="usuario">
                <input id="password" type="password" placeholder="Senha" v-model="senha">
                <button type="submit">Entrar</button>
            </form>
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
.login form{
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
import axios from 'axios';

    export default {
        data() {
            return {
                usuario: '',
                senha: ''
            }
        },
        methods: {
            login(){
                axios.post('/api/login/', {
                        usuario:this.usuario,
                        senha:this.senha
                    } ).then(response => {
                        window.location.href = '/dashboard';
                    }).catch(erro=> {console.log(erro)})
            }
        },
        props: [
            'csrf_token'
        ]
    }
</script>


