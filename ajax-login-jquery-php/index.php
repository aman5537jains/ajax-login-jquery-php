<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
 
  <script type="text/javascript">
   $(function(){

    $("#loginform").on("submit",function(){

        $.post("handle-login.php",$(this).serialize(),function(data){
             if(data.status){
                 //redirect to dashboard
                 $("#err_msg").html('');
                 alert("Login successfull redirecting");
                 window.location="dashboard.php"
             }
             else{
                 //show error message
                $("#err_msg").show();
                $("#err_msg").html(data.msg);
                setTimeout(function(){
                    $("#err_msg").hide();
                },2000)
              
                
             }
        });
        return false;
    })

   })
  </script>

  <link
    href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    rel="stylesheet"
  />
</head>

<body>
  <div class="container">
    <!-- main app container -->
    <div class="readersack">
      <div class="container">
        <div class="row">
          <div class="col-md-9 offset-md-3">
            <h3>
            Ajax login using jquery php - Readerstacks
            </h3>
            <form name="loginform"  id="loginform">
            <div id="err_msg" style="color:white;padding:10px;background:red;display:none;margin:10px"></div>
            <div class="form-group">
                <label>Email</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="form-control"
                />
              </div>
              <div class="form-group">
                <label>Password</label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form-control"
                />
              </div>
             
              <div id="error" style="color: red"></div>
              <div class="form-group">
                <input type="submit" value="Submit" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- credits -->
    <div class="text-center">
      <p>
        <a href="#" target="_top"
          >Ajax login using jquery php</a
        >
      </p>
      <p>
        <a href="https://readerstacks.com" target="_top">readerstacks.com</a>
      </p>
    </div>
  </div>
</body>
