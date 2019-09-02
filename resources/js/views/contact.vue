<template>
    <div class="formContent">

    <section class="section" >
        <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <form action="/mail" method="post" @submit.prevent="onSubmit" @keydown="searchErrors($event.target.name)">
                    <div class="field">
                    <label class="label">Name</label>
                        <div class="control">
                            <input v-model="name" name="name" class="input" type="text" placeholder="e.g Alex Smith" autofocus>
                            <span class="text-danger is-small" v-if="error.has('name')">{{error.get('name')}}</span>
                        </div>
                        </div>

                        <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input v-model="mail" name="mail" class="input" type="text" placeholder="e.g. alexsmith@gmail.com">
                    <span class="text-danger is-small" v-if="error.has('mail')">{{error.get('mail')}}</span>

                        </div>
                        </div>
                        <div class="field">
                            <label class="label">Request</label>
                                <div class="control">
                        <textarea v-model="description" name="description" class="textarea" placeholder="..."></textarea>
                        <span class="text-danger is-small" v-if="error.has('description')">{{error.get('description')}}</span>

                                </div>

                        </div>
                    <button class="button is-primary" :class="{'is-loading':isLoading}" :disabled="error.any()">Submit</button>
        </form>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <section class="section" id="message">
                                    <div class="container">
                                    <h1 class="title">Enzo ZoneM, at Your Service Anytime</h1>
                                    <h2 class="subtitle">
                                        Hi there!, <strong>Ask Anything you want..</strong>
                                    </h2>
                                    </div>
                                </section>
            </div>
        </div>

    </div>
                        <section class="contactFooter">
                             <h4 class="subtitlecolor">© 2019 Enzo Minniti | All Rights Reserved.</h4>
                         </section>


                </section>

            <div class="modal is-active" v-show="showModal">
                    <div class="modal-background"></div>
                    <div class="modal-card">
                        <header class="modal-card-head">
                                <p class="modal-card-title">Success, Message in way!</p>
                                <button class="delete" aria-label="close" @click="showModal=!showModal"></button>
                                </header>
                        <section class="modal-card-body">
                        <h2 class="subtitle">Your message have been send, hopfully read it... just kidding</h2>

                            <img src="/images/paperplane.png" alt="">

                        </section>

                    </div>
                    </div>
    </div>
</template>
<script>
class Errors{
    constructor(){
            this.errors={}
    }
    record(errors){
        this.errors=errors
    }
    has(error){
        return this.errors.hasOwnProperty(error);
    }
    get(error){
        if(this.errors[error]){
            return this.errors[error][0];
        }
    }
    any(){
        return Object.keys(this.errors).length>0;
    }
    clear(error){
        delete this.errors[error];
    }
}

export default {
        data() {
            return {
                    name:'',
                    mail:'',
                    description:'',
                    isLoading:false,
                    error:new Errors,
                    showModal:false,
            }
        },
        methods:{
            onSubmit(){
                this.isLoading=true;
                axios.post('/mail',this.$data)
                            .then(response=>this.onSuccess(response.data))
                            .catch(error=>this.error.record(error.response.data.errors))
            },
            onSuccess(data){
                this.isLoading=false;
                this.showModal=true;
                this.name='';
                this.description='';
                this.mail='';

            },
            searchErrors(eventName){
                    this.error.clear(eventName);
            }
        }
}
</script>
<style>
.formContent{
    height: 100vh;
    width: 100vw;
}

.subtitlecolor{
    padding-top: 30px;
    color: hsl(171, 100%, 41%);
}
.contactFooter{
    position: absolute;
    bottom: 7px;
    height: 10vh;
    width: 100%;
    background-color:transparent;
}
@media(max-width:900px){
    .formContent{
    height: 100%;
    width: 100%;
    }
    #message{
        padding-top: 0;
    }
    .contactFooter{
        position: relative;
        display: block;

    }

}

</style>
