<template>
    <app-layout title="Dashboard">


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <welcome />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'

    export default defineComponent({
        props: {
            customers: Array
        },
        components: {
            AppLayout,
            Welcome,
            JetResponsiveNavLink,
        },

        data(){
            return{
                isOpen: false,
            }
        },

        methods:{
            view(){
                this.isOpen = true
            },

            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    })
</script>
