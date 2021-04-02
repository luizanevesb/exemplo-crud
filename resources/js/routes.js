import ListaProdutos from './components/ListaProdutos.vue';
import NovoProduto from './components/NovoProduto.vue';
import EditarProduto from './components/EditarProduto.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: ListaProdutos
    },
    {
        name: 'novo',
        path: '/novo',
        component: NovoProduto
    },
    {
        name: 'editar',
        path: '/editar/:id',
        component: EditarProduto
    }
];