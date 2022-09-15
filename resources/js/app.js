import './bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';
import {createApp} from 'vue';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import EmployeeForm from "./components/employee/EmployeeForm.vue";

app.component('example-component', ExampleComponent);
app.component('employee-form', EmployeeForm);

app.mount('#app');
