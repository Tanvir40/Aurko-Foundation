Vue.component('print-icon',{ //modal
    props:['query_string'],
    template:`<button  class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-settings mr-1"></i>Export/Print 
                                    <div class="dropdown-menu arrow">
                                        <a class="dropdown-item" :href="present_uri+'export/csv?'+query_string"><i class="fa fa-cart-plus mr-1"></i>CSV </a>
                                        <a class="dropdown-item" :href="present_uri+'export/excel?'+query_string"><i class="fa fa-calendar mr-1"></i>Excel </a>
                                        <a class="dropdown-item" :href="present_uri+'export/pdf?'+query_string"><i class="fa fa-life-ring mr-1"></i>PDF</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" :href="present_uri+'export/print?'+query_string"><i class="fa fa-cog mr-1"></i>Print </a>
                                    </div>
                                </button>`
});