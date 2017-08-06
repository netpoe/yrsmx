(function(global){
  var AdminProductsCatalog = function(){}

  AdminProductsCatalog.prototype = {
    getUnassignedFiles: function(url, onSuccess, onError){
      axios({
        method: 'POST',
        baseURL: url,
      }).then(function(response){
        console.log(response)
        if (onSuccess) onSuccess(response);
      }).catch(function(error){
        console.log(error)
        if (onError) onError(error);
      })
    },

    getFiles: function(url, data, onSuccess, onError){
      axios({
        method: 'POST',
        baseURL: url,
        data: data,
      }).then(function(response){
        console.log(response)
        if (onSuccess) onSuccess(response);
      }).catch(function(error){
        console.log(error)
        if (onError) onError(error);
      })
    },

    getUnassignedProducts: function(url, data, onSuccess, onError){
      axios({
        method: 'POST',
        baseURL: url,
        data: data,
      }).then(function(response){
        console.log(response)
        if (onSuccess) onSuccess(response);
      }).catch(function(error){
        console.log(error)
        if (onError) onError(error);
      })
    },
  }

  global.AdminProductsCatalog = AdminProductsCatalog;

})(window)
