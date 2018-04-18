$(document).ready(function(){

  $("#loginization").validate({

    rules:{

      login:{
        required: true,
        minlength: 4,
      },

      pass:{
        required: true,
        minlength: 3,
      },
    },

    messages:{

      login:{
        required:   "  поле обязательно для заполнения",
        minlength:  "  длинна мение 4-х символов",
      },

      pass:{
        required:   "  поле обязательно для заполнения",
        minlength:  "  длинна мение 3-х символов",
      },

    },

  });


  $("#create_banner").validate({

    rules:{

      name:{
        required: true,
        minlength: 2,
      },

      url_adress:{
        required: true,
        minlength: 4,
      },

      height:{
        number: true,
      },

      width:{
        number: true,
      },

      status:{
        required: true,
        number: true,
      },

      position:{
        required: true,
        number: true,
      },

    },


    messages:{

      name:{
        required:   "  поле обязательно для заполнения",
        minlength:  "  длинна мение 2-х символов",
      },

      height:{
        number: "  пожалуйста ввидите число",
      },

      width:{
        number: "  пожалуйста ввидите число",
      },

      url_adress:{
        required:   "  поле обязательно для заполнения",
        minlength:  "  длинна мение 4-х символов",
      },

      status:{
        required: "  поле обязательно для заполнения",
        number:   "  пожалуйста ввидите число",
      },

      position:{
        required: "  поле обязательно для заполнения",
        number:   "  пожалуйста ввидите число",
      },

    },

  });


  $("#update_banner").validate({

    rules:{

      name:{
        required:   true,
        minlength:  2,
      },

      height:{
        number: true,
      },

      width:{
        number: true,
      },

      url_adress:{
        required:   true,
        minlength:  4,
      },

      status:{
        required: true,
        number:   true,
      },

      position:{
        required: true,
        number:   true,
      },

    },


    messages:{

      name:{
        required:   "  поле обязательно для заполнения",
        minlength:  "  длинна мение 2-х символов",
      },

      height:{
        number: "  пожалуйста ввидите число",
      },

      width:{
        number: "  пожалуйста ввидите число",
      },

      url_adress:{
        required:   "  поле обязательно для заполнения",
        minlength:  "  длинна мение 3-х символов",
      },

      status:{
        required: "  поле обязательно для заполнения",
        number:   "  пожалуйста ввидите число",
      },

      position:{
        required: "  поле обязательно для заполнения",
        number:   "  пожалуйста ввидите число",
      },

    },

  });

});
