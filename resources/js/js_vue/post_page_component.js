import '../bootstrap';
import { createApp } from 'vue';
import PostPageComponent from '../vue_components/PostPageComponent.vue';

const app = createApp({})
app.component('post-page', PostPageComponent)
app.mount('#app')
