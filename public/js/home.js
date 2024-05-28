    var app = new Vue({
        el: "#app_form",
        data:{
           client:{
            id:'',
            name:'',
            redirect:''
        },
        client_id:'',
        clients:[]
    },
    methods: {
        getClients:function(){
            this.$http.get('/oauth/clients').then(response => {
                this.clients = response.data;
            }, response => {
                M.toast({html: response.status + ' ' + response.statusText + ' (' + response.url, classes: 'rounded red'});
            });
        },
        save:function(){
            if (this.client.name == '') {
                $('#name').focus();
                M.toast({html: 'Campo nombre es requerido.', classes: 'rounded orange'});
                return;
            }
            this.$http.post('/oauth/clients',this.client).then(response => {
                if (response.data) {
                  M.toast({html: 'Cliente creado satisfactoriamente.', classes: 'rounded green'});
                  this.client.name = '';
                  this.getClients();  
              }
          }, response => {
            M.toast({html: response.status + ' ' + response.statusText + ' (' + response.url, classes: 'rounded red'});
        });
        },
        preload:function(data){
            $('#update').show();
            $('#save').hide();
            this.client.name = data.name;
            this.client_id = data.id;
            M.toast({html: 'Datos precargados correctamente.', classes: 'rounded green'});
        },
        update:function(){
         if (this.client.name == '') {
            $('#name').focus();
            M.toast({html: 'Campo nombre es requerido.', classes: 'rounded orange'});
            return;
        } 
        this.$http.put('/oauth/clients/'+this.client_id,this.client).then(response => {
            if (response.data) {
              M.toast({html: 'Cliente actualizado satisfactoriamente.', classes: 'rounded green'});
              this.client.name = '';
              this.getClients();
              $('#update').hide();
              $('#save').show();  
          }
      }, response => {
        M.toast({html: response.status + ' ' + response.statusText + ' (' + response.url, classes: 'rounded red'});
    }); 
    },
    delete_forever:function(data){
        this.client_id = data.id;
        this.$http.delete('/oauth/clients/'+this.client_id).then(response => {
            if (response.ok) {
                M.toast({html: 'Cliente eliminado satisfactoriamente.', classes: 'rounded green'});
                this.getClients(); 
            }
        }, response => {
            M.toast({html: response.status + ' ' + response.statusText + ' (' + response.url, classes: 'rounded red'});
        }); 
    }
},
mounted(){
    var environment = this;
    environment.client.id = $('#client_id').val();
    environment.client.redirect = $('#host').val();
    $('#update').hide();
    environment.getClients();
}
});