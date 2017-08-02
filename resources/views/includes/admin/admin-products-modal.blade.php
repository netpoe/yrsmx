@section('site-wrapper')
  <section id="upload-products-modal">
    <div>
      <form method="POST" action="{{ route('admin.products.create') }}">
        {{ csrf_field() }}
        <header class="modal-header">
          <div>
            <h3>Asigna imágenes a un producto</h3>
            <p>Selecciona imágenes, da clic en crear producto y después categoriza el producto creado.</p>
          </div>
          <div>
            <nav>
              <button class="btn btn-secondary" @click="close">Cancelar</button>
              <button type="submit" class="btn btn-primary" :disabled="selectedImages.length == 0">Crear producto</button>
            </nav>
          </div>
        </header>
        <div class="modal-body products-list">
          <ul class="grid-list grid-list-6" v-if="unassignedImages">
            <li class="product-item" v-for="$item in unassignedImages">
              <div>
                <input type="checkbox" :id="$item.id" name="product-images[]" :value="$item.id" @click="addImages($item.id, $event)">
                <label :for="$item.id" class="img-wrapper">
                  <img :src="$item.file_src" :alt="$item.filename">
                </label>
              </div>
            </li>
          </ul>
        </div>
        <footer class="modal-footer"></footer>
      </form>
    </div>
  </section>
@endsection

@push('footer-scripts')
  <script>
    window.$uploadProductsModal = new Vue({
      el: '#upload-products-modal',
      data: {
        unassignedImages: [],
        selectedImages: [],
      },
      created: function(){},
      methods: {
        getUnassignedFiles: function(){
          var $vm = this;

          AdminProductsCatalog
            .getUnassignedFiles("{{ route('admin.products.get-unassigned-files') }}", function(response){
              $vm.unassignedImages = response.data;
              $vm.$el.style.display = 'block';
            });
        },
        close: function(event){
          var $vm = this;

          event.preventDefault();

          $vm.selectedImages = [];

          $vm.$el.style.display = 'none';
        },
        addImages: function(id, $event){
          if ($event.target.checked) {
            this.selectedImages.push(id);
          } else {
            var index = this.selectedImages.indexOf(id);
            if (index > -1) {
              this.selectedImages.splice(index, 1);
            }
          }
        }
      }
    });
  </script>
@endpush
