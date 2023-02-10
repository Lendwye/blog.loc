import '../bootstrap';
import { createApp } from 'vue';
import PostComponent from '../vue_components/PostComponent.vue';

const app = createApp({})
app.component('post', PostComponent)
app.mount('#app')
