<div id="ebm-alerts-wrapper"></div>

@push('footer-scripts')
  <script>
    (function(global){
      global.EbmAlert = function(){
        this.id = 'ebm-alert-' + Math.floor(Math.random(0, 100) * 100);
        this.alert = this.getTemplate();
        this.wrapper = document.querySelector('#ebm-alerts-wrapper');
        this.type = 'info';
      }

      global.closeEbmAlert = function(id){
        document.querySelector('#' + id).style.display = 'none';
      }

      EbmAlert.prototype.getTemplate = function(){
        var el = document.createElement('div');

        el.id = this.id;

        el.classList.add('ebm-alert');

        var template = '<div class="alert-left">' +
                        '<i class="icon-notification-circle"></i>' +
                      '</div>' +
                      '<div class="alert-right">' +
                        '<div class="alert-header">' +
                          '<h5 class="title"></h5>' +
                        '</div>' +
                        '<div class="alert-content">' +
                          '<p class="message"></p>' +
                        '</div>' +
                        '<div class="alert-close" onclick="return closeEbmAlert(\'' + this.id + '\')">' +
                        '<i class="icon-cross-circle"></i></div>' +
                      '</div>';

        el.innerHTML = template;

        return el;
      }

      EbmAlert.prototype.display = function(type, title, message){
        this.alert.classList.remove('ebm-alert-' + this.type);
        this.type = type;
        this.alert.classList.add('ebm-alert-' + this.type);

        if (title) {
          this.alert.querySelector('.title').innerText = title;
          this.alert.querySelector('.alert-header').style.display = 'block';
        } else {
          this.alert.querySelector('.alert-header').style.display = 'none';
        }

        this.alert.querySelector('.message').innerText = message || '';

        this.alert.style.display = 'block';

        this.wrapper.append(this.alert);
      }

      EbmAlert.prototype.hide = function(){
        this.alert.style.display = 'none';
      }
    })(window)
  </script>
@endpush
