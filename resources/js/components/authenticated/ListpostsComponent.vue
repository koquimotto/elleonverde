<template>
    <div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Imágen</th>
                        <th scope="col">Título</th>
                        <th scope="col">Comentarios</th>
                        <th scope="col">Contenido</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                            <tr v-for="(post, index) in posts" :key="index">
                                <td>
                                <a v-bind:href="'/colaborador/editar/'+post.slug">
                                    <img v-bind:src="'/uploads/images/thumbs/'+post.image" alt="El León Verde">
                                </a>
                                </td>
                                <td>{{ post.title }}</td>
                                <td style="text-align:center"><a href="">{{ post.total_coments }}</a></td>
                                <td style="text-align:right">
                                    <a class="btn btn-primary btn-sm" v-bind:href="'/colaborador/editar/'+post.slug"><i class="fa fa-edit"></i></a>
                                    <button class="btn btn-info btn-sm" @click="showModal(post);"><i class="fa fa-key"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                    </tbody>
            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" v-bind:class="{show:modal}">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editar Metadatos</h5>
                <button type="button" class="close" @click="closeModal();">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form >
                    <div class="form-group">
                    <label for="">Descripción</label>
                    <textarea v-model="post.description" class="form-control" type="text" id="" cols="30" rows="5" ></textarea>
                    </div>

                    <div class="form-group">
                    <label for="">Palabras clave</label>
                    <textarea v-model="post.keywords" class="form-control" type="text" id="" cols="30" rows="5"> </textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" @click="closeModal();">Close</button>
                <button type="button" class="btn btn-primary" @click="guardar();">Guardar</button>
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
            posts: [],
            post: { keywords:'', description:''},
            user: $('#userId').val(),
            modal: false,
            idPost: 0,
            // titleModal:'',
            counter:0,
        }
    },
    created(){
        this.listar();
        // console.log(this.showModal);
        // this.showModal();
    },

    methods:{
        async listar(){
            const res = await axios.get('/auth/list/'+this.user);
            this.posts = res.data;
        },
        
        showModal(data={}){
            this.modal = true;
            // console.log(data);
            this.idPost = data.id;
            this.post.keywords = data.keywords;
            this.post.description = data.description;    
        },

        closeModal(){
            this.modal = false;    
        },

        // async showModal() {
        //     console.log(this.showModal);
        // },

        async guardar(){
            const res = await axios.post('/colaborador/update-meta/'+this.idPost,this.post);
            this.listar();
            this.closeModal();
        },

        

    },

}
</script>
<style>
    .show{
        display: list-item;
        opacity: 1;
        background: rgba(0,0,0,0.7)
    }

</style>