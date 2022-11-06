 
var present_url = (typeof present_uri !== 'undefined') ? base_url+ present_uri :base_url;
var image_path = image_path !== undefined ? image_path : "";
var search_by_fields = search_by_fields !== undefined ? search_by_fields : {};
var win=window;// for calling all window function or JS fnction 
var logged_user_id=win.logged_user_id!== undefined ?win.logged_user_id:0; 
var crudConfigs = {
    window:win,
    logged_user_id:logged_user_id,
    base:base_url,
    url: present_url,
    unique_var_counter:1,
    imagePath: image_path,
    deleteModal: true,
    currentAction: "",
    searchColumns: search_by_fields,
    selectedItemId: 0,
    moreSearchOption: "",
    errorMessage: "",
    successMessage: "",
    confirmMessage: "",
    csrfToken: { headers: { 
            is_ajax: true, 
            'Content-Type': 'multipart/form-data' ,
             'Content-type': 'application/json; charset=utf-8',
            'Accept': 'application/json; charset=utf-8',
            "Access-Control-Allow-Origin": "*",
         } },
    printable: true,
    formDataMore: [],
    paging: { limit: 10, page: 1, pages: 0, currentPageItem: 0 },
     search: { field: "", limit: 10 },
    clearMessage: function () {
        crudConfigs.successMessage = "";
        crudConfigs.errorMessage = "";
    },
    clearSearch: function () {
        crudConfigs.clearMessage();
        crudConfigs.fetchObjects();
    },
    makeSerialize: function (obj) {
        var str = [];
        for (var p in obj)
            if (obj.hasOwnProperty(p)) {
                str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
            }
        return str.join("&");
    },

    formData(obj) {
        var formData = new FormData();
        for (let key in obj) {
            let val = obj[key];
            val=val===true?1:val;
            val=val===false?0:val;
            formData.append(key, val);
        }
        // CSRF name and value 
        var csrf_token_name = csrf_token_name !== undefined ? csrf_token_name : "token_name";
        var csrf_hash = csrf_hash !== undefined ? csrf_hash : "";
        formData.append(csrf_token_name, csrf_hash);
        let more = crudConfigs.formDataMore;
        for (let i in more) {
            //            console.log(more[i]); 
            formData.append(i, more[i]);
        }
        //formData = Object.assign(formData, crudConfigs.formDataMore);
        return formData;
    },
    deleteItem: function (id) {
        crudConfigs.selectedItemId = id;
    },
    deleteConfirm: function () {
        crudConfigs.clearMessage;
        axios.post(crudConfigs.url + "delete/" + crudConfigs.selectedItemId, "", crudConfigs.csrfToken).then(res => {
            if (res.data.code == 200) {
                this.fetchObjects(crudConfigs.paging.page, () => {
                    crudConfigs.successMessage = res.data.message;
                });
            } else {
                crudConfigs.errorMessage = res.data.message;
            }
        });
    },
    cancelDelete: function () {
        crudConfigs.selectedItemId = "";
    },
    onSearch: function () {
        crudConfigs.clearMessage();
        crudConfigs.fetchObjects();
    },
    setSearchOption: function (i) {
        crudConfigs.moreSearchOption = i;
    },
    setValue(list, id) {
        for (let key in list) {
            if (key === id) return list[key];
        }
        return id;
    },
     setObjectValue(object, id) {
        for (let key in object) {
             if (id === object[key].id) return object[key].title;
//            if(object.child!==undefined ){
//                console.log(object.child);
//               return this.setObjectValue(object.child, id);
//            }
    
        }
        return id;
    },
checkType: function(obj){
    var newObj = [];
    for (var p in obj){
        //null value convert to ""
        let item = obj[p]==="null"  || obj[p]===null || obj[p]==="" ? "":obj[p];
//"1"/"0" convert to  1/0
        item = item==="1" ? 1 :item;
        item = item==="0" ?0 :item;
        newObj[p]= item;
    }
    return newObj;
},

// only numeric
   isNumberKey: function(evt) {
       let val = evt.target.value;
        var charCode =(event.which) ? event.which : event.keyCode
        
        if (charCode > 31 && (charCode < 48 || charCode > 57))//for numeric
        {  
            evt.target.value= val.substring(0, val.length - 1);
          return false;
                 
        }
        else  return true;
    },

    // allow decimal
    isDecimalKey:function(evt) {
          let val = evt.target.value;
       var charCode =(event.which) ? event.which : event.keyCode
        if (charCode > 31 && (charCode != 46 && (charCode < 48 || charCode > 57)))//for decimal
         {  
            evt.target.value= val.substring(0, val.length - 1);
            return false;
                 
        }
        else  return true;
       
    },
 
uniqueID: function() {
    var d = new Date();
    var u = d.getFullYear() + "," + d.getMonth() + "," + 
            d.getHours() + "," + d.getMinutes() + "," + 
            d.getSeconds() + "," + this.unique_var_counter;
    this.unique_var_counter++;
    return u.replace(/\,/g, "");
},

    closeManager: function () {
         $('#smanager').removeClass('active');
            $('.overlay').removeClass('active');
    },
    priorityBadge:function(priority){
        let badge = "badge-info"; 
        if(priority==='medium'){
            badge = "badge-primary";
        }
        else if(priority==='high'){
            badge = "badge-warning";
        }
        
         else if(priority==='highest'){
            badge = "badge-danger";
        }
        return "badge badge-default "+badge;
    },
    taskStatusBadge:function(status){
        let badge = "border-warning warning"; 
        if(status==='doing'){
            badge = "border-primary primary";
        }
        else if(status==='done'){
            badge = "border-success success";
        }
        
        
        return "badge   badge-border "+badge;
    } 
    
}; 

  
  
  
  var jsEncode = {
	encode: function (s, k) {
		var enc = "";
		var str = "";
		// make sure that input is string
		str = s.toString();
		for (var i = 0; i < s.length; i++) {
			// create block
			var a = s.charCodeAt(i);
			// bitwise XOR
			var b = a ^ k;
			enc = enc + String.fromCharCode(b);
		}
		return enc;
	}
};