"use strict";$(function(){$("#login-form").validate({
    rules:{email:{required:true,email:true},
    password:{required:true,minlength:6}},
    messages:{email:{required:"الرجاء إدخال البريد الإلكتروني",
    email:"البريد الإلكتروني غير صحيح"},
    password:{required:"الرجاء إدخال كلمة المرور",
    minlength:$.validator.format("الرجاء إدخال {0} حروف على الأقل ")}},
    submitHandler:function submitHandler(form){form.submit()}})});