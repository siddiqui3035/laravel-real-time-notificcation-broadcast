require('./bootstrap');

import { createApp } from 'vue';

import Posts from'./components/PostComponent.vue';

const app = createApp({});

app.component('posts',Posts);
app.mount("#app");
