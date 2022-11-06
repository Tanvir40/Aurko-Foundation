// coltroller: people  model: person
// Config


var crudConfigMore = {
    business_number: '', // find where it is used 
    steps: [],
field_of_interest:false, 
    type_list: [],
    gender_list: gender_list,
    skill_levels: skill_levels,
    blood_group_list: blood_group_list,
    marital_status_list: marital_status_list,
    religion_list: religion_list,
    identity_type_list: identity_type_list,
    identity_level: "Identity",
    people: [],
    person: {},
    custom_data: {},
    job_id: job_id,

    // other form list
    primary_contacts: [],
    cvc_education_qualifications: [],
    cvc_achievements: [],
    cvc_other_activitys: [],
    cvc_professional_experiences: [],
    cvc_skills: [],
    cvc_training_or_cirtifications: [],
    cvc_work_experience: {},
    cvc_languages: [],
    cvc_references: [],
    people_contacts: [],
    enableStep: function (alias, status) {

        if (status === false) {
            return status;
        } else {
//            console.log(alias);
//            alias = true; 
            return alias;
        }
    },
    goNext: function () {
//        function(alias, status);
// let isExistStepList = crudConfigs.steps.filter(item => item.alias === alias);
//// isExistStepList.is_enable= true; 
////        console.log(isExistStepList);
//        crudConfigs.hasView(alias, true); 
        for (let key in crudConfigs.steps) {
            let item = crudConfigs.steps[key];
           // console.log(item);
            if (item.is_enable === false) {
                item.is_enable = true; 
                
              return  crudConfigs.enableStep(item.alias, true);
            }
        }

    },
    hasView: function (alias) {

        // crudConfigs.steps.push(alias);
        let isExistStepList = crudConfigs.steps.filter(item => item.alias === alias);
        let isExistStep = isExistStepList.length > 0;

        if (isExistStep === false) {
            crudConfigs.steps.push(Vue.util.extend({}, {'alias': alias, is_enable: false}));
        }


    },
    addEducation_qualification: function () {
        crudConfigs.cvc_education_qualifications.push(Vue.util.extend({}, []));
    },
    removeEducation_qualification: function (index) {
        Vue.delete(crudConfigs.cvc_education_qualifications, index);
    },

    addAchievement: function () {
        crudConfigs.cvc_achievements.push(Vue.util.extend({}, []));
    },
    removeAchievement: function (index) {
        Vue.delete(crudConfigs.cvc_achievements, index);
    },

    addOtherActivity: function () {
        crudConfigs.cvc_other_activitys.push(Vue.util.extend({}, []));
    },
    removeOtherActivity: function (index) {
        Vue.delete(crudConfigs.cvc_other_activitys, index);
    },

    addProfessionalExperience: function () {
        crudConfigs.cvc_professional_experiences.push(Vue.util.extend({}, []));
    },
    removeProfessionalExperience: function (index) {
        Vue.delete(crudConfigs.cvc_professional_experiences, index);
    },

    addSkill: function () {
        crudConfigs.cvc_skills.push(Vue.util.extend({}, []));
    },
    removeSkill: function (index) {
        Vue.delete(crudConfigs.cvc_skills, index);
    },

    addTrainingOrCirtification: function () {
        crudConfigs.cvc_training_or_cirtifications.push(Vue.util.extend({}, []));
    },
    removeTrainingOrCirtification: function (index) {
        Vue.delete(crudConfigs.cvc_training_or_cirtifications, index);
    },

    addLanguage: function () {
        crudConfigs.cvc_languages.push(Vue.util.extend({}, []));
    },
    removeLanguage: function (index) {
        Vue.delete(crudConfigs.cvc_languages, index);
    },

    addReference: function () {
        crudConfigs.cvc_references.push(Vue.util.extend({}, []));
    },
    removeReference: function (index) {
        Vue.delete(crudConfigs.cvc_references, index);
    },

    addPeopleContact: function () {
        crudConfigs.people_contacts.push(Vue.util.extend({}, []));
    },
    removePeopleContact: function (index) {
        Vue.delete(crudConfigs.people_contacts, index);
    },

    addMore: function () {
    },
    fetchObject: function (selectedItemId) {
        axios.get(crudConfigs.url + "get/" + selectedItemId).then(res => {
            if (res.status == 200) {
                crudConfigs.person = crudConfigs.checkType(res.data.person);
                // set image path crudConfigs.person.profile_image =  crudConfigs.imagePath+crudConfigs.person.profile_image;
            }
        });
    },
    fetchObjects: function (page, callback) {
        crudConfigs.search.page = page !== undefined ? page : 1;
        //  crudConfigs.search.extra_search_params=  "" ; //Set extra search params
        let url = crudConfigs.url + "get/?" + crudConfigs.makeSerialize(crudConfigs.search);
        axios.get(url).then(res => {
            crudConfigs.people = res.data.people;
            if (res.data.paging != undefined) {
                crudConfigs.paging = res.data.paging;
            } else {
                crudConfigs.paging.pages = 0;
                crudConfigs.parents = res.data.people;
            }

            if (callback != undefined) {
                callback();
            }
        });
    },
    onSave: function (event) {
        crudConfigs.clearMessage();

        // education
        crudConfigs.person.cvc_education_qualifications = JSON.stringify(crudConfigs.cvc_education_qualifications);

        // achievement
        crudConfigs.person.cvc_achievements = JSON.stringify(crudConfigs.cvc_achievements);

        // other activity
        crudConfigs.person.cvc_other_activitys = JSON.stringify(crudConfigs.cvc_other_activitys);

        // professional experiences
        // crudConfigs.person.cvc_professional_experiences = JSON.stringify(crudConfigs.cvc_professional_experiences);

        // cvc_skills
        crudConfigs.person.cvc_skills = JSON.stringify(crudConfigs.cvc_skills);

        // cvc_training_or_cirtifications
        crudConfigs.person.cvc_training_or_cirtifications = JSON.stringify(crudConfigs.cvc_training_or_cirtifications);

        // cvc_languages
        crudConfigs.person.cvc_languages = JSON.stringify(crudConfigs.cvc_languages);

        // cvc_references
        crudConfigs.person.cvc_references = JSON.stringify(crudConfigs.cvc_references);

        // people_contacts
        crudConfigs.person.people_contacts = JSON.stringify(crudConfigs.people_contacts);

        // custom_data
        crudConfigs.person.custom_data = JSON.stringify(crudConfigs.custom_data);


        //job_id
        crudConfigs.person.job_id = crudConfigs.job_id;

        //crudConfigs.person.primary_contacts =   JSON.stringify(crudConfigs.primary_contacts);


        const person = {...crudConfigs.person, ...crudConfigs.primary_contacts}
        // other

        var formData = crudConfigs.formData(person);

        axios.post(crudConfigs.url + "post", formData, crudConfigs.csrfToken).then(res => {
            if (res.status == 200 && res.data.code == 200) {
                crudConfigs.successMessage = res.data.message;
                crudRouter.push("/confirmation");
            } else {
                crudConfigs.errorMessage = res.data.message;
            }

        });
    },

    onUpdate: function (event) {
        crudConfigs.clearMessage();
        var formData = crudConfigs.formData(crudConfigs.person);
        //                    console.log(formData); 
        axios.post(crudConfigs.url + "put/" + crudConfigs.person.id, formData, crudConfigs.csrfToken).then(res => {
            if (res.status == 200 && res.data.code == 200) {
                crudConfigs.successMessage = res.data.message;
                crudRouter.push("../../index.html");
            } else {
                crudConfigs.errorMessage = res.data.message;
            }

        });
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
    }
    ,
       onFileSelected:function(e) {
        var files = e.target.files || e.dataTransfer.files;
        if (!files.length)
            return;
        let params = {};
        let target_id = e.target.id;
        params[target_id] = e.target.files[0];
       
        crudConfigs.formDataMore = Object.assign(crudConfigs.formDataMore, params);
    },
    onFileChange:function(e) {
        var files = e.target.files || e.dataTransfer.files;
        if (!files.length)
            return;
        let params = {};
        let target_id = e.target.id;
        params[target_id] = e.target.files[0];
        crudConfigs.createImage(files[0], target_id);
        crudConfigs.formDataMore = Object.assign(crudConfigs.formDataMore, params);
        
    },
    createImage:function(file, target_id) {
        var reader = new FileReader();
        reader.onload = (e) => {
            let content = e.target.result;
            crudConfigs.person[target_id] = e.target.result;
        };
        reader.readAsDataURL(file);
    },
    changeIdentityLevel(event) {
        crudConfigs.identity_level = event.targetElement.value();
    }

};

