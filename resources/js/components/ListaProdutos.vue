<template>
    <div>
        <h2 class="text-center">Lista de Produtos</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="produto in produtos" :key="produto.id">
                <td>{{ produto.id }}</td>
                <td>{{ produto.nome }}</td>
                <td>{{ produto.descricao }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'editar', params: { id: produto.id }}" class="btn btn-success">Editar</router-link>
                        <button class="btn btn-danger" @click="deleteProduto(produto.id)">Excluir</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                produtos: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/produtos/')
                .then(response => {
                    this.produtos = response.data;
                });
        },
        methods: {
            deleteProduto(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/produtos/delete/${id}`)
                    .then(response => {
                        let i = this.produtos.map(data => data.id).indexOf(id);
                        this.produtos.splice(i, 1)
                    });
            }
        }
    }
</script>