<template>
    <div class="container">
        {{nom}}
    </div>
</template>

<script>
    export default {
        data(){
            return {
                'nom': 'maxime amini'

            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
