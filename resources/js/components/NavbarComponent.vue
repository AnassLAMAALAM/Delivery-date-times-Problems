<template>

<nav class="navbar navbar-expand-lg navbar-light bg-lightt">
  <a class="navbar-brand" href="#" >
    <img :src="'/images/nav-logo.png'" style="width:80px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      
      <ul class="navbar-nav mr-auto nav1">
      <li class="nav-item">
        <a class="nav-link" href="#" style=""><i class="fas fa-user-tie"></i> Personal</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-briefcase"></i> Business</a>
      </li>
      </ul>
        <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact US</a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Log in</a>
      </li>
    </ul>
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Goin Now</button>
    </form>
  </div>
</nav>
</template>
<script>
export default {
  
}
</script>