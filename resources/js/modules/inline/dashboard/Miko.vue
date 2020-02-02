<script>
export default {
    props: ['miko_watcher'],
    name: 'ubi-clinic-miko',
    data() {
        return {
            loader: false,
            dialog: false,
            elbert_watcher: 1
        }
    },
    watch: {
        miko_watcher: function(n, o) {
            this.dialog = true;
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
