import './bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';
import {createApp} from 'vue';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import EmployeeForm from "./components/employee/EmployeeForm.vue";
import Home from "./components/employee/Home.vue";
import View from "./components/employee/View.vue";

app.component('example-component', ExampleComponent);
app.component('employee-form', EmployeeForm);
app.component('home', Home);
app.component('view', View);

app.mount('#app');
