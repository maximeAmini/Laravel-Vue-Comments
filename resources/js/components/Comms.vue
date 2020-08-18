<template>
    <div class="comms">
        <div class="comms-list">
            <div class="comm" v-for="comm in comms" :key="comm">
                <div>
                    <div><img src="img/1.jpg" alt="photo de profile" class="pdp"></div>
                    <div class="user-name">
                        {{comm.user}}
                        <span>{{comm.created_at}}</span>
                    </div>
                </div>
                <p>{{comm.content}}</p>
            </div>
        </div>

        <form action="" class="comms-form" @submit.prevent="addComm">
            <input type="text" placeholder="Laisser votre commentaire" class="comm-input" v-model="comm.content">
        </form>

    </div>

</template>

<script>
    export default {

        data() {
            return {
                comm: { user: "Maxime Amini", content: this.comm},
                comms: this.dataComm
            }
        },
        props: ['dataComm'],
        methods: {
            addComm() {
                axios.post('/comms', this.comm).then((result) => {
                    this.comms.push(result.data)
                    this.comm = ""
                })
            }
        }

    }

</script>

<style scoped>
    .comms {
        width: 50%;
        color: #495057;
    }

    .comm div {
        display: flex;
        align-items: center;
    }

    .comm .pdp {
        width: 40px;
        height: 40px;
        border-radius: 100%;
    }

    .comm .user-name {
        font-weight: bold;

        margin-left: 10px;
        flex-direction: column;
        align-items: flex-start;
    }

    .comm .user-name span {
        font-weight: normal;
        font-size: 12px;
        color: #9e9fb4;
    }

    .comms .comms-form .comm-input {
        border: none;
        width: 100%;
        border-top: 1px solid #dbdce7;
        height: calc(1.5em + 0.75rem + 2px);
        padding-left: 1rem;
    }

    .comms .comms-form .comm-input:focus {
        color: #495057;
        border: none;
        border-top: 1px solid #dbdce7;
        outline: 0;
    }

</style>
