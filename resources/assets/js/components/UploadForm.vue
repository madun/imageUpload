<template>
    <!-- <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data"> -->
        
        <div>
            <input type="file" name="image">
            <img src="" alt="Image">
            <a href="#" class="btn btn-success" @click.prefent="upload">Upload</a>
        </div>
    <!-- </form> -->
</template>

<script>
export default {
    methods: {
        upload(){
            axios.post('/upload')
        }
    }
}
</script>
