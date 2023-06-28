<template>
    <div class="row">
        <div class="half-circle-spinner" v-if="isLoading">
            <div class="circle circle-1"></div>
            <div class="circle circle-2"></div>
        </div>

        <div class="col-lg-2" v-for="item in data" :key="item.id" v-if="!isLoading && data.length">
            <div class="text-center p-3">
                <a :href="item.url" data-bs-toggle="tooltip" data-bs-placement="top" :title="item.name" :data-bs-original-title="item.name">
                    <img :src="item.logo" :alt="item.name" class="img-fluid">
                </a>
            </div>
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

    mounted() {
        this.getData();
    },

    props: {
        url: {
            type: String,
            default: () => null,
            required: true
        },
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
    }
}
</script>
