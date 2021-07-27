<template>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" :src="image" alt="side-bar-image" /></div>
        <div class="col-xl-5 p-0">
          <div class="login-card">
            <div>
              <!-- views/assets/images/ -->
              <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" :src="liteLogo" alt="looginpage"></a></div>
              <div class="login-main"> 
                <form class="theme-form" @submit.prevent="loginUser">
                  <h4>Sign in to account</h4>
                  <p>Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" v-model="data.email" required />
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" v-model="data.password" required />
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkboxhttp://127.0.0.1:8000/api/login1" type="checkbox">
                      <label class="text-muted">Remember password</label>
                    </div>
                    <button class="btn btn-primary btn-block w-100" type="submit">
                      <span v-if="signUpText">Sign up</span>
                      <ButtonLoader v-if="loader"></ButtonLoader>
                    </button>
                    <div id="errorDiv" class="text-center"></div>
                  </div>
                  <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</template>

<script>
  import sideImage from "../../assets/images/2.jpg";
  import liteLogo from "../../assets/images/logo_dark.png";

  import ButtonLoader from '../GlobelComponents/ButtonLoader.vue'
    export default {
      data(){
        return{
          data:{},
          image: sideImage,
          liteLogo:liteLogo,
          loader: false,
          signUpText:true
        }
      },
      methods:{
        loginUser(){
          this.loader=true;
          this.signUpText=false;
          let uri="/attemptlogin";
          this.$http.post(uri, this.data).then((response) => {
              this.loader=false;
              this.signUpText=true;
              if(response.data._metadata.outcomeCode == 3)
              {
                $('#errorDiv').html(response.data._metadata.message);                
              }else{
                location.assign("/dashboard"); 
              }
          });
        }
      },
      components:{
        ButtonLoader
      }
    }
</script>

<style>
.custom-container{
    margin-top:100px;
}
.loader-box{
  height: 45px !important;
}
#errorDiv{
  font-weight: bolder;
  color: red;
}
</style>