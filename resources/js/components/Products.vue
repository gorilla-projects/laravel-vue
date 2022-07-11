<template>
    <div>
        <h1>{{ title }}</h1>
        <img :src="images[imageIndex]" alt="plaatje" width="300">
        <button class="btn btn-dark" @click="changeImage">Change image</button>
    </div>
</template>

<script>

export default {
    props: {
        title: {
            required: false,
            default: 'Coffee'
        }
    },

    data() {
        return {
            images: [
                'images/coffee.jpg',
                'images/coffee2.jpg',
                'images/berries.jpg',
            ],
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
        }
    }
}

</script>