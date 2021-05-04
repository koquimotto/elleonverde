
<template>
    <div>
        <div class="comment-form"> 
            <h3 class="comment-one__title title-style">{{ total }} Comentarios</h3>
                <form @submit.prevent="agregar">
                    <input type="text" v-model="idPost">
                    <input type="text" v-model="comment.name" placeholder="Nombre" class="form-control form-control-sm mb-2" >
                    <input type="email" v-model="comment.email" placeholder="Email" class="form-control form-control-sm mb-2" >
                    <textarea cols="30" rows="4" v-model="comment.message" class="form-control form-control-sm mb-2" placeholder="Añade tu respuesta" ></textarea>
                    <div style="text-align: right">
                        <button type="submit" class="thm-btn comment-one__btn">Comentar</button>
                    </div>
                </form>
        </div>
        <hr>
            
            <div class="comment-one" >
                <div class="comment-one__single" v-for="(item, index) in comments" :key="index">
                    <div class="comment-one__image">
                        <img src="/assets/images/avatar-el-leon-verde.png" alt="">
                    </div>
                    <div class="comment-one__content">
                        <h3 class="title-style">{{ item.name }}</h3>
                        <p> {{ item.comment }} </p>
                        <!-- Boton responder -->               
                        <button type="button" class="thm-btn comment-one__btn" data-toggle="modal" data-target="#staticBackdrop">Responder</button>
                        <!-- End boton responder -->  
                    </div>
                </div>
            </div>
        
        
    </div>
</template>

<script>
export default {
    data(){
        return{
            comments: [],
            comment: {name: '', email: '', message: ''},
            total: 0,
            idPost: ''
        }
    },
    // Traer comentarios
    created(){
        // axios.get('/comments')
        // .then(res=>{
        //     this.comments = res.data;
        // })
        this.listar();
        this.totalComments();
    },

    methods:{
        async listar(){
            const res = await axios.get('/comments');
            this.comments = res.data;
        },

        agregar(){
            // console.log(this.comment.name, this.comment.email, this.comment.message);
            const params = {
                name: this.comment.name, 
                email: this.comment.email, 
                message: this.comment.message
            }
            // Limpiamos campos
            this.comment.name = '';
            this.comment.email = '';
            this.comment.message = '';

            axios.post('/comentario/guardar', params)
            .then(res=>{
                this.comments.push(res.data)
            });
            this.listar();
            this.totalComments();
        },
        // Cantidad de comentarios
        async totalComments(){
            const res = await axios.get('/comments/count/'+1);
            this.total = res.data;
            return this.total;
        }

        

    },

}
</script>
