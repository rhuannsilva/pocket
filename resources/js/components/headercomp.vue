<template>
    <div class="container">
        <div class="head">
            <h1>Control My Pocket</h1>
        </div>
        <div ref="buttonadd" class="buttonadd">
            <button @click="showModal = true"><img src="\images\icon-1.png" alt="">Novo</button>
        </div>

        <vue-final-modal v-model="showModal" classes="modal-container" content-class="modal-content">
            <div class="header-modal">
                <span>Nova Despesa</span>
                <button class="modal-close" @click="showModal = false">x</button>
            </div>

            <div class="add-despesa">
                <input class="input-despesa" type="text" placeholder="Valor">
                <input class="input-despesa" type="text" placeholder="Descrição">
                <input class="input-despesa" type="text" placeholder="Tipo Despesa">
                <input class="input-despesa" type="date" placeholder="Data Vencimento">
                <button class="button-save">
                    Salvar
                </button>
            </div>
        </vue-final-modal>
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
    transition: 2s;
}

.buttonadd button img {
    width: 15px;
}

.add-despesa {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 15px;
}

.input-despesa {
    padding: 15px;
    border: none;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.4);
    width: 260px;
}

.input-despesa:focus {
    outline: none;
}

.header-modal {
    margin: 0 0 20px 0;
}

.button-save {
    border-radius: 10px;
    background-color: #03045E;
    color: #fff;
    width: 100px;
    padding: 10px;
}


::v-deep .header-modal {
    display: flex;
    justify-content: space-between;
}

::v-deep .modal-container {
    display: flex;
    justify-content: center;
    align-items: center;

}

::v-deep .modal-content {
    display: flex;
    flex-direction: column;
    margin: 0 1rem;
    padding: 20px;
    border-radius: 10px;
    border: 1px solid #e2e8f0;
    background: #fff;
}

.modal__title {
    font-size: 1.5rem;
    font-weight: 700;
}

.dark-mode div::v-deep .modal-content {
    border-color: #2d3748;
    background-color: #1a202c;
}
</style>



<script>
import { VueFinalModal, ModalsContainer } from 'vue-final-modal';

export default {
    components: {
        VueFinalModal,
        ModalsContainer
    },
    data: () => ({
        showModal: false
    }),
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
