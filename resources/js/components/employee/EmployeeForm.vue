<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/" class="btn btn-dark btn-sm float-right">
                    <i class="bi bi-arrow-left"></i>
                </a>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="name" class="my-2">Name</label>
                        <input type="text" class="form-control" id="name" v-model="form.name"
                               placeholder="Enter employee name" required>
                    </div>
                    <div class="form-group">
                        <label for="department" class="my-2">Department</label>
                        <input type="text" class="form-control" id="department" v-model="form.department"
                               placeholder="Enter employee department" required>
                    </div>
                    <div class="form-group">
                        <label for="section" class="my-2">Section</label>
                        <input type="text" class="form-control" id="section" v-model="form.section"
                               placeholder="Enter employee section" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="my-2">Email</label>
                        <input type="email" class="form-control" id="email" v-model="form.email"
                               placeholder="Enter employee email" required>
                    </div>
                    <button type="submit" class="btn btn-warning text-white my-2 w-100" @click="saveForm()">save
                    </button>
                </form>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: 'employee-form',
    data() {
        return {
            form: {
                name: '',
                department: '',
                section: '',
                email: ''
            }
        }
    },
    methods: {
        saveForm() {
            console.log(this.form);
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
