Vue.component('paginator', {
    props: ['pageinfo', 'fetchdata'],
    template: `
    <div class="row">
    <div class="col-md-4">
            <div class="pageinfo_info">Page {{pageinfo.page}} of {{pageinfo.pages}}, Total {{pageinfo.total}} records found</div>\n\
            </div>
            <div class="col-md-8">
               <div class="paginator pull-right">
                    <ul class="pagination">
                        <li class="page-item" v-if="pageinfo.page>1" ><span @click="firstPage" class="page-link">&lt;&lt; First</span></li>
                        <li class="page-item" v-if="pageinfo.page>1"><span @click="prevPage" class="page-link">&lt; Previous</span></li>
                        <li class="page-item" :class="{active:(pageinfo.page==i)}" :disabled="(pageinfo.page==i)" v-for="(i in (parseInt(pageinfo.page)+parseInt(2))" v-if="showPage(i)"><span class="page-link" @click="fetchObjects(i)">{{i}}</span></li>
                        <li class="page-item" v-if="pageinfo.page<pageinfo.pages"><span @click="nextPage" class="page-link">Next &gt;</span></li>
                        <li class="page-item" v-if="pageinfo.page<pageinfo.pages"><span @click="lastPage" class="page-link">Last &gt;&gt;</span></li>        
                    </ul>
               </div>
            </div>
            </div>`,
    methods: {
        showPage: function (i) {
          //  console.log(this.pageinfo.page+"="+i);
//            if(this.pageinfo.page==i){
//                return false; 
//            }
//            else {
            return (((this.pageinfo.page - i) <= 2) && (i <= this.pageinfo.pages));
//        }
        },
        fetchObjects:function(i){
            this.fetchdata(i);
        },
         prevPage: function () {
            if (this.pageinfo.page > 1) {
                this.pageinfo.page = parseInt(this.pageinfo.page) - 1;;
                this.fetchObjects(this.pageinfo.page);
            }
        },
        nextPage: function(){
          //  console.log(this.pageinfo);
             if (this.pageinfo.page < this.pageinfo.pages) {
                this.pageinfo.page = parseInt(this.pageinfo.page) + 1;
                this.fetchObjects(this.pageinfo.page);
            }
            
        },
        firstPage: function () {
            this.pageinfo.page = 1;
            this.fetchObjects(this.pageinfo.page);
        },
        lastPage: function () {
            this.pageinfo.page = parseInt(this.pageinfo.pages);
            this.fetchObjects(this.pageinfo.page);
        }
    }
});