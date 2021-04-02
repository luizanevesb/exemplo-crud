<template>
    <div>
        <h3 class="text-center">Novo Produto</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addProduto">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" v-model="produto.nome">
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <input type="text" class="form-control" v-model="produto.descricao">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                produto: {}
            }
        },
        methods: {
            addProduto() {
                this.axios
                    .post('http://localhost:8000/novo', this.produto)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>