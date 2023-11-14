
   
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="/images/tent.jpg" alt="Card image cap">
      
      <div class="card-footer d-flex justify-content-between">
        <h4 class="text-center mb-3">
          {{Auth::user()->name}}
        </h4>
        <div>
          <a class="btn btn-warning" href="/eprovider/edit">
            <i class="fas fa-user-edit"></i>
          </a>
          
        </div>
      </div>
      
      <div class="card-body">
        <p>
        <i class="fas fa-envelope mr-2"></i>
          {{Auth::user()->email}}
        </p>
        <p>
          <i class="fas fa-phone-square-alt mr-2"></i>        
          {{Auth::user()->eqp->contact}}
        </p>
        <p>
          <i class="fas fa-map-marked mr-2"></i>
          {{Auth::user()->eqp->area}}
        </p>
        <p>
          <i class="fas fa-map-marked mr-2"></i>
          {{Auth::user()->eqp->ename}}
        </p>

      </div>
    </div>
