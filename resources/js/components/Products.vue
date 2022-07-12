<template>
    <div>
        <h1 :style="'color: ' + color">{{ title }}</h1>
        <img :src="images[imageIndex]" alt="plaatje" width="300">
        <button class="btn btn-dark" @click="changeImage">Change image</button>
        <button class="btn btn-primary" @click="getImages">Get Images</button>
    </div>
</template>

<script>

export default {
    props: {
        title: {
            required: true,
            default: 'Coffee',
        },

        color: '',
        name: '',
    },

    data() {
        return {
            images: [],
            imageIndex: 0,
        }
    },

    methods: {
        changeImage() {
            if (this.imageIndex + 1 > this.images.length - 1) {
                this.imageIndex = 0;
                this.imageFile = '';
            } else {
                this.imageIndex++;
            }

            this.imageFile = this.images[this.imageIndex];
        },

        getImages() {
            let self = this;

            axios({
                method: 'POST',
                url: '/',
                data: {
                    surprise: true,
                    list: [
                        'a', 'b', 'c',
                    ],
                }
            }).then(function(response) {
                self.images = response.data.images;
            }).catch(function(error) {
                console.log(error);
            });
        },
    }
}

</script>