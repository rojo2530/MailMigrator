Vue.use(VeeValidate);

var app = new Vue({
    el: ".container",
    data: {
        name: ''
    },
    methods: {
        validateBeforeSubmit() {
            this.$validator.validateAll('origin');
            this.$validator.validateAll('destiny');
            this.$validator.validateAll();


        }
    },

});