//  merge with main config
crudConfigs = Object.assign(crudConfigs, crudConfigMore);
// Index Componenet
var indexComponent = Vue.extend({
    template: "#application_index",
    data: function () {
        return crudConfigs;
    },
    mounted: function () {
        this.currentAction = "";
        // this.person = {first_name:"Saidul", expected_duration:4, };
        // this.fetchObjects();
        this.person = {identity_type:"pp"};
        this.cvc_education_qualifications.push(Vue.util.extend({}, []));
        this.cvc_achievements.push(Vue.util.extend({}, []));
        this.cvc_other_activitys.push(Vue.util.extend({}, []));
        this.cvc_professional_experiences.push(Vue.util.extend({}, []));
        this.cvc_skills.push(Vue.util.extend({}, []));
        this.cvc_training_or_cirtifications.push(Vue.util.extend({}, []));
        this.cvc_languages.push(Vue.util.extend({}, []));
        this.cvc_references.push(Vue.util.extend({}, []));
        this.people_contacts.push(Vue.util.extend({}, []));

    },
    methods: {}
});
// Add Componenet
var addComponent = Vue.extend({
    template: "#people_add",
    data: function () {
        return crudConfigs;
    },
    mounted: function () {
        this.clearMessage();
        this.currentAction = "Add";
        this.person = {identity_type:"pp"};
      

    },
    methods: {}
});
// View Componenet
var viewComponent = Vue.extend({
    name: "show",
    template: "#people_view",
    data: function () {
        return crudConfigs;
    },
    mounted: function () {
        this.clearMessage();
        this.currentAction = "View"
        this.fetchObject(this.$route.params.id);
    },
    methods: {}
});
// Edit Componenet
var editComponent = Vue.extend({
    template: "#people_edit",
    data: function () {
        return crudConfigs;
    },
    mounted: function () {
        this.clearMessage();
        this.currentAction = "Edit"
        this.fetchObject(this.$route.params.id);
    },
    methods: {}
});


// Edit Componenet
var confirmationComponent = Vue.extend({
    template: "#application_confirmation",
    data: function () {
        return crudConfigs;
    },
    mounted: function () {
        this.clearMessage();

    },
    methods: {}
});

// Router 
var crudRouter = new VueRouter({
    routes: [
        {path: "/", component: indexComponent},
        {path: "/confirmation", component: confirmationComponent},
//        { path: "/page/:number", component: indexComponent },
//        { path: "/add", component: addComponent },
//        { path: "/edit/:id", component: editComponent, name: "edit" },
//        { path: "/view/:id", component: viewComponent, name: "show" },
    ]
});
// Apps  
var app_people = new Vue({
    router: crudRouter,
    data: crudConfigs,
    methods: {}
}).$mount("#app_applications");