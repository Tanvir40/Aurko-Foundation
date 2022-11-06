 
 Vue.component('card-header-min',{ //modal
    props:['title','current_plugin','currentaction', 'action'],
    template:`<div class="card-header">
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
            <h3 class="content-header-title mb-0">{{title}}</h3>
                <ol v-if="!breadcrumb_off" class="breadcrumb">
                    <li class="breadcrumb-item"><a :href="base_url+'dashboard'">apps dashboard</a></li>
                    <li class="breadcrumb-item"><a :href="base_url+current_plugin+'/dashboard'">{{current_plugin}}</a></li>
                    <li v-if="!currentaction" class="breadcrumb-item">{{title}}</li>
                    <li v-if="currentaction" class="breadcrumb-item"><router-link v-bind:to="'/'">{{title}}</router-link></li>
                    <li v-if="currentaction" class="breadcrumb-item">{{currentaction}}</li>
                </ol>
            </div>
        </div>
        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            </ul>
        </div>
    </div>`, 
    data:function(){
        return{
            base_url:window.base_url
        }
    },
    methods: {
 
    }
});
 
 
 Vue.component('card-header',{ //modal
    props:['title','breadcrumb_off','current_plugin','currentaction', 'action'],
    template:`<div class="card-header">
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
            <h3 class="content-header-title mb-0">{{title}}</h3>
                <ol v-if="!breadcrumb_off" class="breadcrumb">
                    <li class="breadcrumb-item"><a :href="base_url+'dashboard'">apps dashboard</a></li>
                    <li class="breadcrumb-item"><a :href="base_url+current_plugin+'/dashboard'">{{current_plugin}}</a></li>
                    <li v-if="!currentaction" class="breadcrumb-item">{{title}}</li>
                    <li v-if="currentaction" class="breadcrumb-item"><router-link v-bind:to="'/'">{{title}}</router-link></li>
                    <li v-if="currentaction" class="breadcrumb-item">{{currentaction}}</li>
                </ol>
            </div>
        </div>
        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            </ul>
        </div>
    </div>`, 
    data:function(){
        return{
            base_url:window.base_url
        }
    }, 
    methods: {
//        setAnchorCss(){
//            let css = 'breadcrumb-item';
//              if(this.currentaction){
//                  css += ' anchor'; 
//              }
//              return css; 
//        }, 
//        showIndex:function(){
//            this.actionExist = false; 
//            if(this.currentaction){
//             this.actionExist = true; 
//        }
//        }
    }
});

 