Vue.use(VeeValidate,{
    fieldsBagName: 'vFields',
    locale:'en',
    dictionary: {
        es: {
            custom: {
                email: {
                    required: 'Your email is empty' // messages can be strings as well.
                },
                name: {
                    required: 'Your name is empty'
                }
            }
        }
    }
});

var app = new Vue({
    el: ".container",
    data: {
        name: ''
    },
    methods: {
        validateBeforeSubmit(scope) {
            return this.$validator.validateAll('origin');
        }
    },

});