<template>
    <div>
        <form @submit.prevent="subscribeFooter">
            <div class="footer_input-box">
                <input type="Email" required v-model="subscribeEmailFooter.email" placeholder="Suscríbete, ingresa tu e-mail">
                <button type="submit" class="button"><i class="fa fa-check"></i></button>
            </div>
        </form>
    </div>
    
</template>

<script>

export default {
    data(){
        return{
            subscribeEmailFooter: {email: ''},
        }
    },
    methods:{
        subscribeFooter(){
            // console.log(this.subscribe.email);
            const params = {
                email: this.subscribeEmailFooter.email,
            }
            // Limpiamos campos
            this.subscribeEmailFooter.email = '';

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
