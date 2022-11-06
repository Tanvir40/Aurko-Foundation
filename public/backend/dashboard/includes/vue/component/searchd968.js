Vue.component('search-component',{
    props:['searchcolumns','search', 'printable','exportable', 'search_by_off',  'keyword_off', 'add_off'],
    data: function () {
        var keyword_off = this.keyword_off !== undefined ? this.keyword_off :false;  
//        alert(present_uri);
  
        
 
        return {
            values: [], 
             base_url:window.base_url,
             present_uri:window.present_uri,
             page_limit_list:{10:10, 20:20,50:50,100:100},
        }
    },
       
    template:`<div class="col-md-12"><div class="row"><div class="col-9 pr-0"><form @submit.prevent="$emit('onsearch')" class="form-inline">
                 <div  class="input-group  mr-sm-2">
                                   
                                   <select v-model="search.limit" class="form-control">
                                <option v-for="(value, key)  in page_limit_list" :value="key">{{value}}</option>
                            </select>
                                </div>
                        
                                <div v-if="!search_by_off" class="input-group  mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Search By</div>
                                    </div>
                                   <select v-model="search.field" class="form-control" @change="selectedItem">
                                <option v-for="(value, key)  in searchcolumns" :value="key">{{value}}</option>
                            </select>
                                </div>
 
                        <slot name="extention"></slot> 
 
                                <div v-if="!keyword_off"  class="input-group  mr-sm-2">
 
                             <input placeholder="keyword...." v-if="values.length==0" type="text" v-model="search.keyword" class="form-control" maxlength="255" />
                                </div>
                                <div class="input-group   mr-sm-1">
                                    <button type="submit" class="btn btn-primary "><i class="fa fa-search"></i> Search </button> 
                             <a href="#" @click="clearFilter"  class="btn btn-default">Clear</a>
                                </div>
                             
            </form></div>
                        <div class=" pl-1 ml-auto "> 
                         <div class="btn-group float-md-right">
                         <slot name="more_button"  ></slot> 
                 
                                 <router-link  v-if="!add_off"  v-bind:to="{path: '/add'}"> <button   class="btn btn-success"  >Add</button> </router-link>
            
            <div v-if="printable" class="dropdown ">
                <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="icon-settings mr-1"></i>Export/Print 
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                 <a  class="dropdown-item"  @click="exportMe('print')" href="#">Print</a>
                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item" :href="exportMe('csv')">CSV</a>
                    <a class="dropdown-item" :href="exportMe('excel')">Excel</a>
                    <a class="dropdown-item" :href="exportMe('pdf')">PDF</a>
            
                    
                </div>
            </div>
                                    
                            </div>
                        </div>
             </div>
      </div>
            `,
 mounted: function () {
       
    },
    methods:{
        selectedItem:function(){
            for(i in this.searchcolumns){
                if(i && i == this.search.field){
                     this.$emit('moresearch',i)
                }
            }
             this.search.value = '';
        },
        
        clearFilter:function(){
            this.search.field = 0;
            this.search.keyword = '';
           this.$emit('onclear');
        },
        exportMe:function(type){
            let qs= this.makeSerialize(this.search);
            let eUrl = this.base_url+this.present_uri+'export/'+type+'?'+qs; 
//            console.log(qs)
            if(type==='print'){
            printHtml('html_print_container',eUrl);
        }
        else{
            return eUrl; 
        }
        },
         makeSerialize: function (obj) {
        var str = [];
        for (var p in obj)
            if (obj.hasOwnProperty(p)) {
                str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
            }
        return str.join("&");
    }
    },
    
  
     
    
})