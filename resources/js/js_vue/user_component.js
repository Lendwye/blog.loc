import '../bootstrap';
import { createApp } from 'vue';
import UserComponent from '../vue_components/UserComponent.vue';

const app = createApp({})
app.component('user', UserComponent)
app.mount('#app')
