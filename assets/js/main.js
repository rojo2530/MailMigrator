Vue.use(VeeValidate);
var app = new Vue({
    el: ".container",
    data: {
        migration: {
            accountName: 'hola',
            emailOrg: '',
            passwordOrg: '',
            imapOrg: '',
            emailDst: '',
            passwordDst: '',
            imapDst: '',
        }
    },
    methods: {
        validateBeforeSubmit() {
            this.$validator.validateAll().then((resultOrig) => {
                if (resultOrig) {
                    alert("Mi bollito :)");
                }
            });
        }
    },

});