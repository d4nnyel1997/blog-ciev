<template>
    <app-layout :title="post.name">
        <div class="bg-red-500 container">
            <div v-for="post in post_list"  class="grid grid-cols-3 gap-6">
                <article>
                     {{ "http://blog-ciev.test/storage/"+ (post.image.url)}}
                </article>
            </div>

        </div>
    </app-layout>
</template>
<script>
import { defineComponent } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'

export default defineComponent({
    props: {
        post: Array,
    },

    components: {
        AppLayout,
    },

    data(){
        return {
            post_list : this.post,
        }
    }
})

</script>
