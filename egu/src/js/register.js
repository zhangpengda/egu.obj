"use strict";$(function(){var i=!1,r=!1,e=!1;$("#mobile").blur(function(){var e=$("#mobile").val().trim();if(e){if(/^1(3|4|5|7|8)\d{9}$/.test(e)){$.ajax({type:"get",url:"../api/egu-pd/so_user.php",async:!0,data:{username:$("#mobile").val()},success:function(e){var r;console.log(e),r=e,0==JSON.parse(r)?($("#phone_tips").empty(),$("#p_chk").removeClass("amdin-register-nr-k-cuo"),$("#p_chk").addClass("amdin-register-nr-k-dui"),i=!0):($("#phone_tips").empty(),$("#p_chk").addClass("amdin-register-nr-k-cuo"),$("#phone_tips").append('<img src="../img/register/login_error.png">'),$("#phone_tips").append("<b>用户名已存在</b>"))}})}else $("#phone_tips").empty(),$("#t_chk").removeClass("amdin-register-nr-k-dui"),$("#phone_tips").append('<img src="../img/register/login_error.png">'),$("#phone_tips").append("<b>请输入正确的手机号码</b>"),$("#p_chk").addClass("amdin-register-nr-k-cuo")}else $("#phone_tips").empty(),$("#t_chk").removeClass("amdin-register-nr-k-dui"),$("#phone_tips").append('<img src="../img/register/login_error.png">'),$("#phone_tips").append("<b>请输入正确的手机号码</b>"),$("#p_chk").addClass("amdin-register-nr-k-cuo")}),$("#txtpwd").blur(function(){var e=$("#txtpwd").val().trim();if(e){/^.{6,18}$/.test(e)?($("#pwd_tips").empty(),$("#pwdchk").removeClass("amdin-register-nr-k-cuo"),$("#pwdchk").addClass("amdin-register-nr-k-dui"),r=!0):($("#pwd_tips").empty(),$("#t_chk").removeClass("amdin-register-nr-k-dui"),$("#pwd_tips").append('<img src="../img/register/login_error.png">'),$("#pwd_tips").append("<b>密码为6-16位的数字，字母或下划线组成</b>"),$("#pwdchk").addClass("amdin-register-nr-k-cuo"))}else $("#pwd_tips").empty(),$("#t_chk").removeClass("amdin-register-nr-k-dui"),$("#pwd_tips").append('<img src="../img/register/login_error.png">'),$("#pwd_tips").append("<b>密码为6-16位的数字，字母或下划线组成</b>"),$("#pwdchk").addClass("amdin-register-nr-k-cuo")}),$("#t_pwd").blur(function(){$("#txtpwd").val().trim()?$("#t_pwd").val().trim()?($("#t_pwd_tips").empty(),$("#t_chk").removeClass("amdin-register-nr-k-cuo"),$("#t_chk").addClass("amdin-register-nr-k-dui"),e=!0):($("#t_pwd_tips").empty(),$("#t_chk").removeClass("amdin-register-nr-k-dui"),$("#t_pwd_tips").append('<img src="../img/register/login_error.png">'),$("#t_pwd_tips").append("<b>两次密码输入不一致，请重新输入</b>"),$("#t_chk").addClass("amdin-register-nr-k-cuo")):($("#t_pwd_tips").empty(),$("#t_chk").removeClass("amdin-register-nr-k-dui"),$("#t_pwd_tips").append('<img src="../img/register/login_error.png">'),$("#t_pwd_tips").append("<b>请输入确认密码</b>"),$("#t_chk").addClass("amdin-register-nr-k-cuo"))}),$(".amdin-login-nr-login").click(function(){i&&r&&e?(location.href="../html/login.html",$.ajax({type:"post",url:"../api/egu-pd/lay_in.php",async:!0,data:{username:$("#mobile").val(),password:$("#txtpwd").val()},success:function(e){}})):alert("信息不正确")})});