<template>
    <div class="question">
        <div class="line">
            <div class="que">{{msg}}</div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Question",
        props:["question"],
        data() {
            return {
                msg: ''
            };
        },
        methods: {

        },
        mounted(){
            this.msg = this.question;
        }
    }
</script>

<style scoped>
    .question {
        display: flex;
        justify-content: flex-start;
    }


    .question  .line {
        margin-top: 14px;
    }

    .question  .que {
        display: inline-block;
        min-width: 30px;
        max-width: 280px;
        min-height: 38px;
        line-height: 22px;
        font-size: 14px;
        background: white;
        color: #383434;
        padding: 5px 15px;
        border-radius: 60px/20px 40px 70px 100px;
        word-break: break-all;
    }

</style>