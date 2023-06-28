<template>
    <div class="col-lg-10">
        <div v-if="isLoading">
            <div class="half-circle-spinner">
                <div class="circle circle-1"></div>
                <div class="circle circle-2"></div>
            </div>
        </div>

        <div class="swiper pb-5" v-if="!isLoading" v-swiper id="testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" v-for="item in data">
                    <div class="card testimonial-box">
                        <div class="card-body">
                            <div class="mb-4">
                                <img :src="item.image" :alt="item.name" height="50" />
                            </div>
                            <p class="testimonial-content lead text-muted mb-4" v-html="item.content"></p>
                            <h5 class="mb-0">{{ item.name }}</h5>
                            <p class="text-muted mb-0">{{ item.company }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            isLoading: true,
            data: []
        };
    },
    props: {
        url: {
            type: String,
            default: () => null,
            required: true
        },
    },
    mounted() {
        this.getData();
    },
    methods: {
        getData() {
            this.data = [];
            this.isLoading = true;
            axios.get(this.url)
                .then(res => {
                    this.data = res.data.data ? res.data.data : [];
                    this.isLoading = false;
                })
                .catch(res => {
                    this.isLoading = false;
                    console.log(res);
                });
        },
    },
}
</script>
