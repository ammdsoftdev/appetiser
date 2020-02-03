<script>
export default {
    props: ["id", "name"],
    name: 'ubi-clinic-dashboard',
    data() {
        return {
            loader: false,
            selected_id: this.id,
            selected_name: this.name,
            miko_watcher: 1,
            elbert_watcher: 1,
            appetiser_watcher: 1,
            is_show: false,


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
        }
    },
    mounted: function() {
    }
};
