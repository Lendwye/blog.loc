import '../bootstrap';
import { createApp } from 'vue';
import AuthorComponent from '../vue_components/AuthorComponent.vue';

const app = createApp({})
app.component('author', AuthorComponent)
app.mount('#app')
