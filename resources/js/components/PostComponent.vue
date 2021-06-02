
<template>
    <div>
        <!-- Imagen del post -->
        <div class="news_detail_image_box">
            <img v-bind:src="'/uploads/images/'+image" alt="">
        </div>

        <!-- Cabecera del post -->
        <ul class="list-unstyled news_detail__meta">
            <li><a href="#"><i class="far fa-user-circle"></i> {{ user }}</a></li>
            <li><a href="#"><i class="far fa-comments"></i>{{ total }} Comentarios</a></li>
            <!-- <li><a href=""><i class="far fa-edit"></i> Editar</a></li> -->
        </ul>

        <!-- Contenido del post -->
        <div class="news_detail_content">
            <h2>{{ title }}</h2>
            <div v-html="detail"></div>                     
        </div>

        <!-- Etiquetas / Compartir -->

        <div class="news_detail__bottom">
            <p class="news_detail__tags">
                <span>Etiquetas:</span>
                <!-- <a href="#">Agriculture,</a>
                <a href="#">Food,</a>
                <a href="#">Economy</a> -->
            </p>
            <div class="news_detail__social-list">
                <div>
                    <a style="background-color:#fff;" v-bind:href="'https://api.whatsapp.com/send?text= https://elleonverde.com/blog/'+slug">
                        <img style="width:96px; padding-top:6px;padding-right:28px" src="/assets/images/whatsapp-share-button-el-leon-verde.png" alt="">
                    </a>
                </div>
                <!-- Your share button code -->
                <div class="fb-share-button" 
                v-bind:data-href="'https://elleonverde.com/blog/'+slug" 
                data-layout="button_count" data-size="large">
                </div>                                   
                
                <!-- <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a> -->
            </div>
        </div>

        <br>

        <div class="comment-form"> 
            <h3 class="comment-one__title title-style">{{ total }} Comentarios</h3>
                <form @submit.prevent="agregar">
                    <input type="text" v-model="comment.name" placeholder="Nombre" class="form-control form-control-sm mb-2" required>
                    <input type="email" v-model="comment.email" placeholder="Email" class="form-control form-control-sm mb-2" required>
                    <textarea cols="30" rows="4" v-model="comment.message" class="form-control form-control-sm mb-2" placeholder="Añade tu respuesta" required></textarea>
                    <div style="text-align: right">
                        <button type="submit" class="thm-btn comment-one__btn">Comentar</button>
                    </div>
                </form>
        </div>
        <hr>
            <div v-for="(comment, index) in comments" :key="index">
                <div class="comment-one" >
                    <div class="comment-one__single">
                        <div class="comment-one__image">
                            <img src="/assets/images/avatar-el-leon-verde.png" alt="">
                        </div>
                        <div class="comment-one__content">
                            <h3 class="title-style">{{ comment.name }}</h3>
                            <p> {{ comment.comment }} </p>
                            <!-- Boton responder -->
                            
                            <input id="replyID" type="hidden" v-bind:value="comment.id">          
                            <button type="button" class="thm-btn comment-one__btn" data-toggle="modal" data-target="#staticBackdrop">Responder</button>
                            <!-- End boton responder -->  
                        </div>
                    </div>
                </div>

                <div class="comment-two">
                    <div class="comment-one__single" v-for="(reply, index) in commentsReply" :key="index">
                        <div class="comment-one__image">
                            <img src="/assets/images/avatar-el-leon-verde.png" alt="">
                        </div>
                        <div class="comment-one__content">
                            <h3 class="title-style">{{ reply.name }}</h3>
                            <p> {{ reply.comment }} </p>
                            <!-- Boton responder -->               
                            <button type="button" class="thm-btn comment-one__btn" data-toggle="modal" data-target="#staticBackdrop">Responder</button>
                            <!-- End boton responder -->  
                        </div>
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
            comment: {idPt: '', name: '', email: '', message: ''},
            total: 0,
            idPost: $('#postId').val(),
            image: $('#postImage').val(),
            date: $('#postDate').val(),
            user: $('#userName').val(), 
            title: $('#postTitle').val(),
            detail: $('#postContent').val(),
            slug: $('#postSlug').val(),
            
            commentsReply: [],
            idReply: 0,
        }
    },
    // Traer comentarios
    created(){
        // axios.get('/comments')
        // .then(res=>{
        //     this.comments = res.data;
        // })
        this.listar();
        this.listarReply();
        this.totalComments();
    },

    methods:{
        async listar(){
            const res = await axios.get('/comments/'+this.idPost);
            this.comments = res.data;
        },

        async listarReply(){
            const res = await axios.get('/replies/'+this.idReply);
            this.commentsReply = res.data;
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

            axios.post('/comentario/'+this.idPost+'/guardar', params)
            .then(res=>{
                this.comments.push(res.data)
            });
            this.listar();
            this.totalComments();
        },
        // Cantidad de comentarios
        async totalComments(){
            const res = await axios.get('/comments/count/'+this.idPost);
            this.total = res.data;
            return this.total;
        }

        

    },

}
</script>
