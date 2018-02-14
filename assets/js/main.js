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
            this.$validator.validateAll('origin');
            this.$validator.validateAll('destiny');
            alert("hola que tal");

            /*      this.$validator.validateAll('origin').then((resultOrig) => {
                      if (resultOrig) {
                          this.$validator.validateAll('destiny').then((resultDst) => {
                             if (resultDst) {
                                 alert(this.migration.emailOrg);
                             }
                          });
                      }

                  }); */
        }
    },

});