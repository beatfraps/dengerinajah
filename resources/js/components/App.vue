<template>
  <div id="app">
    <div id="nav">
      <p id = "tab"> DengerinAja </p>
    </div>
    <router-view/>
  </div>
</template>

<style>
#app {
  font-family: Helvetica;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#tab{
  float: left;
  color:white;
  font-size: 20px;
}

#nav {
  padding: 30px;
  padding-bottom: 50px;
  background: black;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
