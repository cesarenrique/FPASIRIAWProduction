<x-layout bodyClass="g-sidenav-show  bg-gray-200">
        <x-navbars.sidebar activePage="tables"></x-navbars.sidebar>
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <x-navbars.navs.auth titlePage="Tables"></x-navbars.navs.auth>
            <!-- End Navbar -->
            <div class="container-fluid py-4">

              <div class="contenedor-01">
                  <div class="contenedor-form">
                      <form action="<?php echo url('/localidad/registrar'); ?>" method="POST">
                          <input type="hidden" name="_token" value="<?php echo  csrf_token(); ?>">
                          <div class="form-group">
                              <label for="nombre">Estanteria</label>
                              <input type="text" class="form-control" name="estanteria">
                          </div>
                          <div class="form-group">
                              <label for="cp">Localizacion</label>
                              <input type="text" class="form-control" name="localizacion">
                          

                          <button type="submit" class="btn btn-primary">Registrar</button>
                      </form>
                  </div>
              </div>
                </div>
                <x-footers.auth></x-footers.auth>
            </div>
        </main>
        <x-plugins></x-plugins>

</x-layout>
