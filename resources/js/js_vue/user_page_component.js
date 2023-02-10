import '../bootstrap';
import { createApp } from 'vue';
import UserPageComponent from '../vue_components/UserPageComponent.vue';

const app = createApp({})
app.component('user-page', UserPageComponent)
app.mount('#app')
