<template>
    <v-app>
    <button @click="_testApiCall()">Click Me</button>
    </v-app>
</template>
<script>
export default {
    props: [],
    name: 'ubi-clinic-dashboard',
    data() {
        return {
            loader: false
        }
    },
     methods: {
        _testApiCall() {
            this.loader = true;
            const form = new FormData();
            form.append('respondent_id', 1);
            axios.post('test-api-call', form, {
                   'Content-Type': 'application/x-www-form-urlencoded',
                }).then(response => {
                    const data   = response.data;
                    const status = data.status;
                    if (status) {
                    }
                }).catch(err => {
                    this.loader = false;
                });
        },
    },
    mounted: function() {
    }
}
</script>
