<template>
<div class="container">
    <div class="revenue">
        <div class="text">
            <h1>Dashboard</h1>
        </div>
        <div class="content-card">
            <div class="card">
                <p>Saldo Atual</p>
                <p>R$ 1.800,00</p>
            </div>
            <div class="card">
                <p>Despesa</p>
                <p>R$ 800,00</p>
            </div>
            <div class="card">
                <p>Previsto</p>
                <p>R$ 1.800,00</p>
            </div>
            <div class="card">
                <p>Ultima Transação</p>
                <p>R$ 1.800,00</p>
            </div>
        </div>
    </div>
    <div class="monthly">
        <div class="text">
            <h1>Balanço Mensal</h1>
        </div>
        <div class="monthly-content">
            <div class="card-monthly">
                <div class="text-card">
                    <p>Receitas</p>
                    <p>R$ 0,00</p>
                </div>
                <div class="text-card">
                    <p>Receitas</p>
                    <p>R$ 0,00</p>
                </div>
                <div class="text-card">
                    <p>Receitas</p>
                    <p>R$ 0,00</p>
                </div>
                <div class="separator"></div>
                <div class="text-card">
                    <p>Total</p>
                    <p>R$ 0,00</p>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<style scoped>
.content-card {
    display: flex;
    flex-direction: row;
    justify-content: center;
    gap: 50px;
}

.card {
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.4);
    border-radius: 10px;
    max-width: 260px;
    width: 100%;
    padding: 0 10px;
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.revenue, .monthly{
    width: 62%;
}
.monthly{
    margin: 20px 0;
}
.text-card{
    flex-direction: row;
    display: flex;
    justify-content: space-between;
    line-height: 1;
}
.card-monthly{
    width: 559px;
    height: 303px;
    padding: 20px 40px;
    box-shadow: 0px 4px 10px rgb(0 0 0 / 40%);
    border-radius: 10px;
}
.separator{
    border: solid 1px rgba(0, 0, 0, 0.445);
    margin-top: 5px;
}
</style>
