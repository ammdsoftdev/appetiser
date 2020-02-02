<script>
export default {
    props: ['elbert_watcher', 'show'],
    name: 'ubi-clinic-elbert',
    data() {
        return {
            loader: false,
            dialog: false,
            is_show: false
        }
    },
    watch: {
        elbert_watcher: function(n, o) {
        },
        show: function(n, o) {
            this.is_show = this.show;
        }
    },
    methods: {
        _invokeParentMethod() {
            this.$parent._invokeFromChild('pan de leche');
        }
    },
    mounted: function() {
    }
};
</script>
