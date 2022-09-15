import './bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';
import {store} from "./store/index.js";
import {createApp} from 'vue';

const app = createApp({});
window.Vue = require('vue').default;

import ExampleComponent from './components/ExampleComponent.vue';
import EmployeeForm from "./components/employee/EmployeeForm.vue";

app.component('example-component', ExampleComponent);
app.component('employee-form', EmployeeForm);

app.use(store);
app.mount('#app');
