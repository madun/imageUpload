<template>
    <!-- <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data"> -->
        
        <div>
            <input type="file" name="image" @change="GetImage" accept="image/*">
            <img :src="avatar" alt="Image">
            <a href="#" class="btn btn-success" @click.prefent="upload">Upload</a>
        </div>
    <!-- </form> -->
</template>

<script>
export default {
    props:['user'],
    data(){
        return{
            avatar:this.user.avatar
        }
    },
    methods: {
        GetImage(e){
            let image = e.target.files[0]
            let reader = new FileReader();

            reader.readAsDataURL(image);
            reader.onload = e => {
                this.avatar = e.target.result
            }
        },
        upload(){
            axios.post('/upload',{'image':this.avatar})
        }
    }
}
</script>
