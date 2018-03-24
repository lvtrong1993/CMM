<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Đăng nhập</title>
        <meta name="description" content="Love Authority." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    </head>
    <body>
        <!--hero section-->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 mx-auto">
                        <div class="card border-none">
                            <div class="card-body">
                                <div class="mt-2">
                                    <img src="{{url('img/LogoUser.png')}}" class="brand-logo mx-auto d-block img-fluid rounded-circle"/>
                                </div>
                                <p class="mt-4 text-white lead text-center">
                                    ĐĂNG NHẬP BẰNG TÀI KHOẢN TNK.COM.VN
                                </p>
                                <div class="mt-4" action = "#">
                                    <form id = "form">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Enter email address" value="hieu@gmail.com">
                                            <span id="msg_email" class = "msg-item" style = "color:red;">   </span><br/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Enter password" value="123456">
                                            <span id="msg_password" class = "msg-item" style = "color:red;">   </span><br/>
                                        </div>
<!--                                         <label class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description text-white">Keep me logged in</span>
                                        </label>  -->
                                        <button type="submit" onClick="return get_data()" class="btn btn-primary float-left">Đăng nhập</button>
                                    </form>
                                    <div class="clearfix"></div>
                                    <p class="content-divider center mt-4"><span>or</span></p>
                                </div>
                                <p class="mt-4 social-login text-center">
                                    <a href="https://twitter.com" class="btn btn-twitter"><em	class="ion-social-twitter"></em></a>
                                    <a href="https://www.facebook.com" class="btn btn-facebook"><em class="ion-social-facebook"></em></a>
                                 <!--    <a href="#" class="btn btn-linkedin"><em class="ion-social-linkedin"></em></a> -->
                                    <a href="https://www.google.com.vn" class="btn btn-google"><em class="ion-social-googleplus"></em></a>
                                    <!-- <a href="" class="btn btn-github"><em class="ion-social-github"></em></a> -->
                                </p>
<!--                                 <p class="text-center">
                                    Don't have an account yet? <a href="register.html">Sign Up Now</a>
                                </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
        <script>
        	function get_data() {
                var info = {};
                    $(".msg-item").html("");

                    $.each($('form').serializeArray(),function(){
                        info[this.name] = this.value;
                    });

                    console.log(info);

                    $.ajax('/login', {
                        type: 'POST',  
                        data: info,
                        async: false,
                        success: function (data, status, xhr) {
                             console.log(data);
                            if(data.errors)
                            {
                                if(data.errors.email){
                                    $( '#msg_email' ).html( data.errors.email[0] );
                                }
                                if(data.errors.password){
                                    $( '#msg_password' ).html( data.errors.password[0] );
                                }
                            }
                            if(data.success)
                            {
                                var t = confirm("Đăng nhập thành công");
                                if (t === true)
                                    location = "{{url('/blank')}}";
                            }
                            else
                            {
                                var e = alert("Email hoặc mật khẩu của bạn không đúng");
                                if(e === true)
                                    location = "{{url('/')}}";
                            }
                        }
                    });
                return false;
            }
        </script>
    </body>
</html>
