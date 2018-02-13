Vue.use(VeeValidate,{
    fieldsBagName: 'vFields',
    locale:'en',

});

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