import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import TestComponent from "./components/TestComponent.vue";


app.component('example-component', ExampleComponent);
app.component('test-component', TestComponent);


app.mount('#app');

