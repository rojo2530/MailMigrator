Vue.use(VeeValidate);

var app = new Vue({
    el: ".container",
    data: {
        migration: {
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
           // if (this.$validator.validateAll('origin') && this.$validator.validateAll('destiny')) {
           //     alert(this.migration.emailOrg);
           // }
            this.$validator.validateAll('origin').then((resultOrig) => {
                if (resultOrig) {
                    alert(this.migration.emailOrg);
                }

            });
        }
    },

});