<template>
    <div class="row">
        <div class="half-circle-spinner" v-if="isLoading">
            <div class="circle circle-1"></div>
            <div class="circle circle-2"></div>
        </div>

        <div class="col-lg-4 col-md-6" v-for="item in data" :key="item.id" v-if="!isLoading && data.length">
            <div class="blog-box card p-2 mt-3">
                <div class="blog-img position-relative overflow-hidden">
                    <a :href="item.url">
                        <img :src="item.image" :alt="item.name" class="img-fluid" />
                    </a>
                    <div class="bg-overlay"></div>
                    <div class="author">
                        <p class="mb-0"><i class="mdi mdi-account text-light"></i> <span class="text-light user">{{ item.author_name }}</span></p>
                        <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> {{ item.created_at }}</p>
                    </div>
                    <div class="likes">
                        <ul class="list-unstyled mb-0">
                            <li class="list-inline-item"><span class="text-white"><i
                                class="mdi mdi-eye-circle me-1"></i> {{ item.views }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <a :href="item.url" class="primary-link">
                        <h5 class="fs-17">{{ item.name }}</h5>
                    </a>
                    <p class="text-muted blog__description">{{ item.description }}</p>
                    <div class="d-flex w-100">
                        <a :href="item.url" class="btn btn-border btn-brand-hover">{{ __('Keep reading') }} </a>
                        <i class="mdi mdi-bookmark-outline align-items-center d-flex ms-auto fs-4 text-black-50"></i>
                    </div>
                </div>
            </div><!--end blog-box-->
        </div><!--end col-->
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
