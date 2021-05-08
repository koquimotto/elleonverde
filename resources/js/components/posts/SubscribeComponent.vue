<template>
    <div>
        <form @submit.prevent="agregarEmail" class="sidebar__search-form">
            <input type="email" required v-model="subscribe.email" placeholder="Suscríbete, ingresa tu email" style="width:75%">
            <button type="submit" ><i class="fa fa-paper-plane"></i></button>
        </form>
    </div>
    
</template>

<script>

export default {
    data(){
        return{
            subscribe: {email: ''},
        }
    },
    methods:{
        agregarEmail(){
            // console.log(this.subscribe.email);
            const params = {
                email: this.subscribe.email,
            }
            // Limpiamos campos
            this.subscribe.email = '';

            axios.post('/subscribe/store', params);

            // Sweet alert
            Swal.fire({
                icon: 'success',
                title: 'Suscripción confirmada',
                // text: 'Hola mundo',
                html: '¡En horabuena! Se ha confirmado su suscripción en nuestra lista.<br/>¡Gracias por suscribirse!<br/><b>Revisa tu bandeja de entrada, te llegará un correo de bienvenida.</>',
                showConfirmButton: false,
                timer: 6000,
            })
        }
    },

}
</script>
