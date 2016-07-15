function range(len){
  return Array.apply(null, Array(len)).map(function (_, i) {return i;});
}

Vue.config.debug = true;
Vue.http.options.root = '/api';
