Vue.component('modal',{ //modal
    props:['id','model_width'],
     data: function () {
      model_width = this.model_width !== undefined ? this.model_width :'70%';  
//        alert(present_uri);
        return {
           //model_width: this.model_width 
        }
    },
    template:`<div class="modal fade" :id="id">
    <div class="modal-dialog" :style="'width:'+ model_width+';'">
        <div class="modal-content">
            <div class="modal-header">
               <slot name="head" class="modal-title"></slot> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
            <slot name="body"></slot>
            </div>
            <div class="modal-footer">
              <slot name="foot"></slot>                
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>`
});