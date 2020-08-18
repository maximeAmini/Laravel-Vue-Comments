<template>
<div class="comms">

    <div class="comms-list">
        <div class="comm" v-for="comm in comms" :key ="comm.id">{{comm}}</div>
    </div>

    <form action="" class="comms-form" @submit.prevent="addComm">
        <input type="text" placeholder="Laisser votre commentaire" v-model="comm" >
    </form>

</div>

</template>

<script>
    export default {

        data (){
            return {
                comm:"",
                comms : ['1er comm','2eme comm','3eme comm']
            }
        }

    }

</script>

<style scoped>

</style>
