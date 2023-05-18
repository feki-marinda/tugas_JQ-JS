$("#formValidation").validate({
rules:{
    first_name:{
        minlength:2
    },
    last_name:{
    },
    email:{
        email:true
    }
},
messages: {
    first_name:{
        required: "Please enter your firs name",
        minlength: "Name at least 2 character"
    },
    last_name:{
        required: "Please enter your last name",
    },
    email:"Please enter your email",
    phone:"Please enter your phone",
    address:"Please enter your address",
    
  },

    submitHandler: function(form) {
      form.submit();
    }
   });